<?php

class ingresar extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
	}

	public function Index (){
		echo "es una prueba del controlador";
	}

/*----------------------------------------------------------------------------------
									ARTICULO
------------------------------------------------------------------------------------*/
	
	public function ingresararticulo(){
		$this->load->view("Articulo/ingresarArticulo");
	}

}


?>