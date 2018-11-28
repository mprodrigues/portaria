<?php
	//Arquivo responsável por encontrar e carregar as classes no arquvo onde forma solicitas
	
	spl_autoload_register(function($class_name){
		$file_name = "../DAO/".$class_name.".php";
		if(file_exists(($file_name))){
			require_once($file_name);
			
		}
		
	})
	

?>