
<?php
require("../conexion/conexion.php");
		class ModeloVenta{

			/*function salePizza($datos){
				print_r($datos);
			}*/
	function salePizza($nom, $tam, $pre, $cant){

		$arreglo = count($nom);
		for($i=0; $i<$arreglo;$i++){
		$sql = "INSERT INTO pizza_p values(0,'".$nom[$i]."','".$tam[$i]."','".$pre[$i]."','".$cant[$i]."') ";
		$res = mysql_query($sql);

				}
				if($res){
					echo "1";
				}
				else
				{
					echo "0";
				}

			}
		
	function mostrarVenta(){

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