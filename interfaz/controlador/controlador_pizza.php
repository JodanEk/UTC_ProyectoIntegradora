<?php 
	require("../modelo/modelo_pizza.php");
	$mPizza = new ModeloPizza();
	
	/*------------------------VALORES PARA REGISTRAR UNA PIZZA-----------------------------------------------------*/
	if(isset($_POST["piz"]) && isset($_POST["pre"]) && isset($_POST["tam"])){
		if($_POST["piz"]!="" && $_POST["pre"]!="" && $_POST["tam"]!=""){
			$mPizza->addPizza($_POST["piz"], $_POST["pre"], $_POST["tam"]);
		}
	}
	

	/*------------------------VALOR PARA ELIMINAR UN PIZZA-----------------------------------------------------*/
	if(isset($_POST["id_del"])){
		if($_POST["id_del"] != ""){
			$mPizza->delPizza($_POST["id_del"]);
		}
	}
	/*------------------------VALORES PARA ACTUALIZAR UNA PIZZA-----------------------------------------------------*/
	
	
	if(isset($_POST["id_mod_p"]) && isset($_POST["nom_mod_p"]) && isset($_POST["pre_mod_p"]) && isset($_POST["tam_mod_p"])){
	if($_POST["id_mod_p"] != "" && $_POST["nom_mod_p"] != "" && $_POST["pre_mod_p"] != "" && $_POST["tam_mod_p"] != "" ){
			$mPizza->updPizza($_POST["id_mod_p"], $_POST["nom_mod_p"], $_POST["pre_mod_p"] ,$_POST["tam_mod_p"] );
		}
	}

?>
