<?php

class Examination_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function list_company_name() {

        $this->db->select('*');
        $this->db->order_by('company_name', 'asc'); 
        $query = $this->db->get('company');
        return $query->result();
    }

    function list_examinations() {

        $this->db->select('*');
        $this->db->order_by('examination_name', 'asc'); 
        $query = $this->db->get('examination');
        return $query->result();
    }

    function add_examination($data) { 

        //insert muna sa table ng examination
        $this->db->insert('examination', $data);

        //kunin ang latest na examination_id
        $query = $this->db->query('SELECT MAX(examination_id) FROM examination');
        $max_id = $query->row_array();

        $a = implode('', $max_id);

        //kunin ang number of questions para maging reference ng loop
        $this->db->select('no_of_questions');
        $this->db->where('examination_id', $a);
        $query = $this->db->get('examination');

        $questions = implode('', $query->row_array());

        $blank_row = array ( 
                'questions' => '',
                'examination_id' => $a,
                'answers' => '*********'
            ); 

        for ($i=0; $i < $questions; $i++) { 

            $this->db->insert('questions', $blank_row);
        }

        return true;
    }
    
    function edit_examination($examination_id, $examination_name, $no_of_questions, $no_of_choices) {

            $data = array (
                    'examination_name' => $examination_name,
                    'no_of_questions' => $no_of_questions,
                    'no_of_choices' => $no_of_choices,
                    'date_modified' => date('Y-m-d H:i:s')
                );

            $this->db->where('examination_id', $examination_id);
            $this->db->update('examination', $data);
            return true;
    }

    function get_examination($examination_id) {

        $this->db->select('examination_name');
        $this->db->where('examination_id', $examination_id);
        $query = $this->db->get('examination');
        return $query->row_array();

    }

    function get_no_of_questions($examination_id) {

        $this->db->select('no_of_questions');
        $this->db->where('examination_id', $examination_id);
        $query = $this->db->get('examination');
        return $query->row_array();

    }
    
    function get_no_of_choices($examination_id) {

        $this->db->select('no_of_choices');
        $this->db->where('examination_id', $examination_id);
        $query = $this->db->get('examination');
        return $query->row_array();

    }

    function delete_examination($examination_id) {

        $this->db->where('examination_id', $examination_id);
        $this->db->delete('examination');

        $this->db->where('examination_id', $examination_id);
        $this->db->delete('questions');
    }

}