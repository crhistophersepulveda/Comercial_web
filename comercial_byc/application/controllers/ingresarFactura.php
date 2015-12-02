<?php

class ingresarFactura extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
	}

	public function ingresoFactura(){
		$this->load->view("Ventas/ingresoFactura");
	}
}
?>