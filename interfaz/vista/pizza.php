<?php 
require("../modelo/modelo_pizza.php");
$mPizza = new ModeloPizza();

?>
<!DOCTYPE html>
<html lang="es">
<head>
<head>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css"/>
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<meta charset="utf-8"/>
	<title></title>
	</head>
	<body>
		<a href="#modalPizza" class="button">Agregar nueva Pizza</a>
		<br>
		<hr>
		<article id="tabla"><div id="result"></div>
		<div class="tabla">
		<table>
				<thead><tr><th>Id</th><th>nombre</th><th>precio</th><th>tamaño</th><th>Eliminar</a></th><th>Modificar</th></tr></thead>
		<tfoot><tr><td colspan="10"><div id="paging"><ul><li><a href="#"><span>Previous</span></a></li><li><a href="#" class="active"><span>1</span></a></li><li><a href="#"><span>2</span></a></li><li><a href="#"><span>3</span></a></li><li><a href="#"><span>4</span></a></li><li><a href="#"><span>5</span></a></li><li><a href="#"><span>Next</span></a></li></ul></div></tr></tfoot>
		<tbody>
			<?php echo $mPizza->mostrarPizza(); ?>
		</tbody>
		</table>
		</div></article>
		
		<div id="modalPizza" class="modalmask">
			<div class="modalbox movedown">
				<a href="#close" title="Close" class="close">X</a>
			<form name="diseño" id="formPizza">
			<p>Llena el formulario con los datos de la pizza</p>
			<hr>
				<input type="text" name="piz" id="piz" class="text" placeholder="Nombre"/>
				<br>
				<input type="text" name="pre" id="pre" class="text" placeholder="precio"/>
				<br>
				<input type="text" name="tam" id="tam" class="text" placeholder="tamaño"/>
				<br>
				<hr>
				<input type="submit" class="button" value="Guardar" id="btnGuardarP"/>	
				<input type="submit" class="button" value="Cancelar" id="btnCancelar"/>	
				<div id="mensaje_p"></div>
			</form>
			</div>

		</div>
				<!-- ///////////////   Venatana MODAL de modificacion//////////////////////////-->
				<div id="modalUpdPiz" class="modalmask">
		    	<div class="modalbox movedown">
		    		<a href="#close" title="Close" class="close">X</a>
	    	<form name="modalUpdPiz" id="diseño" method="POST" action="./">
			Modifique datos
			<hr>
			<br>
				<input type="hidden" name="id_mod_p" id="id_mod_p" class="text"/>
				<input type="text" name="nom_mod_p" id="nom_mod_p" class="text" required="required" placeholder="Modifica Nombre "/>
				<input type="text" name="pre_mod_p" id="pre_mod_p" class="text" required="required" placeholder="Modifica Precio" />
				<input type="text" name="tam_mod_p" id="tam_mod_p" class="text" required="required" placeholder="Modifica Tamaño"/>
				<br>
			<hr>	
				
				
				<br>
				
				<input type="submit" id="btnModificar_piz" value="Modificar" class="button" />
				<div id="mensaje_pm"></div>
				<br>
	    	</form>
		</div>
	</div> 
</body>
</html>