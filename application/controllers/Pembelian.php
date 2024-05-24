<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pembelian_model'); // Pastikan nama model sesuai
        $this->load->library('form_validation');
    }

    public function index(){
        $data = array(
            'title' => 'View Data Pembelian',
            'pembelian' => $this->Pembelian_model->getAll(),
            'content' => 'pembelian/index'
        );
        $this->load->view('template/main', $data);
    }
}
