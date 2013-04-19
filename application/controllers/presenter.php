<?php

class Presenter extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index() {

		$this->load->model('presenter_model');

		if($query = $this->presenter_model->list_modules()) {
			$data['records'] = $query;
		}

		$this->load->view('presenter_view', $data);
	}
}