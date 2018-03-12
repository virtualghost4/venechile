<?php

	class AccessController{

		public static function access(){

			if(isset($_POST["emailInput"])){
				
				if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["emailInput"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["passwordInput"])){	

					$datosController = array("email" =>$_POST["emailInput"],"password"=>$_POST["passwordInput"]);

					$response  = AccessModel::access($datosController, "users");

					$intentos = $response["intentos"];
					$emailActual = $_POST["emailInput"];
					$maximointentos = 2;

					if($intentos < $maximointentos){
						
						if($response["email"]==$_POST["emailInput"] && $response["password"]==$_POST["passwordInput"]){
						
						$intentos = 0;
						$datosController = array("emailActual"=>$emailActual, "actualizarIntentos"=>$intentos);
						$intentosResponse = AccessModel::intentosModel($datosController, "users");
						header("Location:index.php?action=inicio");
							
						}else{
							echo "intentos + 1";
							++$intentos;
							$datosController = array("emailActual"=>$emailActual, "actualizarIntentos"=>$intentos);
							$intentosResponse = AccessModel::intentosModel($datosController, "users");
							echo '<div class="alert alert-danger">
							 <strong>Error!</strong> datos incorrectos.
							</div>';
						}	

					}else{
						$intentos = 0;
						$datosController = array("emailActual"=> $emailActual, "actualizarIntentos"=>$intentos);
						$intentosResponse = AccessModel::intentosModel($datosController, "users");
						echo '<div class="alert alert-danger">
								 <strong>Error!</strong> Captcha.
								</div>';
					}		
				}
			}
		}		
	}

?>