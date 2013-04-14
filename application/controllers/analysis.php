<?php

class Analysis extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->view('analysis_view');
	}
}