<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Kategori_model'); // Pastikan nama model sesuai
        $this->load->library('form_validation');
    }

    public function index(){
        $data = array(
            'title' => 'View Data Kategori',
            'kategori' => $this->Kategori_model->getAll(),
            'content' => 'kategori/index'
        );
        $this->load->view('template/main', $data);
    }
}
