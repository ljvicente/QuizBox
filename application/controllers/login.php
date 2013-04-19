<?php

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index() {

		$data = array (
			'error_msg' => NULL
		);

		//check kung naka-login
		if($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'instructor') {

			redirect(base_url() . 'index.php/dashboard');
		}
		elseif ($this->session->userdata('is_logged_in') && $this->session->userdata('permission') == 'student') {
			$this->load->view('reviewer_view', $data);
		}
		else {

    		$this->load->view('login_view', $data);
		}	
	}
}