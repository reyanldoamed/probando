<?php

class Admiboard extends CI_Controller
{
    
    public function index()
    {
        $data = array('title'=>'admi','mensaje'=>'BIENVENIDO AL administardor');
        $this->load->view("administrador/tablero_view",$data);
        
    }
    
}