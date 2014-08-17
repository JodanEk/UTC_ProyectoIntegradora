<?php 
require("../modelo/modelo_pizza.php");
$mPizza = new ModeloPizza();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Pizzas Napoli, Bienvenido!</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
	<link rel="stylesheet" type="fonts/lobster/lobster.ttf" href="../css/estilo.css"/>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	</head >
		<article id="botones">
			<div id="diseño" class="botones">
			Elige pizzas a vender
			<hr>
			<?php echo $mPizza->pizzas();?>
			<hr>
			Ingredientes extras
			<br>	

				<input type="submit" class="button" value="Queso" />
				<input type="submit" class="button" value="otro" />
			</div>
		</article>
		<article id="carrito">
			Ticket No. : <input type="text" value="4" readonly="readonly" id="ticket" size="3" disabled	/><br> Detalle de la Venta actual<hr>

			<form name="form_venta" id="formVenta">
			<div id="mensaje_venta"></div>
			<div id="lista_pizza">
				
				<ul></ul>
			</div>
			<hr>

				<input type="submit" class="button" value="Enviar" id="btnEnviar"/>
				<input type="submit" class="button" value="Cancelar" id="btnCancelar"/>	
			</form>
			<div id="espera_venta"></div>
			</article>
</html>