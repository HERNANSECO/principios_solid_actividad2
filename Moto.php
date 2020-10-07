<?php 

require_once("interface.php");

class Moto implements Template { //Principio de segregación de interfaz

	/**
		Metodo que retorna la cantidad maxima de pasajeros
		permitida por el vehiculo.
	*/
	public function Pasajeros(){
		Return 2;
	}

}


?>