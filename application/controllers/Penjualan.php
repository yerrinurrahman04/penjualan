<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Penjualan_model'); // Pastikan nama model sesuai
        $this->load->library('form_validation');
    }

    public function index(){
        $data = array(
            'title' => 'View Data Penjualan',
            'penjualan' => $this->Penjualan_model->getAll(),
            'content' => 'penjualan/index'
        );
        $this->load->view('template/main', $data);
    }
}
