<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Supplier_model'); // Pastikan nama model sesuai
        $this->load->library('form_validation');
    }

    public function index(){
        $data = array(
            'title' => 'View Data Supplier',
            'supplier' => $this->Supplier_model->getAll(),
            'content' => 'supplier/index'
        );
        $this->load->view('template/main', $data);
    }
}
