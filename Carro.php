<?php 

require_once("interface.php");

class Carro implements Template { //Principio de responsabilidad Unica
	
	/**
		Metodo que retorna la cantidad maxima de pasajeros
		permitida por el vehiculo.
	*/
	public function Pasajeros(){ 
		Return 4;
	}

}


?>