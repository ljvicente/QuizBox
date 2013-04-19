<?php

class Items_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function get_examination_name($examination_id) {

        $this->db->select('examination_name');
        $this->db->where('examination_id', $examination_id);
        $query = $this->db->get('examination');
        return $query->row_array();

    }

    function questions_table($examination_id) {

    	$this->db->select('*');
        $this->db->where('examination_id', $examination_id);
        $query = $this->db->get('questions');
        return $query->result();

    }

    function edit_question($question_id, $question) {

    	$data = array (
                'questions' => $question
            );

        $this->db->where('question_id', $question_id);
        $this->db->update('questions', $data);
        return true;

    }

    function edit_choices($question_id, $choices) {

    	$data = array (
                'answers' => $choices
            );

        $this->db->where('question_id', $question_id);
        $this->db->update('questions', $data);
        return true;

    }

    function edit_key($question_id, $key) {

    	$data = array (
                'correct_answer' => $key
            );

        $this->db->where('question_id', $question_id);
        $this->db->update('questions', $data);
        return true;

    }

}