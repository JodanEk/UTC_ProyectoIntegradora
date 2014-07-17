<?php 
		class Conexion{
			var $host;
			var $usuario;
			var $contrasena;
			var $baseDatos;
		
			function Conexion(){
				$this->host="localhost"; 
				$this->usuario="root"; 
				$this->contrasena=""; 
				$this->baseDatos="Napoli"; 
			}
			
			function conectar(){
				$conexion = mysqli_connect($this->host, $this->usuario, $this->contrasena, $this->baseDatos);
				if($conexion){
					//echo "Conexion exitosa";	//si la conexion fue exitosa nos muestra este mensaje como prueba, despues lo puedes poner comentarios de nuevo: //
				}else{
					echo die('Error de Conexión a la base de datos(' .mysqli_connect_errno(). ') '.mysqli_connect_error());
				}
				return($conexion);
				mysqli_close($conexion); //cierra la conexion a nuestra base de datos, un ounto de seguridad importante.
			}

			function close(){
				//mysqli_close($conexion); //cierra la conexion a nuestra base de datos, un ounto de seguridad importante.
			}
		}

?>