
<?php
require("../conexion/conexion.php");
		class ModeloPizza{

	function addPizza($nom, $pre, $tam){
	$qry ="INSERT INTO pizza VALUES(0,'$nom','$pre','$tam')";
	$res = mysql_query($qry);

	if(mysql_affected_rows()>0){
	echo "1";
	}
	else{
	echo $qry;
		}
	}

	function delPizza($id){
	$qry = mysql_query("DELETE FROM pizza WHERE id_pizza='$id'");

	if($qry){
	echo "1";
	}
	else{
	echo "0";
		}
	}



		function updPizza($id, $nom, $pre, $tam){
			$qry = "update pizza set nombre = '$nom', precio = '$pre', tamano = '$tam' WHERE id_pizza = '$id'";
			$update =mysql_query($qry);
			if($update){
				echo "1";
			}else{
				echo "0";
				}
}




		function mostrarPizza(){
			$qry=mysql_query("select * from pizza order by nombre asc");
			
			while($row=mysql_fetch_array($qry)){
				echo("<tr>");
					echo "<td align='center'>".$row["id_pizza"]."</td>";	 								
					echo "<td align='center'>".$row["nombre"]."</td>";
					echo "<td align='center'>".$row["precio"]."</td>";	
					echo "<td align='center'>".$row["tamano"]."</td>";
					//echo "<td align='center'>".$row["contra"]."</td>";
					echo "<td class='eliminar' align='center' class=''><img src='../img/eliminar.ico' width='24px' name='".$row["id_pizza"]."' height='24px' class='delPizza'></td>";
					echo "<td class=''><a href='#modalUpdPiz'><img src='../img/editar.png' width='24px' name='".$row["id_pizza"]."' height='24px' class='actualizarPizza'></a></td>";
				echo("</tr>");
			}
			
		}

		function pizzas(){
			$qry=mysql_query("select * from pizza order by nombre asc");
			
			while($row=mysql_fetch_array($qry)){
				echo("<article id='boton_pizza' style='cursor:pointer;'>");
					//echo "<td align='center'>".$row["id_pizza"]."</td>";
					//echo <input type='text' value='' name='nom' size='5' disabled/>";
					echo "<table>";
					echo "<tr id='pizza_tr'>";
					echo "<td align='center'>".$row["nombre"]."</td>";
					echo "<td align='center'>".$row["precio"]."</td>";	
					echo "<td align='center'>".$row["tamano"]."</td>";
					echo "<td class=''><img src='../img/add.png' width='24px' height='24px' class='add_pizza'></td>";
					echo "</tr>";
					echo "</table>";
					//echo "<td align='center'>".$row["contra"]."</td>";
					//echo "<td class='eliminar' align='center' class=''><img src='../img/eliminar.ico' width='24px' name='".$row["id_pizza"]."' height='24px' class='delPizza'></td>";
					//echo "<td class=''><a href='#modalUpdPiz'><img src='../img/editar.png' width='24px' name='".$row["id_pizza"]."' height='24px' class='actualizarPizza'></a></td>";
				echo("</article>");
			}
		}

	}
?>