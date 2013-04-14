<?php

class Authentication extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		//i-load ang model para sa login!!
		$this->load->model('login_model');


		
		$result = $this->login_model->validate();

		//check permission of the user from session data
		$permission = $this->session->userdata('permission');

		if(!$result || !$this->session->userdata('is_logged_in')) {
            
            $data = array (
            	'error_msg' => '<div class="alert alert-danger">Invalid username and/or password.</div>'
            );
        	
            $this->load->view('includes/nocache');
        	$this->load->view('login_view', $data);



		}

		else {

			
			if($permission != 'instructor') {
				echo '<a href="' . base_url() . 'index.php/logout">you don\'t belong here</a>';
			}
			else {
				
				redirect(base_url());
			}
		}

	}
}