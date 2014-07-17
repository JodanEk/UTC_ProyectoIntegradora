<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Pizzas Napoli, Bienvenido!</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	<link rel="stylesheet" type="fonts/lobster/lobster.ttf" href="css/estilo.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	</head >
	<body>
	<header>
		<h1><img src="img/logo_napoli.png" align="center" width="114" height="115" alt="Napoli">Punto de Venta</h1>
		<?php
session_start();
if(session_start()){
	if($_SESSION["autenticado"]= "SI"){
	echo "Bienvenido ". $_SESSION['uName']." ";
	echo "<a href='vista/logout.php'>Cerrar sesión</a>";
}

}
else{
	echo "<a href='login.html'>Iniciar sesion</a>";
}
?>
		<div align="right"><a  href="vista/login.html">Login</a></div>
	</header>
	<nav>
		<ul class="menu">
			<li id="inicio"><a name="inicio" href="#">inicio</a></li>
			<li id="somos"><a name="somos" href="#">Quienes somos</a></li>
			<li id="producto"><a name="producto" href="#">Productos</a></li>
			<li id="contacto"><a name="contacto" href="#">Contacto</a></li>
		</ul>
	</nav>
	<section>
				
		<article>
			<div id="diseño" class="botones">
			Elige pizzas a vender
			<hr>
				<input type="button"  class="button" value="Mexicana"/>
				<input type="button"  class="button" value="Hawaiana"/>
				<input type="button"  class="button" value="Napoli"/>
				<input type="button"  class="button" value="Alemana"/>
				<input type="button"  class="button" value="Vegetariana"/>
				<input type="button"  class="button" value="Venecia" />
				<input type="button"  class="button" value="Dionisio" />
			<hr>
			Ingredientes extras
			<br>	

				<input type="submit" class="button" value="Queso" />
				<input type="submit" class="button" value="otro" />
			</div>
		</article>
		<article id="carrito">
			<form name="cobro" id="formVenta">
			Ticket:  60 detalle de la Venta actual<hr>
			<div id="lista_pizza">
				<ul></ul>
			</div>
			<hr>

				<input type="submit" class="button" value="Enviar" id="btnEnviar"/>
				<input type="submit" class="button" value="Cancelar" id="btnCancelar"/><div id="espera"></div>	
			</form>
			</article>
	</section>
	<section>
		<div id="contenido"></div>
	</section>
	<footer>
		<p>@AmadoJesusS</p>
	</footer>
</body>
</html>
<!-- punto de venta napolis, Creado desde cero con HTML5, Ajax, Css3 
		//if($('#lista_pizza').html('')){
		//$('#lista_pizza').html('<a class="clsEliminarElemento"></a>');-->