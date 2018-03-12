<?php

class LinksModel{

	public static function link($links){

		if( $links == "inicio" ||
			$links == "access" ||
			$links == "fotografias" ||
			$links == "informacion" ||
			$links == "productos"
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