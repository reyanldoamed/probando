<?php
/**
* 
*/
class Resultado extends CI_Controller   
{
	public function __construct() {
        parent::__construct(); 
        $this->load->library('form_validation'); 
        $this->load->helper("url"); 
    }
	
	public function index()
	{

	$param['pregunta'] = $this->input->post('pre1');
	echo $param['pregunta']; 
	}
	//$this->load->view("administrador/tablero_view",$data);
} 