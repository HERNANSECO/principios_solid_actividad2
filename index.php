<?php 

 include "Calcular.php";
	
	$vehiculo = New Calcular();
	$vehiculo->RevisarVehiculo($_REQUEST['velocidad'],$_REQUEST['vehiculo'],$_REQUEST['pasajeros']);
	//$vehiculo->IndexVehiculo(78,'Carro',3);

?>