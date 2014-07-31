
	<?php
	require("../conexion/conexion.php");


			$sql="select * from usuario";
			$rs=mysqli_query($sql);
			$i=0;
			$total = mysql_num_rows($rs);
			if(mysql_num_rows($rs)>1){
				echo "No hay usuarios registrados";	
			}else{
			 echo "<table border='1'>";
			 echo "<thead><tr><th>Id</th><th>nombre</th><th>precio</th><th>tamaño</th><th><a class='button'>Eliminar</a></th><th><a class='button'>Modificar</a></th></tr></thead>";
			 while ($row = mysql_fetch_array($rs)){	
			 echo "<tr>";		 								
			echo "<td align='center'>".$row["nombre"]."</td>";
			echo "<td align='center'>".$row["apellido"]."</td>";	
			echo "<td align='center'>".$row["telefono"]."</td>";	
			echo "</tr>";		 								
								
			$i++; 
			}		
			echo $total;	
			}
			
			echo "</table>";
		

?>