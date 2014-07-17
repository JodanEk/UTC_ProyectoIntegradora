<?php

require_once '../conexion/conexion.php';

$nom = $_POST['nombre'];
$ape = $_POST['apellido'];
$tel = $_POST['telefono'];
$dir = $_POST['direccion'];
$usu = $_POST['usu'];
$con = sha1($_POST['con']);

 
$res = mysql_query("INSERT INTO usuario VALUES(0,1,'$nom','$ape','$tel','$dir','$usu','$con',current_timestamp(),1)");
if(mysql_affected_rows()>0){
	echo "1";
}
else{
	echo "0";
}

?>