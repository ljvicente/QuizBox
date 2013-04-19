<?php

class Profile_model extends CI_Model{
    
    function __construct(){
        parent::__construct();
    }
    
    function change_info($displayname, $email) {

            $data = array (
                    'displayname' => $displayname,
                    'email' => $email
                );

            $this->session->set_userdata($data);

            $this->db->where('id', $this->session->userdata('id'));
            $this->db->update('users', $data);
            return true;
    }

    function change_pass($password) {

            $data = array (
                    'password' => md5($password)
                );

            $this->session->set_userdata($data);

            $this->db->where('id', $this->session->userdata('id'));
            $this->db->update('users', $data);
            return true;
    }
        
}