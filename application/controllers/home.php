<?php
/**
* 
*/
class Home extends CI_Controller
{
	
	public function index()
	{
		$data = array('title'=>'Home','mensaje'=>'BIENVENIDO AL EXAMEN');
		$this->load->view("home",$data);
		
	}
	/*public function postulante()
    {
            
            $this->load->view('postulante/postulante');            
     }*/
}