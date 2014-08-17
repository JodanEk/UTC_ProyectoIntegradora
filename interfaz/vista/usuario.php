<?php 
require("../modelo/modelo_usuario.php");
$mUsuario = new ModeloUsuario();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<meta charset="utf-8"/>
	<title></title>
	</head>
	<body>
		<!-- ///////////////   Venatana MODAL de modificacion//////////////////////////-->
				<div id="modalUpdUsu" class="modalmask">
		    	<div class="modalbox movedown">
		    		<a href="#close" title="Close" class="close">X</a>
	    	<form name="formUpdUsu" id="diseño" method="POST" action="./">
			Modifique datos
			<hr>
			<br>
				<input type="hidden" name="id_mod_u" id="id_mod_u" class="text" required="required" placeholder="Escribe Id"/>
				<input type="text" name="nom_mod" id="nom_mod" class="text" required="required" placeholder="Modifica Nombre "/>
				<input type="text" name="ape_mod" id="ape_mod" class="text" required="required" placeholder="Modifica Apellido" />
				<input type="text" name="tel_mod" id="tel_mod" class="text" required="required" placeholder="Modifica Telefono"/>
				<input type="text" name="dir_mod" id="dir_mod" class="text" required="required" placeholder="Modifica Direccion"/>
				<input type="text" name="usu_mod" id="usu_mod" class="text" required="required" placeholder="Modifica usuario"/>
				<input type="password" name="usu_mod" id="con_mod" class="text" required="required" placeholder="Modifica Contraseña"/>
			
				<br>
			<hr>	
				<div id="datos"></div>
				
				<br>
				
				<input type="submit" id="btnModificar_usu" value="Modificar" class="button" />
				<div id="mensaje_mod"></div>
				<br>
	    	</form>
		</div>
	</div> 
		<!-- //////////////////  Venatana MODAL del registro ////////////////////////////////-->
		<div id="modalRegistro" class="modalmask">
		    	<div class="modalbox movedown">
		    		<a href="#close" title="Close" class="close">X</a>
	    	<form name="formRegistro" id="diseño" method="POST">
			Registrese para acceder al sistema
			<br>
			<hr>	
				<input type="text" name="nombre" id="nombre" class="text" required="required" placeholder="Escribe Nombre "/>
				<input type="text" name="apellido" id="apellido" class="text" required="required" placeholder="apellido Apellido" />
				<input type="text" name="telefono" id="telefono" class="text" required="required" placeholder="Escribe Telefono"/>
				<input type="text" name="direccion" id="direccion" class="text" required="required" placeholder="Escribe Direccion"/>
				<input type="text" name="usuario_reg" id="usuario_reg" class="text" required="required" placeholder="Escribe usuario"/>
				<input type="password" name="contra_reg" id="contra_reg" class="text" required="required" placeholder="Escribe contraseña"/>
				<br>
				<hr>
				<input type="submit" id="btnGuardar" name="login" value="Guardar" class="button" />
				<input type="reset" id="btnReset" value="Limpiar campos" class="button" />	
				<div id="mensaje"></div>
				<br>
	    	</form>
		</div>
	</div>

		<a href="#modalRegistro" class="button">Agregar nuevo Usuario</a>
		<br>
		<hr>
		<article id="tabla"><div id="result"></div>
		<div class="tabla">
		<table id="listUsuario">
		<thead><tr><th>Id</th><th>Nombre</th><th>Apellido</th><th>telefono</th><th>Direccion</th><th>usuario</th><th>Eliminar</th><th>Modificar</th></tr></thead>
		<tbody>
			
			<?php echo $mUsuario->mostrarUsuario(); ?>
			<!-- <tr><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td><td>data</td></tr> -->
			
		</tbody>
		<!--<tfoot><tr><td colspan="10"><div id="paging"><ul><li><a href="#"><span>Previous</span></a></li><li><a href="#" class="active"><span>1</span></a></li><li><a href="#"><span>2</span></a></li><li><a href="#"><span>3</span></a></li><li><a href="#"><span>4</span></a></li><li><a href="#"><span>5</span></a></li><li><a href="#"><span>Next</span></a></li></ul></div></tr></tfoot> -->

		</table>
		</div></article>

</body>
</html>