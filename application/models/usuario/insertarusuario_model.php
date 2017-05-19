<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Insertarusuario_model extends CI_Model
{
	public $variable;
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}
	public function insert($username,$apellido_pat,$apellido_mat,$ci,$nota)
	//public function insert($pregunta)
	{
		$data = array(
			'ci' => $ci,
			'nombres' =>$username,
			'apellido_pat' =>$apellido_pat ,
			'apellido_mat' =>$apellido_mat ,
			'nota' =>$nota ,
		);
		$this->db->insert('postulante',$data);
	}
}