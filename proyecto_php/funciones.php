<?php

	function tiene_sesion(){
		return isset($_SESSION["usuario"]) ? true : false;
	}

	function incrementar_credito(){
		$_SESSION["creditos"]++;	
	}
	
	function jugar(&$premiado){
		if($_SESSION["creditos"] > 0){
		$_SESSION["monstruo1"]=rand(1,8);
		$_SESSION["monstruo2"]=rand(1,8);
		$_SESSION["monstruo3"]=rand(1,8);
		$_SESSION["creditos"]+= modificar_creditos($premiado);
		}
	}
	
	function modificar_creditos(&$premiado){


		if($_SESSION["monstruo1"]== 1 && $_SESSION["monstruo2"]== 1 || $_SESSION["monstruo1"]== 1 && $_SESSION["monstruo3"]== 1  || $_SESSION["monstruo2"]== 1 && $_SESSION["monstruo3"]== 1 ){
			$premiado=true;
			return 2;			
		}	
		
		if($_SESSION["monstruo1"]== 1 && $_SESSION["monstruo2"]== 1 && $_SESSION["monstruo3"]== 1){
			$premiado=true;
			return 5;			
		}
			
		if($_SESSION["monstruo1"]==$_SESSION["monstruo2"] || $_SESSION["monstruo1"]==$_SESSION["monstruo3"] || $_SESSION["monstruo2"]==$_SESSION["monstruo3"]){
			$premiado=true;
			return 1;
		}
		
		if($_SESSION["monstruo1"]==$_SESSION["monstruo2"] && $_SESSION["monstruo1"]==$_SESSION["monstruo3"]){
			$premiado=true;
			return 3;
		}	
	
		return -1;
				
	}
	
	
?>