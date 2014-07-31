<?php 
	require("../modelo/modelo_pizza.php");
	$mPizza = new ModeloPizza();
	/*$opcion = $_POST['opcion'];
	switch($opcion){
		case 'insertar':


	}*/
	
	//------------------------VALORES PARA REGISTRAR UNA PIZZA-----------------------------------------------------
	if(isset($_POST["piz"]) && isset($_POST["pre"]) && isset($_POST["tam"])){
		if($_POST["piz"]!="" && $_POST["pre"]!="" && $_POST["tam"]!=""){
			$mPizza->addPizza($_POST["piz"], $_POST["pre"], $_POST["tam"]);
		}
	}
	

	//------------------------VALOR PARA ELIMINAR UN USUARIO-----------------------------------------------------
	if(isset($_POST["id_del"])){
		if($_POST["id_del"] != ""){
			$mPizza->delPizza($_POST["id_del"]);
		}
	}
	//------------------------VALOR PARA ACTUALIZAR UN USUARIO-----------------------------------------------------
	
	if(isset($_POST['id_mod_p']) && isset($_POST['nom_mod_p']) && isset($_POST['pre_mod_p']) && isset($_POST['tam_mod_p']) &&){
	if($_POST['id_mod_p'] != "" $_POST['nom_mod_p'] != "" $_POST['pre_mod_p'] != "" $_POST['tam_mod_p'] != "" ){
			$mPizza->updPizza($_POST['id_mod_p'], $_POST['nom_mod_p'], $_POST['pre_mod_p'] ,$_POST['tam_mod_p'] );
		}
	}

	if(isset($_POST['showUsuario'])){
		if($_POST['showUsuario'] != ""){
			$mPizza->mostrarPizza();
		}
	}
?>
