<?php

	require_once 'conexion.php';

	class AccessModel{

		public static function access($datosModel, $tabla){

			$query = "SELECT email, password, intentos FROM $tabla WHERE email = :email";
			$stmt = Conexion::conect()->prepare($query);
			$stmt -> bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
			
			$stmt->execute();
			$result= $stmt->fetch();
			
			return $result;
			$stmt->close();
		}


		public static function intentosModel($datosModel, $tabla){

			$query = "UPDATE $tabla SET intentos = :intentos WHERE email = :email";
			$stmt = Conexion::conect()->prepare($query);
			$stmt -> bindParam(":intentos", $datosModel["actualizarIntentos"], PDO::PARAM_INT);
			$stmt -> bindParam(":email", $datosModel["emailActual"], PDO::PARAM_STR);

			if($stmt->execute()){
				return "OK";
			}else{
				return "ERROR";
			}
		}
	}

?>