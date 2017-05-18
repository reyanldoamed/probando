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
	public function insert($pregunta,$respuestav,$respuestaf1,$respuestaf2,$respuestaf3,$respuestaf4,$nota,$oculto)
	//public function insert($pregunta)
	{
		$data = array(
			'pregunta' => $pregunta,
			'respuestaposi' =>$respuestav,
			'respuestafalun' =>$respuestaf1 ,
			'respuestafaldos' =>$respuestaf2 ,
			'respuestafaltres' =>$respuestaf3 ,
			'respuestafalcuatro' =>$respuestaf4 ,
			'nota' =>$nota ,
			'id_carrera' =>$oculto ,
		);
		$this->db->insert('area_fisica',$data);
	}
}