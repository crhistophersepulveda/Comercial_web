<?php

class ingresarCliente extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
		$this->load->model('Clientes');
	}

	public function Index (){
		$this->load->view("Cliente/ingresoCliente");
	}
	
	public function ingresarcliente(){
		
		$rut = $this->input->post('rut');
                $nombre = "1";//$this->input->post('nombre');        
                $direccion = "1";//$this->input->post('direccion');                            
                $contacto = "1";//$this->input->post('contacto');
                $comuna = "1";//$this->input->post('comuna');
                $ciudad = "1";//$this->input->post('ciudad');
                $rubro = "1";//$this->input->post('rubro');
                $correo = "1";//$this->input->post('correo');
                $telefono = "1";//$this->input->post('telefono');        
                $celular = "1";//$this->input->post('celular');                            
                $web = "1";//$this->input->post('web');
                $condicion_pago = "1";//$this->input->post('email');
                $giro = "1";//$this->input->post('giro');
                $vendedor_rut = "1";//$this->input->post('vendedor');
                $lista_precios_lista_precio = "1";//$this->input->post('lista_precio');	
                //ahora procesamos los datos hacía el modelo que debemos crear
                $Ingresar_cliente = $this->Clientes->Ingresar_cliente($rut, $nombre, $direccion, $contacto, 
                $comuna, $ciudad, $rubro, $correo, $telefono, $celular,$web,$condicion_pago, $giro,  $vendedor_rut, 
                $lista_precios_lista_precio );
                $this->load->view("Cliente/ingresoCliente");
        
	}

}
?>