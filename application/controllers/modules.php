<?php

class Modules extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	function index() {

		$this->load->model('modules_model');
		$query = $this->modules_model->list_company_name();
		$data['records'] = $query;

		$query = $this->modules_model->list_modules();
		$data['records2'] = $query;
		

		$this->load->view('modules_view', $data);
	}

	function add_modules() {

		$this->form_validation->set_rules('module_name','Module Name','trim|required');
        $this->form_validation->set_rules('company_name','Company Name','trim|required');

        $this->session->unset_userdata('error');

        if($this->form_validation->run() == true) {

        	$data = array (

        			'module_name' => $this->input->post('module_name'),
        			'company_name' => $this->input->post('company_name')
        		);
    		
			$this->load->model('modules_model');
			$this->modules_model->add_module($data);

		}
		else
		{

			$error_string = '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>' . validation_errors() . '</div>';
			$data = array (
					'error' => $error_string
				);	
			$this->session->set_userdata($data);
			
		}

		redirect(base_url().'index.php/modules', 'refresh');	
	}

	function edit_modules() {

		$this->load->model('modules_model');

		if($this->input->post('ajax')) {

			$module_id = $this->input->post('dataid');

			$query = $this->modules_model->get_module($module_id);
			$query2 = $this->modules_model->get_company($module_id);

			$data = array (
					'module_name' => $query,
					'company_name' => $query2,
					'dataid' => $module_id
				);

			$this->session->set_userdata($data);

			echo implode('', $data['module_name']);
            echo '*';
            echo implode('', $data['company_name']);


		}
		else {

			$module_id = $this->session->userdata('dataid');

			$module_name = $this->input->post('edit_module_name');
			$company_name = $this->input->post('edit_company_name');
			

			if($this->modules_model->edit_module($module_id, $module_name, $company_name)) {

				echo $module_id. $module_name. $company_name;
			}

			redirect(base_url() . 'index.php/modules');

		}
	}

	function delete_module($id) {

		$this->load->model('modules_model');
		$this->modules_model->delete_module($id);
		redirect(base_url() . 'index.php/modules');
	}


}

