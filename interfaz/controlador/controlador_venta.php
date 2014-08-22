<?php 
	require("../modelo/modelo_venta.php");
	$mVenta = new ModeloVenta();
	
	/*------------------------VALORES PARA REGISTRAR UNA PIZZA-----------------------------------------------------*/
	// if(isset($_POST["nom"]) && isset($_POST["pre"]) && isset($_POST["tam"]) && isset($_POST["cant"]) && isset($_POST["ticket"]) && isset($_POST["user"])){
	// 		if($mVenta->salePizza($_POST["nom"],$_POST["pre"],$_POST["tam"],$_POST["cant"],$_POST["ticket"],$_POST["user"])){

	// 			echo 1;
	// 		}
	// 		else{
	// 			echo 0;
	// 		}
	// 	}


			/*------------------------VALOR PARA ELIMINAR UN PIZZA-----------------------------------------------------*/
	if(isset($_POST["updStatus"]) && $_POST["updStatus"] != ''){
		
			$mPizza->updTicket($_POST["updStatus"])

		
	}
		// if(isset($_POST) && $_POST != ''){
		// 	if($mVenta->updTicket($_POST["ticket_pedido"])){

		// 		echo 1;
		// 	}
		// 	else{
		// 		echo 0;
		// 	}
		// }
			//$mVenta->salePizza($_POST["nom"],$_POST["pre"],$_POST["tam"],$_POST["cant"],$_POST["ticket"],$_POST["sesion"]);
	//$mVenta->salePizza($_POST["datos"]);
	//}
	


?>
