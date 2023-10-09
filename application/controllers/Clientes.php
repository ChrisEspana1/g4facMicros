<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper('form');
    }

    public function index() {
        $this->load->view('agregar_cliente');
    }
    
    public function save_cliente() {
        $data = array(
            'primernombre' => $this->input->post('primernombre'),
            'segundonombre' => $this->input->post('segundonombre'),
            'otronombre' => $this->input->post('otronombre'),
            'primerapellido' => $this->input->post('primerapellido'),
            'segundoapellido' => $this->input->post('segundoapellido'),
            'otroapellido' => $this->input->post('otroapellido'),
            'genero' => $this->input->post('genero'),
            'fechanacimiento' => $this->input->post('fechanacimiento'),
            'segmento' => $this->input->post('segmento'),
            'sueldo' => $this->input->post('sueldo'),
            'dpi' => $this->input->post('dpi'),
            'correo' => $this->input->post('correo'),
            'telefono' => $this->input->post('telefono'),
            'direccion' => $this->input->post('direccion')
        );
        
        $options = array(
            'http' => array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/json',
                'content' => json_encode($data)
            )
        );
        
        $context  = stream_context_create($options);
        $result = file_get_contents('http://localhost:8081/api/setcliente', false, $context);
        
        if ($result === FALSE) {
            echo "Error al enviar los datos a la API";
        } else {
            echo "Los datos se han enviado correctamente a la API";
        }
    }
}

