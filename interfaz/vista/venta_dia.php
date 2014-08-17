<?php 
require("../modelo/modelo_venta.php");
$mVenta = new ModeloVenta();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Pizzas Napoli, Bienvenido!</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
	<script src=”http://HTML5shim.googlecode.com/svn/trunk/HTML5.js”></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
	</head >
	<body>
		<article id="lista_pedido">
			<form name="pizzas" id="diseño" class="botones">
			Ventas del Dia | busqueda de venta por:  fecha <input type="date" id="buscar_fecha"/> No. ticket: <input type="text" id="buscar_ticket">
			<hr>
			<?php echo $mVenta->mostrarVenta(); ?>
			<div id="consulta">Aqui estará la consulta de la base de datos</div>
			<hr>
				<h1>Numero de pendientes: 0</h1>
				
			</form>
		</article>


	<footer>
		
	</footer>
</body>
</html>