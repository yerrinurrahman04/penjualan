<?php

class Pembelian_model extends CI_Model
{
    protected $_table = 'pembelian';
    protected $primary = 'id';

    public function getAll() {
        return $this->db->get($this->_table)->result();
    }
}
