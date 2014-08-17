<?php
require("../modelo/modelo_pizza.php");
$mPizza = new ModeloPizza();
	/*session_start();
			if(!isset($_SESSION['user'])){
				header("location:login.html");
			}
		else
			{
				
	*/

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="Expires" CONTENT="0">
	<meta charset="utf-8" />
	<title>Pizzas Napoli, Bienvenido!</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
	<link rel="stylesheet" type="../fonts/lobster/lobster.ttf" href="../css/estilo.css"/>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	</head >
	<body>
	<header>
		<h1><img src="../img/logo_napoli.png" align="center" width="114" height="115" alt="Napoli">Punto de Venta</h1>
		<div id="sesion">
		<?php 
		/*echo "Bienvenido :" .$_SESSION['user'];*/
		?>
		</div>
	</header>
	<nav>
		<ul class="menu">
			<li id="venta"><a  name="venta" href="admin.php">Venta</a></li>
			<li id="pizza"><a name="pizza" href="#">Pizzas</a></li>
			<li id="usuario"><a name="usuario" href="#">Usuarios</a></li>
			<li id="display"><a name="display" href="#">Display</a></li>
			<li id="venta_dia"><a name="venta_dia" href="#">Venta Dia</a></li>
		</ul>
	</nav>
	<section>
		<div id="contenido">
					<article id="botones">
			<div id="diseño" class="botones">
			Elige pizzas a vender
			<hr>
				<!--<input type="button"  class="button" value="Mexicana"/>
				<input type="button"  class="button" value="Hawaiana"/>
				<input type="button"  class="button" value="Napoli"/>
				<input type="button"  class="button" value="Alemana"/>
				<input type="button"  class="button" value="Vegetariana"/>
				<input type="button"  class="button" value="Venecia" />
				<input type="button"  class="button" value="Dionisio" /> -->
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

			<form name="form_venta" id="formVenta" >
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
		</div>
	</section>
	<footer>
		<p>@AmadoJesusS</p>
	</footer>
</body>
</html>
<?php

?>