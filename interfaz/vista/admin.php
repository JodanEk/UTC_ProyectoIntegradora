<?php
require("../modelo/modelo_pizza.php");
$mPizza = new ModeloPizza();

	session_start();
	if(!isset($_SESSION['usuario'])){
	header("location:login.html");
	}
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
		<h1><img src="../img/logo_napoli.png" align="left" width="114" height="115" alt="Napoli">Punto de Venta</h1>
		<div id="sesion" style="text-align:left;">
		<?php 
		echo "<h4>Bienvenido!,   "  .$_SESSION['nombre'] . "," .$_SESSION['apellido'] . "    <a href='logout.php' class='button'>salir</a></h4>"; 
		echo "<input type='hidden' value=".$_SESSION['nombre'] . " id='user' name='user' />"; 
		?>
		</div>
	</header>
	<nav>
		<ul class="menu">
			<li id="venta"><a  name="venta" href="admin.php">Venta</a></li>
			<li id="pizza"><a name="pizza" href="pizza.php">Pizzas</a></li>
			<li id="usuario"><a name="usuario" href="usuario.php">Usuarios</a></li>
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
			<?php echo $mPizza->pizzas();?>
			<hr>
			</div>
		</article>
		<article id="carrito" >
		<table >
			   <tr>
				<td>Ticket No. : <input type="text" value="8"  id="ticket" name="ticket" size="3" /></td>
				<td><p>Detalle de la Venta actual</p></td>
				<td><img src='../img/carro.png' width='24px' height='24px' class='carro'></td>
			   </tr>
		</table>
			<hr>
			<form name="form_venta" id="formVenta" >
				
			<div id="mensaje_venta"></div>
			<div id="lista_pizza">	
				<ul></ul>
			</div>
			<hr>
			<table><tr><td><input type="submit" class="button" value="Enviar" id="btnEnviar"/></td><td><input type="submit" class="button" value="Cancelar" id="btnCancelar"/>	</td><div id="espera_venta"></div><td></td></tr></table>
				
				
			</form>
			
		</article>
		</div>
	</section>
	<footer>
		<p>@AmadoJesusS</p>
	</footer>
</body>
</html>
