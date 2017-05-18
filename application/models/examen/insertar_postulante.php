<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Insertarfis_model extends CI_Model
{
	public $variable;
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}
	public function insert($nombre,$apellidopat,$apellidomat,$ci)
	//public function insert($pregunta)
	{
		$data = array(
			'ci' => $ci,
			'nombres' =>$nombre,
			'apellido_pat' =>$apellidopat ,
			'apellido_mat' =>$apellidomat,
		);
		$this->db->insert('postulante',$data);
		
		
		

	}
}