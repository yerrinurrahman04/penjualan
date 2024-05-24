<?php

class Supplier_model extends CI_Model
{
    protected $_table = 'supplier';
    protected $primary = 'id';

    public function getAll() {
        return $this->db->get($this->_table)->result();
    }
}
