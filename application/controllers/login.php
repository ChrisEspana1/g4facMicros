<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper('form');

    }

    public function index()
    {
        $this->load->view('V_login');
    }


    public function login()
    {
    }

    public function newregistro() //Generamos registros para la tabla Usuario y Cliente
    {  
        
    }

    public function logout()
    {
        $this->session->unset_userdata('user'); // Elimina los datos de sesión
        $this->session->sess_destroy(); // Destruye la sesión
        redirect('login/index'); // Redirige al inicio de sesión
    }
}