<?php
	include("conexion.php");
	class Formulario{
		var $conn;
		var $conexion;
		var $mensajeExito;
		var $mensajeError;
		
		function Formulario(){
			$this->conexion= new  Conexion();				
			$this->conn=$this->conexion->conectar();
			$this->mensajeExito="Datos insertado correctamente";
			$this->mensajeError="Error al Registrar";
		}
		//---------------------------------------------------------------------------------------------------------------------------		
		function addVenta(){
			
			$query = "insert into  (id, nombre, precio, tamaño) values (0,'".$nombre."', '".$precio."','".$tamaño."')";			
			$registrar = mysqli_query($this->conn, $queryRegistrar) or die(mysqli_error());
		
			if($registrar){
				//echo $this->mensajeExito;
				echo "<script>location.href='../vista/formulario.php?mensaje=". $this->mensajeExito."';</script>";				
			}else{
				//echo $this->mensajeError;
				echo "<script>location.href='../vista/formulario.php?mensaje=".$this->mensajeError."';</script>";
			}
		}
?>