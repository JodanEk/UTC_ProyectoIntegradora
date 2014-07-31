<?php 
	require("../modelo/modelo_usuario.php");
	$mUsuario = new ModeloUsuario();
	/*$opcion = $_POST['opcion'];
	switch($opcion){
		case 'insertar':


	}*/
	
	//------------------------VALORES PARA LOGUEARSE-----------------------------------------------------
	if(isset($_POST["usuario"]) && isset($_POST["contra"])){
			if($_POST["usuario"]!="" && $_POST["contra"]!=""){
				$usuario = $_POST["usuario"];
				$contra = sha1($_POST["contra"]);
				$mUsuario->login($usuario,$contra);
			}

	}
	//------------------------VALORES PARA REGISTRAR UN USUARIO-----------------------------------------------------
	if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["telefono"]) && isset($_POST["direccion"]) && isset($_POST["usu"]) && isset($_POST["con"])){
		if($_POST["nombre"]!="" && $_POST["apellido"]!="" && $_POST["telefono"]!="" && $_POST["direccion"]!="" && $_POST["usu"]!="" && $_POST["con"]!=""){
			$mUsuario->addUsuario($_POST["nombre"], $_POST["apellido"], $_POST["telefono"], $_POST["direccion"], $_POST["usu"], $_POST["con"]);
		}
	}
	

	//------------------------VALOR PARA ELIMINAR UN USUARIO-----------------------------------------------------
	if(isset($_POST["id_eliminar"])){
		if($_POST["id_eliminar"] != ""){
			$mUsuario->delUsuario($_POST["id_eliminar"]);
		}
	}
	//------------------------VALOR PARA ACTUALIZAR UN USUARIO-----------------------------------------------------

	if(isset($_POST["id_mod_u"]) && isset($_POST["nom_mod"]) && isset($_POST["ape_mod"]) && isset($_POST["tel_mod"]) && isset($_POST["dir_mod"]) && isset($_POST["usu_mod"]) && isset($_POST["con_mod"])){
		if($_POST["id_mod_u"]!="" && $_POST["nom_mod"]!="" && $_POST["ape_mod"]!="" && $_POST["tel_mod"]!="" && $_POST["dir_mod"]!="" && $_POST["usu_mod"]!="" && $_POST["con_mod"]!=""){
			$mUsuario->updUsuario($_POST["id_mod_u"], $_POST["nom_mod"], $_POST["ape_mod"], $_POST["tel_mod"], $_POST["dir_mod"], $_POST["usu_mod"], $_POST["con_mod"]);
		}
	}

	if(isset($_POST['showUsuario'])){
		if($_POST['showUsuario'] != ""){
			$mUsuario->mostrarUsuario();
		}
	}
?>
