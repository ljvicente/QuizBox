<?php

class Activate extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index() {

		$this->load->model('examination_model');

		$query = $this->examination_model->list_examinations();

		$data['records'] = $query;

		$this->load->view('activate_view', $data);
	}
}