<?php 
require("../modelo/modelo_venta.php");
$mVenta = new ModeloVenta();
	/*error_reporting();
	session_start();
	if(!isset($_SESSION['usuario'])){
	header("location:login.html");
	}*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Pizzas Napoli, Bienvenido!</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	
	</head >
	<body>
		<article id="lista_pedido">
			<form name="pizzas" id="diseño" class="botones">
			Lista de pedidos
			<hr>
			<h2><marquee behavior="alternate">No hay pendientes de pizza</marquee></h2>
			<form id="formPedido" name="formPedido" action="./">
				<?php echo $mVenta->mostrarPedido(); ?>
				<div id="consulta">Aqui estará la consulta de la base de datos</div>
			</form>
			<hr>
				<h1>Numero de pendientes: 0</h1>
				
			</form>
		</article>


	<footer>
		
	</footer>
</body>
</html>