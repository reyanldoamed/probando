<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Usuario_model extends CI_Model
{
	public $variable;
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}
	public function login($username,$password)
	{
		$this->db->where('nombre',$username);
		$this->db->where('password',$password);
		$q = $this->db->get('administrador');
		if($q->num_rows()>0)
		{
			return true;
		}else
		{
			return false;
		}

	}
	
} 