<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model'); // Pastikan nama model sesuai
        $this->load->library('form_validation');
    }

    public function index(){
        $data = array(
            'title' => 'View Data Barang',
            'barang' => $this->Barang_model->getAll(),
            'content' => 'barang/index'
        );
        $this->load->view('template/main', $data);
    }
}
