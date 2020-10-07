<?php 

include "Carro.php";
include "Moto.php";

Class Calcular {  //Principio de responsabilidad Unica

    private $velocidad_max = 80; //variable quemada, se determina la velocidad maxima de los vehiculos

	/**
		Metodo que realiza la revisión del vehiculo,
		es el metodo principal del sistema.
	*/	
	public function RevisarVehiculo($velocidad, $tipo_vehiculo, $pasajeros){ 
		$vehiculos = [
	 		new Moto(),
	        new Carro(),
		];
		foreach ($vehiculos as  $value) { //Principio abierto y cerrado	
			if (get_class($value) == $tipo_vehiculo) {
				$cantidad = $value->Pasajeros();
				$this->CalcularNumPasajeros($pasajeros, $cantidad);
				$this->CalcularVelocidad($velocidad);
			}
		}		
	}

	/**
		Metodo privado, que realiza el calculo de la velocidad que no sea mayor
		a la permitida por la variable global.
	*/
	private function CalcularVelocidad($velocidad){
		
		if ($velocidad <= $this->velocidad_max){
			echo 'Su velocidad es de: '. $velocidad .' km y se encuentra en la maxima permitida. ';
		}else{
			echo 'Su velocidad es de: '. $velocidad .' km <p style="color:red;"> ha sobrepasado la velocidad maxima permitida. </p>';
		}

	}

	/**
		Metodo privado que realiza el calculo de los pasajeros
		que se pueden transportar en el vehiculo.
	*/
	private function CalcularNumPasajeros($pasajeros, $cantidadMax){

		if($pasajeros <= $cantidadMax){
 			echo 'La cantidad de pasajeros es de: '. $pasajeros .' Usted puede transitar sin problema, ';
 		}else{
 			echo 'La cantidad de pasajeros es de: '. $pasajeros .'<p style="color:red;"> Usted no puede transitar </p> ';
 		}
	}

}



 ?>