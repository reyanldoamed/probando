<?php
/**
* 
*/
class Admi extends CI_Controller
{
	public function __construct() {
        parent::__construct(); 
        $this->load->library('form_validation'); 
        $this->load->helper("url"); 
    }
	
	public function index()
	{

		if ($this->session->userdata('username')) {
			redirect ('admiboard');
		}
		
		if (isset($_POST['password'])){
			$this->load->model('login/usuario_model');
			if($this->usuario_model->login($_POST['username'],$_POST['password'])){
				$this->session->set_userdata('username',$_POST['username']);
				redirect ('admi/admiboard');
			}else
			{
				redirect ('/home');
			}
		}
		$this->load->view("/administrador/admi");
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect ('home');
	}
	//$this->load->view("administrador/tablero_view",$data);
} 