<?php
/**
* 
*/
class Postulante extends CI_Controller
{
	public function __construct() {
        parent::__construct(); 
        $this->load->library('form_validation'); 
        $this->load->helper("url");
        //$this->load->model('preguntas/mostrar_model');
   
    }
	
	public function index()
	{
		//echo $_POST['carrera'];
		$this->load->model('examen/obtenerpreg_model');
		$result = $this->obtenerpreg_model->selefis($_POST['carrera']);
		$result1 = $this->obtenerpreg_model->selemat($_POST['carrera']);
		$result2 = $this->obtenerpreg_model->selehisto($_POST['carrera']);
		$result3 = $this->obtenerpreg_model->selelite($_POST['carrera']);
		//$data1 = array('consulta' => $result1);
		$data = array('consulta' => $result,
				'consulta1' => $result1,
				'consulta2' => $result2,
				'consulta3' => $result3,
			);
		$this->load->view("postulante/examen",$data);
		/*
		$param['ra'] = $this->input->post('username');
		$param['re']=$this->input->post('apellido_pat');
		$param['ri']=$this->input->post('apellido_mat');
		$param['ro']=$this->input->post('ci');
		$this->load->view('postulante/examen',$param);
		//$param['ru']=$this->input->post('respuestaf3');
		//$param['jt']=$this->input->post('respuestaf4');*/
		
	}
	public function iniciar()
	{
		$this->load->view("/postulante/postulante");	
	}
}