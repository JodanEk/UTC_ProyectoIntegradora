<?php 
	require("../modelo/modelo.php");
	$model = new modelo();
	//$mensajeExito="Registro Exitoso";
	//$mensajeError="Error al Registrar: Datos Incompletos";

	//------------------------VALORES PARA LOGUEARSE-----------------------------------------------------
	if(isset($_POST["usuario"]) && isset($_POST["contra"])){
			if($_POST["usuario"]!="" && $_POST["contra"]!=""){
				$usuario = $_POST["usuario"];
				$contra = $_POST["contra"];
				$model->login($usuario,$contra);
			}
	}	
	
	

?>