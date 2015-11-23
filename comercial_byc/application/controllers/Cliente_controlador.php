<?php

class Cliente_controlador extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
	}

	public function Index (){
		echo "es una prueba del controlador";
	}
	public function ingresarcliente(){
		$this ->load-> view("Cliente/ingresoCliente");
	}
	public function modificarcliente(){
		$this ->load-> view("Cliente/modificarCliente");
	}
	public function buscarcliente(){
		$this ->load-> view("Cliente/buscarCliente");
	}
	public function eliminarcliente(){
		$this ->load-> view("Cliente/eliminarCliente");
	}

}


?>