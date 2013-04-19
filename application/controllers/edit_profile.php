<?php

class Edit_profile extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index() {

		$this->session->unset_userdata('error');

		
		$this->form_validation->set_rules('displayname','Display Name','trim|required');
        $this->form_validation->set_rules('email','Email Address','trim|required|valid_email');

        $displayname = $this->input->post('displayname');
        $email = $this->input->post('email');

        if($this->form_validation->run() == true) {
        	
			$this->load->model('profile_model');
			$this->profile_model->change_info($displayname, $email);

		}
		else
		{
			$error_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>' . validation_errors() . '</div>';
			$data = array (
					'error' => $error_string
				);	
			$this->session->set_userdata($data);
			
		}
		
		redirect(base_url().'index.php/profile', 'refresh');
	}

	function change_password() {

		$this->session->unset_userdata('error');

		if($this->session->userdata('password') == md5($this->input->post('oldpassword'))) {

			$this->form_validation->set_rules('oldpassword','Old Password','trim|required');
	        $this->form_validation->set_rules('newpassword','New Password','trim|required');
	        $this->form_validation->set_rules('confirmpassword','Confirm','trim|required|matches[newpassword]');

	        if($this->form_validation->run() == true) {
	        	
	        	$password = $this->input->post('newpassword');
				$this->load->model('profile_model');
				$this->profile_model->change_pass($password);
			}
			else
			{
				$error_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>' . validation_errors() . '</div>';
				$data = array (
						'error' => $error_string
					);	
				$this->session->set_userdata($data);
				
			}
		}
		else {

			$error_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>Invalid Password!</div>';
			$data = array (
					'error' => $error_string
				);	
			$this->session->set_userdata($data);
		}
		redirect(base_url().'index.php/profile', 'refresh');

	}

}