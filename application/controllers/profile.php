<?php

class Profile extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index() {

		$data = array (
			'error_msg' => NULL
		);

		//check kung naka-login
		if($this->session->userdata('is_logged_in')) {

			$this->load->view('profile_view', $data);
		}
		else {

    		$this->load->view('login_view', $data);
		}	
	}
}