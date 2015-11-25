<?php

class ingresarVendedor extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
                $this->load->model('Vendedor');
	}
        // control de direccionamiento
	public function Index (){
		$this->load->view("vendedor/ingresoVendedor");
	}
	// controlador de insercion
	public function ingresarvendedor(){
		
                $rut = $this->input->post('rut');
                $nombre = $this->input->post('nombre');        
                $direccion= $this->input->post('direccion');                            
                $celular = $this->input->post('celular');
                $correo = $this->input->post('correo');
                $sueldo_base = $this->input->post('sueldo');
                $comision = $this->input->post('comision');
                
                //ahora procesamos los datos hacía el modelo que debemos crear
                $Ingresar_vendedor = $this->Vendedor->Ingresar_vendedor($rut, $nombre, $direccion, $celular, $correo, $comision, $sueldo_base);
                $this->load->view("vendedor/ingresoVendedor");

        
	}

}
?>