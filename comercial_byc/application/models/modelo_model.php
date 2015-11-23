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
								MOSTRAR TABLAS BASE DE DATOS
-------------------------------------------------------------------------------------*/

	public function mostrar_productos(){
			return $this->db->get('Producto');
	}
	public function mostrar_proveedor(){
			return $this->db->get('Proveedor');
	}



/*------------------------------------------------------------------------------------/
								INGRESAR DATOS
-------------------------------------------------------------------------------------*/





}
?>