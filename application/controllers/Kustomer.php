<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kustomer extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Kustomer_model'); // Pastikan nama model sesuai
        $this->load->library('form_validation');
    }

    public function index(){
        $data = array(
            'title' => 'View Data Kustomer',
            'kustomer' => $this->Kustomer_model->getAll(),
            'content' => 'kustomer/index'
        );
        $this->load->view('template/main', $data);
    }
}
