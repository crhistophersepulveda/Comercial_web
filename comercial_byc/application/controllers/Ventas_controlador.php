<?php

class Ventas_controlador extends CI_Controller{

	public function Index (){
		echo "es una prueba del controlador";
	}

	public function igresarFactura(){
		$this -> load -> view("Ventas/ingresoFactura");
	}

	public function ingresarNC(){
		$this ->load -> view("Ventas/ingresoNotaCredito");
	}
	public function ingresarPresupuesto(){
		$this ->load -> view("Ventas/ingresoPresupuesto");
	}
	public function buscar(){
		$this ->load -> view("Ventas/buscarFactura");
	}
}


?>