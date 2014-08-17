<?php 
	require("../modelo/modelo_venta.php");
	$mVenta = new ModeloVenta();
	
	/*------------------------VALORES PARA REGISTRAR UNA PIZZA-----------------------------------------------------*/
	//if(isset($_POST) && $_POST != ''){
	//	var_dump($_POST);
			$mVenta->salePizza($_POST["nom"],$_POST["tam"],$_POST["pre"],$_POST["cant"]);
	//$mVenta->salePizza($_POST["datos"]);
	//}
	


?>
