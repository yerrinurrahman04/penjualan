<?php

class Kustomer_model extends CI_Model
{
    protected $_table = 'kustomer';
    protected $primary = 'id';

    public function getAll() {
        return $this->db->get($this->_table)->result();
    }
}
