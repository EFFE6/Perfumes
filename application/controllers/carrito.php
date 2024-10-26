<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrito extends CI_Controller {

    // Método que se ejecutará cuando accedas a base_url('productos')
    public function index() {
        // Cargar la vista de productos
        $this->load->view('header');    // Cabecera de la página
        $this->load->view('shoping-cart');  // Asegúrate de que la vista 'productos.php' exista en application/views/
        $this->load->view('footer');    // Pie de página
    }
}
