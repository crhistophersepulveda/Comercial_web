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

	public function insertar_Producto($data){
		$this->db->insert('Producto',array(
			'Codigo'=>$data['idProducto'], 
			'Descripcion'=>$data['descripcion'],
			'Ubicacion'=>$data['ubicacion'],
			'Stock'=>$data['stock'],
			'Stock_minimo'=>$data['stock_minimo'],
			'Fecha_compra'=>$data['fecha_compra'],
			'Costo'=>$data['costo'],
			'Precio_ferretera'=>$data['ferretera'],
			'Precio_especialista'=>$data['especialista'],
			'Precio_constructora'=>$data['constructora'],
			'Proveedor'=>$data['Proveedor_rut']));
	}



}
?>