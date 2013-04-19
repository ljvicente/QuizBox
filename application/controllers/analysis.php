<?php

class Analysis extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index() {

		$this->load->model('examination_model');

		$query = $this->examination_model->list_examinations();

		$data['records'] = $query;

		$this->load->view('analysis_view', $data);
	}

	function item_analysis($id) {

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

		$this->load->view('item_analysis_view', $data);
	}
}