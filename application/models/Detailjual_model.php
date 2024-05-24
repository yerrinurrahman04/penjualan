<?php

class Detailjual_model extends CI_Model
{
    protected $_table = 'detail_jual';
    protected $primary = 'id';

    public function getAll() {
        return $this->db->get($this->_table)->result();
    }
}
