<?php

	require_once 'conexion.php';

	class AccessModel{

		public static function access($datosModel){

			$query = "SELECT email, password FROM users WHERE email = :email AND password = :password";
			$stmt = Conexion::conect()->prepare($query);
			$stmt -> bindParam(":email", $datosModel["email"]);
			$stmt -> bindParam(":password", $datosModel["password"]);

			$stmt->execute();
			$result= $stmt->fetch();
			
			return $result;
			$stmt->close();
			



		}
	}

?>