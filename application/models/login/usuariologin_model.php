<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Usuariologin_model extends CI_Model
{
	public $variable;
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}
	public function login($username,$ci)
	{
		$this->db->where('nombres',$username);
		$this->db->where('ci',$ci);
		$q = $this->db->get('postulante');
		if($q->num_rows()>0)
		{
			return true;
		}else
		{
			return false;
		}

	}
	
} 