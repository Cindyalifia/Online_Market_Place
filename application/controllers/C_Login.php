<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Cindy Alifia Putri 1301160199
class C_Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Login');
	}

	public function index(){
		$this->load->view('V_Login');
	}
	public function do_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$result = $this->M_Login->getData($email, $password);

		if (count($result) != 0) {
			$sess_array = array();
			foreach ($result as $row){
				$sess_array = array(
					'id' => $row['id'],
					'email'=> $row['email'], 
					'password'=> $row['password']
				);
				$this->session->set_userdata('logged_in', $sess_array);
				redirect(site_url());
			}
		} else {
			$this->session->set_flashdata('pesan', 'Username atau Password Salah');
			redirect(base_url('login'));
		}

	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
