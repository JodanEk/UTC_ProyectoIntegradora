				<?php
				require("../conexion/conexion.php");
				

			$qry=mysql_query("select * from pizza_p");
			$ticket=0;
			$ticket2=0;
			while($row=mysql_fetch_array($qry)){
				if($ticket != $row["ticket"]){
					$ticket = $row["ticket"];
				}
				echo "<div class='container'>";
					echo "<div class='header'> Ticket #".$row["ticket"]."</div>";
					if($ticket != $ticket2){
						$qryCount = mysql_query("select count(1) as contador from pizza_p where ticket='$ticket'");
						$rowCount = mysql_fetch_array($qryCount);
						echo "<div class='mainbody'>";
						echo "<table>";
							for ($i=0; $i < $rowCount["contador"]; $i++) { 
								echo("<tr>");
									echo "<td align='center'>".$rowTicket["nombre"]."</td>";	 								
									echo "<td align='center'>".$rowTicket["precio"]."</td>";
									echo "<td align='center'>".$rowTicket["tamano"]."</td>";	
									echo "<td align='center'>".$rowTicket["cantidad"]."</td>";
									echo "<td class='eliminar' align='center' class=''><img src='../img/editar.png' width='24px' name='".$rowTicket["id_usuario"]."' height='24px' class='delUser'></td>";
								echo("</tr>");	
							}
						echo "</table>";
					echo "</div>";

					}
					echo("</div>");
				echo("</div>");
				$ticket2 = $row["ticket"];
			}
		
		?>