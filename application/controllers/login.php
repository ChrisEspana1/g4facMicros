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
        $data = array(
            'usuario_nombre' => $this->input->post('nombre'),
            'usuario_apellido' => $this->input->post('apellido'),
            'usuario_email' => $this->input->post('email'),
            'usuario_password' => $this->input->post('password'),
            'usuario_estado' => $this->input->post('estado'),
            'usuario_rol' => $this->input->post('rol')
        );


        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-type: application/json',
                'content' => json_encode($data)
            )
        );


        $context = stream_context_create($options);
        $result = file_get_contents('http://localhost:8081/api/postusuario', false, $context);

        if ($result === FALSE) {
            echo "Error al enviar los datos a la API";
        } else {
            echo "Los datos se han enviado correctamente a la API";
        }
    }

    public function newcliente()
    {
        $clientedta = array(
            'Cliente_nombre' => $this->input->post('nombre'),
            'Cliente_apellido' => $this->input->post('apellido'),
        );

        $option2 = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-type: application/json',
                'content' => json_encode($clientedta)
            )
        );

        $context = stream_context_create($option2);
        $result = file_get_contents('http://localhost:8081/api/postusuario', false, $context);

        if ($result === FALSE) {
            echo "Error al enviar los datos a la API";
        } else {
            echo "Los datos se han enviado correctamente a la API";
        }
    }



    public function logout()
    {
        $this->session->unset_userdata('user'); // Elimina los datos de sesión
        $this->session->sess_destroy(); // Destruye la sesión
        redirect('login/index'); // Redirige al inicio de sesión
    }
}