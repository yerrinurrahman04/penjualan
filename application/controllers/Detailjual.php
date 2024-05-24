<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailjual extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Detailjual_model'); // Pastikan nama model sesuai
        $this->load->library('form_validation');
    }

    public function index(){
        $data = array(
            'title' => 'View Data Detail Jual',
            'detail_jual' => $this->Detailjual_model->getAll(),
            'content' => 'detail_jual/index'
        );
        $this->load->view('template/main', $data);
    }
}
