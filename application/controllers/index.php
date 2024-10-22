<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // Cargar el helper de URL para usar base_url()
        $this->load->helper('url');
    }

    public function index() {
        // Cargar múltiples vistas para mantener el código organizado
        $this->load->view('header');    // Cabecera de la página
        $this->load->view('index');     // Contenido principal
        $this->load->view('footer');    // Pie de página
    }
}
