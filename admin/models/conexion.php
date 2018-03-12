<?php

 	class Conexion{


 		public static function conect(){

 			$dsn = 'mysql:dbname=venechile;host=127.0.0.1';
			$user = 'homestead';
			$password = 'secret';

			try{

				$dblink = new PDO($dsn,$user,$password);
				return $dblink;

			}catch(PDOexception $e){

				echo 'error al conectar: ' .$e->getMessage();
       		}

 			
 		}
 	}

?>

