<?php

class Conexion{


function Conexion() {
    $host = "localhost";
    $usuario = "root"; 
    $password = ""; 
    $cn = mysql_connect($host, $usuario, $password);  
    mysql_select_db('napoli',$cn);
    return $cn;
}

function desconectar($conexion) {
    mysql_close($conexion); 
}
}
?>