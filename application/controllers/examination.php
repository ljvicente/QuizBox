<?php

class Examination extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index() {

		$this->load->model('examination_model');

		$query = $this->examination_model->list_examinations();

		$data['records'] = $query;
		

		$this->load->view('examination_view', $data);
	}

	function add_examination() {

		$this->form_validation->set_rules('examination_name','Examination Name','trim|required');
        $this->form_validation->set_rules('no_of_questions','No. of Questions','trim|required|numeric');
        $this->form_validation->set_rules('no_of_choices','No. of Choices','trim|required|numeric');

        $this->session->unset_userdata('error');

        if($this->form_validation->run() == true) {

        	$data = array (

        			'examination_name' => $this->input->post('examination_name'),
        			'no_of_questions' => $this->input->post('no_of_questions'),
        			'no_of_choices' => $this->input->post('no_of_choices'),
        			'date_modified' => date('Y-m-d H:i:s')
        		);
    		
			$this->load->model('examination_model');
			$this->examination_model->add_examination($data);

		}
		else
		{

			$error_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>' . validation_errors() . '</div>';
			$data = array (
					'error' => $error_string
				);	
			$this->session->set_userdata($data);
			
		}

		redirect(base_url().'index.php/examination', 'refresh');	
	}

	function edit_examination() {

		$this->load->model('examination_model');

		if($this->input->post('ajax')) {

			$examination_id = $this->input->post('dataid');

			$query = $this->examination_model->get_examination($examination_id);
			$query2 = $this->examination_model->get_no_of_questions($examination_id);
			$query3 = $this->examination_model->get_no_of_choices($examination_id);

			$data = array (
					'examination_name' => $query,
					'no_of_questions' => $query2,
					'no_of_choices' => $query3,
					'dataid' => $examination_id
				);

			$this->session->set_userdata($data);

			echo implode('', $data['examination_name']);
            echo '*';
            echo implode('', $data['no_of_questions']);
            echo '*';
            echo implode('', $data['no_of_choices']);


		}
		else {

			$examination_id = $this->session->userdata('dataid');

			$examination_name = $this->input->post('edit_examination_name');
			$no_of_questions = $this->input->post('edit_no_of_questions');
			$no_of_choices = $this->input->post('edit_no_of_choices');
			

			if($this->examination_model->edit_examination($examination_id, $examination_name, $no_of_questions, $no_of_choices)) {

				
			}

			redirect(base_url() . 'index.php/examination');

		}
	}


	function delete_examination($id) {

		$this->load->model('examination_model');
		$this->examination_model->delete_examination($id);
		redirect(base_url() . 'index.php/examination');
	}

	function item($id) {

		$this->load->model('items_model');
		$this->load->model('examination_model');
		$query = $this->items_model->get_examination_name($id);
		$query2 = $this->examination_model->get_no_of_questions($id);
		$query3 = $this->examination_model->get_no_of_choices($id);

		$live_data = $this->items_model->questions_table($id);

		$data['examination_name'] = $query;
		$data['no_of_questions'] = $query2;
		$data['no_of_choices'] = $query3;
		$data['live_data'] = $live_data;

		//fetch data in questions table for live update

		$this->load->view('items_view', $data);
	}

	function edit_item() {

		$this->load->model('items_model');

		if($this->input->post('ajax')) {

			$question_id = $this->input->post('dataid');
			$question = $this->input->post('value');

			$query = $this->items_model->edit_question($question_id, $question);

		}
		else {

			echo "AJAX error :(";

			//redirect(base_url() . 'index.php/examination');

		}
	}

	function edit_choices() {

		$this->load->model('items_model');

		if($this->input->post('ajax')) {

			$question_id = $this->input->post('dataid');
			$choices = $this->input->post('value');

			$this->items_model->edit_choices($question_id, $choices);

		}
		else {

			echo "AJAX error :(";

			//redirect(base_url() . 'index.php/examination');

		}
	}

	function edit_key() {


		$this->load->model('items_model');

		if($this->input->post('ajax')) {

			$question_id = $this->input->post('dataid');
			$key = $this->input->post('value');


			$query = $this->items_model->edit_key($question_id, $key);

		}
		else {

			echo "AJAX error :(";

			//redirect(base_url() . 'index.php/examination');

		}
	}

}