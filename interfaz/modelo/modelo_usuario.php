
<?php
require("../conexion/conexion.php");
		class ModeloUsuario{

		function login($usuario,$contra){
		$qry = "SELECT * FROM usuario WHERE usuario='".$usuario."' AND contra='".$contra."'";
		$res = mysql_query($qry);
		$num_row = mysql_num_rows($res);
		$row=mysql_fetch_assoc($res);


		if( $num_row == 1 ) {
			session_start();
		   	echo 1;
		    $_SESSION['usuario'] = $row['usuario'];
		    $_SESSION['nombre'] = $row['nombre'];
		    $_SESSION['apellido'] = $row['apellido'];
		    //$_SESSION["autenticado"]= "SI";
		   //header("location:../vista/admin.php")

		    }
		else {
		
		    echo "0";
		    
		}
	}

	function addUsuario($nom, $ape, $tel, $dir, $usu, $con){
	$res = mysql_query("INSERT INTO usuario VALUES(0,1,'$nom','$ape','$tel','$dir','$usu',sha1('$con'),current_timestamp(),1)");
	if(mysql_affected_rows()>0){
	echo "1";
	}
	else{
	echo "0";
		}
	}

	function delUsuario($id){
	$qry = mysql_query("DELETE FROM usuario WHERE id_usuario='$id'");

	if($qry){
	echo "1";
	}
	else{
	echo "0";
		}
	}



		function updUsuario($id, $nom, $ape, $tel, $dir, $usu, $con){
			$qry = " UPDATE usuario set nombre = '$nom', apellido = '$ape', telefono = '$tel', direccion = '$dir', usuario = '$usu', contra = '$con' where id_usuario = '$id' ";
			
			$update =mysql_query($qry);
			if($update){
				echo "1";
			}else{
				echo "0";
				}
}



			function mostrarUsuario(){
			$qry=mysql_query("select * from usuario order by nombre asc");
			
			while($row=mysql_fetch_array($qry)){
				echo("<tr id='cols'>");
					echo "<td align='center'>".$row["id_usuario"]."</td>";	 								
					echo "<td align='center'>".$row["nombre"]."</td>";
					echo "<td align='center'>".$row["apellido"]."</td>";	
					echo "<td align='center'>".$row["telefono"]."</td>";
					echo "<td align='center'>".$row["direccion"]."</td>";
					echo "<td align='center'>".$row["usuario"]."</td>";
					//echo "<td align='center'>".$row["contra"]."</td>";
					echo "<td class='eliminar' align='center' class=''><img src='../img/eliminar.ico' width='24px' name='".$row["id_usuario"]."' height='24px' class='delUser'></td>";
					echo "<td align='center' class=''><a href='#modalUpdUsu'><img src='../img/editar.png' width='24px' name='".$row["id_usuario"]."' height='24px' class='actualizarUsuario'></a></td>";
				echo("</tr>");
			}
			
		}

	}
?>
