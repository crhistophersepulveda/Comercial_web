<?php

class Articulos_controlador extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
	}

	public function Index (){
		echo "es una prueba del controlador";
	}

	public function eliminararticulo(){
		$this ->load-> view("Articulo/eliminarArticulo");
	}

	public function modificararticulo(){
		$lista_articulo= $this->modelo_model->mostrar_productos();
		$datos['modificar'] = $lista_articulo;
		$this ->load -> view("Articulo/modificarArticulo",$datos);
	}

	public function ingresararticulo(){
		$lista_proveedors = $this->modelo_model->mostrar_proveedor();
		$datos['proveedor'] = $lista_proveedors;
		$this ->load -> view("Articulo/ingresoArticulo",$datos);
	}
	
	public function buscararticulo(){
		$lista_articulo = $this->modelo_model->mostrar_productos();
		$datos['buscar'] = $lista_articulo;
		$this->load->view("Articulo/buscarArticulo",$datos);
	}



}


?>