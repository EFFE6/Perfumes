<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detallesp extends CI_Controller {

    // Método que se ejecutará cuando accedas a base_url('productos')
    public function index() {
        // Cargar la vista de productos
        $this->load->view('header');    
        $this->load->view('detallesp');  
        $this->load->view('footer'); 
    }

}
