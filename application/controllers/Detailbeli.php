<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailbeli extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Detailbeli_model'); // Pastikan nama model sesuai
        $this->load->library('form_validation');
    }

    public function index(){
        $data = array(
            'title' => 'View Data Detail Beli',
            'detail_beli' => $this->Detailbeli_model->getAll(),
            'content' => 'detail_beli/index'
        );
        $this->load->view('template/main', $data);
    }
}
