<?php
require_once '../conexion/conexion.php';
 
session_start();
$uName = $_POST['name'];
$pWord = sha1($_POST['pwd']);
$qry = "SELECT * FROM usuario WHERE usuario='".$uName."' AND contra='".$pWord."'";
$res = mysql_query($qry);
$num_row = mysql_num_rows($res);
$row=mysql_fetch_assoc($res);

if( $num_row == 1 ) {
    echo 1;
    $_SESSION['uName'] = $row['usuario'];
    $_SESSION["autenticado"]= "SI";
    //echo "<script>window.location="index.php</script>";
    }
else {
    echo 0;
}
?>