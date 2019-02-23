<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Setyo Nugroho 1301164053  
class C_AdminAdmin extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('M_Admin');
    if (!$this->session->has_userdata('logged_in_admin')) {
      redirect(base_url('admin/login'));
    }
	}

	public function index(){
		$this->load->view('admin/base', [
      'title' => 'Jualin | Home',
      'content' => 'admin/V_Admin_Admin',
      'data' => $this->M_Admin->getData()
    ]);
  }

  public function add() {
    $data = [
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password')      
    ];

    $this->M_Admin->insert($data);
    redirect(base_url('admin/admin'));
  }

  public function update() {
    $id = $this->input->post('id');
    $data = [
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password')      
    ];

    $this->M_Admin->update($id, $data);
    redirect(base_url('admin/admin'));    
  }

  public function delete() {
    $id = $this->input->get('id');
    $this->M_Admin->delete($id);
    redirect(base_url('admin/admin'));    
  }
}
