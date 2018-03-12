<?php

	class AccessController{

		public static function access(){

			if(isset($_POST["emailInput"])){
				$datosController = array(
					"email" =>$_POST["emailInput"],
					"password"=>$_POST["passwordInput"]
				);

				

			$response  = AccessModel::access($datosController);


				if($response["email"]==$_POST["emailInput"] && $response["password"]==$_POST["passwordInput"]){

					
						header("Location:index.php?action=inicio");
					
				}else{
					echo '<div class="alert alert-danger alert-dismissible">
  							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <strong>Error!</strong> datos incorrectos.
							</div>';


				}
			}
		}
	}

?>