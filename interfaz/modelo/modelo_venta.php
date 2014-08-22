
<?php
require("../conexion/conexion.php");
		class ModeloVenta{

	function salePizza($nom, $pre, $tam, $cant, $ticket, $user){
		$arreglo = count($nom);
		for($i=0; $i<$arreglo;$i++){
		$sql = "INSERT INTO pizza_p values(0,'".$nom[$i]."','".$pre[$i]."','".$tam[$i]."','".$cant[$i]."','".$ticket."','".$user."', current_timestamp(), '1')";
		$res = mysql_query($sql);

				}
				
				if($res){
					return true;
				}
				else
				{
					return false;
				}

			}

	function updTicket($ticket){
			$qry = "update pizza_p set status=2 WHERE ticket = '$ticket' ";
			$update =mysql_query($qry);

			if($update){
				echo 1;

			}else{
				//echo $qry;
				echo 0;
				}
			}
		
	function mostrarVenta(){

			$qry=mysql_query("select * from pizza_p order by nombre asc");
			while($row=mysql_fetch_array($qry)){
				echo("<tr id='cols'>");
					echo "<td align='center'>".$row["nombre"]."</td>";	 								
					echo "<td align='center'>".$row["precio"]."</td>";
					echo "<td align='center'>".$row["tamano"]."</td>";	
					echo "<td align='center'>".$row["cantidad"]."</td>";
					echo "<td align='center'>".$row["ticket"]."</td>";
					echo "<td align='center'>".$row["usuario"]."</td>";
					echo "<td align='center'>".$row["fecha_venta"]."</td>";
					echo "<td class='eliminar' align='center' class=''><img src='../img/eliminar.ico' width='24px' name='".$row["id_usuario"]."' height='24px' class='delUser'></td>";
					
				echo("</tr>");
			}

			}
	function mostrarPedido(){
			//Incia
		$qry=mysql_query("select * from pizza_p where status = 1");
		$ticket=0;
		$ticket2=0;
		while($row=mysql_fetch_array($qry)){		
			if($ticket != $row["ticket"]){
				$ticket = $row["ticket"];
			}			
			if($ticket != $ticket2){
			echo "<div class='container'>";
			echo "<div class='header'>";
			echo "<table><tr>";
			echo "<td>Ticket #".$row['ticket']." </td>";
			echo "<td style='text-align:rigth;'><img src='../img/eliminar.ico' width='20px' name='".$row['ticket']."' height='20px' class='cambiaStatus'> </td>";
			echo "</tr>";
			echo "</table>";
			echo "</div>";
				$qryCount = mysql_query("select * from pizza_p where ticket='$ticket'");

				echo "<div class='mainbody'>";
					echo "<table id='pedidos'>";
					while($rowCount = mysql_fetch_array($qryCount)){

						echo("<tr>");							
							echo "<td align='center'>".$rowCount["cantidad"]."</td>";
							echo "<td align='center'>".$rowCount["nombre"]."</td>";	 															
							echo "<td align='center'>".$rowCount["tamano"]."</td>";	

																				
						echo("</tr>");
					}
							// 					for ($i=0; $i < count($rowCount) ; $i++) { 
							// 	$cant = $rowCount["precio"] + $cant;	
							// }
					echo "</table>";
					//echo "<div class='footer'>Total $".$cant."</div>";
				echo "</div>";
			}
			echo("</div>");
			echo("</div>");
			$ticket2 = $row["ticket"];
		}
			//Termina
			
	}
	
}


?>
    
    
