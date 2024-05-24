<?php

class Detailbeli_model extends CI_Model
{
    protected $_table = 'detail_beli';
    protected $primary = 'id';

    public function getAll() {
        return $this->db->get($this->_table)->result();
    }
}
