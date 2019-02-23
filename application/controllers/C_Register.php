<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Cindy Alifia Putri 1301160199
class C_Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Register');
		$this->load->model('M_Login');
	}

	public function index(){
		$this->load->view('V_Register');
	}

	public function do_register(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$passwordkonfirm = $this->input->post('passwordkonfirm');

		$result = $this->M_Login->getData($email,$password);
		$resultEmail = $this->M_Login->getEmail($email);

		if ($email != '' && $password != '' && $email != ' ' && $password != ' '){
			if (count($resultEmail) != 0){
				$this->session->set_flashdata('pesan',
				'<tr>Gagal Membuat Akun, gunakan email yang lain');
				redirect(base_url('login'));
			} else {
				if ($password != $passwordkonfirm) {
					$this->session->set_flashdata('pesan',
						'<tr>Gagal Membuat Akun, password tidak sama');
					redirect(base_url('login'));
				}else if (count($result) == 0) {
					$data = array(
						'email'=>$email,
						'password'=>$password
					);
					$this->M_Register->insertData($data);
					$this->session->set_flashdata('pesan',
						'<tr>Berhasil Buat akun</tr>
						<tr>Silahkan Login</tr>');
					redirect(base_url('login'));
				}else {
					$this->session->set_flashdata('pesan',
						'<tr>Gagal Membuat Akun');
					redirect(base_url('login'));
				}
			}	
		} else {
			$this->session->set_flashdata('pesan',
			'<tr>Email ataupun password harus diisi');
			redirect(base_url('login'));
		}
	}
}
