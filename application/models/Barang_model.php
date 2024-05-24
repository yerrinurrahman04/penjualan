<?php

class Barang_model extends CI_Model
{
    protected $_table = 'barang';
    protected $primary = 'id';

    public function getAll() {
        return $this->db->get($this->_table)->result();
    }
}
