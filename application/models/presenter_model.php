<?php

class Presenter_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function list_modules() {

        $this->db->select('*');
        $this->db->order_by('module_name', 'asc'); 
        $query = $this->db->get('modules');
        return $query->result();
    }

}