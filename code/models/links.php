<?php
class EnlacesModels{
	public static function enlacesModel($enlaces){
		if(
			$enlaces == "logout" ||
			$enlaces == "login" ||
			$enlaces == "home" ||
			$enlaces == "pageaccount" ||
			$enlaces == "pagecontact" ||
			$enlaces == "pagelogin" ||
			$enlaces == "pagerecovery" ||
			$enlaces == "pageregister" ||
			$enlaces == "shopcart" ||
			$enlaces == "shopwishlist"
		 ){
			$module = "views/modules/".$enlaces.".php";
		}

		else if($enlaces == "index"){
			$module = "views/modules/home.php";
		}
		else if($enlaces == "dashboard"){
			$module = "views/modules/admin/".$enlaces.".php";
		}
		else{
			$module = "views/modules/404.php";
		}
		return $module;
	}
}
