<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');
/** 
* 
*/
class Obtenerpreg_model extends CI_Model
{
	public $variable;
	 
	public function __construct()
	{
		parent::__construct();
		# code...
	}
	public function selefis($carrera)
	{
		$data = array(
			'carrera'=> $carrera,
		);
		$this->db->select('*');
		$this->db->where("id_carrera",$data['carrera']);
		$this->db->order_by('rand()');
		$this->db->limit(5);
		$this->db->from('area_fisica');	 
		
		$resultado = $this->db->get();
		return $resultado;
	}
	public function selemat($carrera)
	{
		$data = array(
			'carrera'=> $carrera,
		);
		$this->db->select('*');
		$this->db->where("id_carrera",$data['carrera']);
		$this->db->order_by('rand()');
		$this->db->limit(5);
		$this->db->from('area_mate');
		//$query = $this->db->get("area_fisica");	 
		
		$resultado1 = $this->db->get();
		return $resultado1;
	}
	public function selehisto($carrera)
	{
		$data = array(
			'carrera'=> $carrera,
		);
		$this->db->select('*');
		$this->db->where("id_carrera",$data['carrera']);
		$this->db->order_by('rand()');
		$this->db->limit(5);
		$this->db->from('area_historia');
		//$query = $this->db->get("area_fisica");	 
		
		$resultado2 = $this->db->get();
		return $resultado2;
	}
	public function selelite($carrera)
	{
		$data = array(
			'carrera'=> $carrera,
		);
		$this->db->select('*');
		$this->db->where("id_carrera",$data['carrera']);
		$this->db->order_by('rand()');
		$this->db->limit(5);
		$this->db->from('area_lite');
		//$query = $this->db->get("area_fisica");	 
		
		$resultado3 = $this->db->get();
		return $resultado3;
	}
}