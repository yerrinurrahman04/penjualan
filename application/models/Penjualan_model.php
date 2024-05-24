<?php

class Penjualan_model extends CI_Model
{
    protected $_table = 'penjualan';
    protected $primary = 'id';

    public function getAll() {
        return $this->db->get($this->_table)->result();
    }
}
