<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Pizzas Napoli, Bienvenido!</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
	<link rel="stylesheet" type="fonts/lobster/lobster.ttf" href="css/estilo.css"/>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	</head >
	<body>
	<header>
		<h1><img src="../img/logo_napoli.png" align="center" width="114" height="115" alt="Napoli">Punto de Venta</h1>
		<?php
		session_start();
		if(session_start()){
		if($_SESSION["autenticado"]= "SI"){
		echo "Adminisrador ". $_SESSION['uName']." ";
		echo "<a href='logout.php'>Cerrar sesión</a>";
		}

		}
		else{
			echo "<a href='login.html'>Iniciar sesion</a>";
		}
		?>
		<div align="right"><a  href="login.html">Login</a></div>
	</header>
	<nav>
		<ul class="menu">
			<li id="perfil"><a  name="perfil" href="#">Perfil</a></li>
			<li id="pizza"><a name="pizza" href="#">Pizzas</a></li>
			<li id="usuario"><a name="usuario" href="#">Usuarios</a></li>
		</ul>
	</nav>
	<section>
				
		<article>
			<div id="diseño" class="botones">

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