<?php

class LinksModel{

	public function link($links){

		if( $links == "inicio" ||
			$links == "access" 
			){

			$module = "views/modules/".$links.".php";
			
		}else if($links == "index"){
			$module = "views/modules/access.php";
			
		}else{
			$module = "views/module/access.php";
			
		}

		return $module;
	}
}