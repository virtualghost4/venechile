<?php


class LinksController{

	public function Link(){

		if(isset($_GET["action"])){

			$links = $_GET["action"];

		}else{

			$links = "index";
		}

			
		$response = LinksModel::link($links);

		include $response;

	}


}

?>