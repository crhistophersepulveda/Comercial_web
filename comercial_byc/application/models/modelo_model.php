<?php
if( ! defined('BASEPATH')) exit("No direct script acces allowed");

class Modelo_model extends CI_Model
{
	
	function __construct()
	{
			parent::__construct();
		//	$this->load->database();
	}



/*------------------------------------------------------------------------------------/
								PRODUCTOS
-------------------------------------------------------------------------------------*/

/*--MOSTRAR PRODUCTOS--*/

	public function mostrar_productos(){
			return $this->db->get('Producto');
	}



/*------------------------------------------------------------------------------------/
								CLIENTES
-------------------------------------------------------------------------------------*/

/*--MOSTRAR CLIENTES--*/
	public function mostrar_clientes(){
		return $this->db->get('Cliente');
	}
/*------------------------------------------------------------------------------------/
								VENDEDOR
-------------------------------------------------------------------------------------*/

/*--MOSTRAR VENDEDORES--*/
	public function mostrar_vendedores(){
		return $this->db->get('Vendedor');
	}

/*------------------------------------------------------------------------------------/
								PROVEEDOR
-------------------------------------------------------------------------------------*/

/*--MOSTRAR PROVEEDORES--*/
	public function mostrar_proveedor(){
			return $this->db->get('Proveedor');
	}



}
?>