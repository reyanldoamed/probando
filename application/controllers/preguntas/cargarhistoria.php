<?php
/**
* 
*/
class Cargarhistoria extends CI_Controller
{
	public function __construct() {
        parent::__construct(); 
        $this->load->library('form_validation'); 
        $this->load->helper("url"); 
        $this->load->model('preguntas/insertarhistoria_model');
    }
	
	public function index()
	{
		
		$this->load->model('preguntas/insertarhistoria_model');
		//$this->insertar_model->insert($_POST['pregunta']);
		$this->insertarhistoria_model->insert($_POST['pregunta'],$_POST['respuestav'],$_POST['respuestaf1'],$_POST['respuestaf2'],$_POST['respuestaf3'],$_POST['respuestaf4'],$_POST['nota'],$_POST['oculto']);
		/*
		$param['pregunta'] = $this->input->post('pregunta');
		$param['je']=$this->input->post('respuestav');
		$param['jo']=$this->input->post('respuestaf1');
		$param['js']=$this->input->post('respuestaf2');
		$param['jr']=$this->input->post('respuestaf3');
		$param['jt']=$this->input->post('respuestaf4');

		echo $param['pregunta'];
		
		/*if ($this->session->userdata('username')) {
			redirect ('admiboard');
		}
		
		if (isset($_POST['password'])){
			$this->load->model('usuario_model');
			if($this->usuario_model->login($_POST['username'],$_POST['password'])){
				$this->session->set_userdata('username',$_POST['username']);
				redirect ('admiboard');
			}else
			{
				redirect ('/admi/admi#malmuymal');
			}
		}
		$this->load->view("/administrador/admi");*/
	}
	
}