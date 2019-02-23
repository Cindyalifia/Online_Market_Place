<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Cindy Alifia Putri 1301160199
class C_LoginAdmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_LoginAdmin');
	}

	public function index(){
		$this->load->view('V_LoginAdmin');
	}
	public function do_loginAdmin(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$result = $this->M_LoginAdmin->getData($email, $password);

		if (count($result) != 0) {
			$sess_array = array();
			foreach ($result as $row){
				$sess_array = array(
					'email'=> $row['email'], 
					'password'=> $row['password']
				);
				$this->session->set_userdata('logged_in_admin', $sess_array);
				redirect(site_url('admin'));				
			}
		} else {
			redirect(site_url('/C_LoginAdmin'));
		}

	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(site_url('/C_LoginAdmin'));		
	}
}
