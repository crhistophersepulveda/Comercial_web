<?php

class Articulos_controlador extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
	}

	public function Index (){
		echo "es una prueba del controlador";
	}

	public function eliminar(){
		$this ->load-> view("Articulo/eliminarArticulo");
	}

	public function modificar(){
		$lista_articulo= $this->modelo_model->mostrar_productos();
		$datos['modificar'] = $lista_articulo;
		$this ->load -> view("Articulo/modificarArticulo",$datos);
	}

	public function ingresar(){
		$lista_proveedors = $this->modelo_model->mostrar_proveedor();
		$datos['proveedor'] = $lista_proveedors;
		$this ->load -> view("Articulo/ingresoArticulo",$datos);
	}
	
	public function buscar(){
		$lista_articulo = $this->modelo_model->mostrar_productos();
		$datos['buscar'] = $lista_articulo;
		$this->load->view("Articulo/buscarArticulo",$datos);
	}
	public function crear_producto(){	//función que llama a la vista de creación de convenios
		
		
			$this->load->view('Articulo/ingresoArticulo');
			
	}


}


?>