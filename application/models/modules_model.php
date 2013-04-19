<?php

class Modules_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function list_company_name() {

        $this->db->select('*');
        $this->db->order_by('company_name', 'asc'); 
        $query = $this->db->get('company');
        return $query->result();
    }

    function list_modules() {

        $this->db->select('*');
        $this->db->order_by('module_name', 'asc'); 
        $query = $this->db->get('modules');
        return $query->result();
    }

    function add_module($data) {   

        $this->db->insert('modules', $data);
        return true;
    }
    
    function edit_module($module_id, $module_name, $company_name) {

            $data = array (
                    'module_name' => $module_name,
                    'company_name' => $company_name
                );

            $this->db->where('module_id', $module_id);
            $this->db->update('modules', $data);
            return true;
    }

    function get_module($module_id) {

        $this->db->select('module_name');
        $this->db->where('module_id', $module_id);
        $query = $this->db->get('modules');
        return $query->row_array();

    }
    
    function get_company($module_id) {

        $this->db->select('company_name');
        $this->db->where('module_id', $module_id);
        $query = $this->db->get('modules');
        return $query->row_array();

    }

    function delete_module($module_id) {

        $this->db->where('module_id', $module_id);
        $this->db->delete('modules');
    }

}