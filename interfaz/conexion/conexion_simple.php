<?php
$con = mysql_connect('localhost','root','') or die(mysql_error());
 
if (!$con) {
    echo "No es posible conectarse a la base de datos: " . mysql_error();
    exit;
}
 
if (!mysql_select_db("napoli")) {
    echo "La base de datos no existe u otro posible error: " . mysql_error();
    exit;
}

?>