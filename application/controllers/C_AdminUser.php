<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Setyo Nugroho 1301164053  
class C_AdminUser extends CI_Controller {

  // Setyo Nugroho 1301164053  
	public function __construct(){
    parent::__construct();
    $this->load->model('M_User');
    if (!$this->session->has_userdata('logged_in_admin')) {
      redirect(base_url('admin/login'));
    }
	}

  // Setyo Nugroho 1301164053    
	public function index(){
		$this->load->view('admin/base', [
      'title' => 'Jualin | Home',
      'content' => 'admin/V_Admin_User',
      'data' => $this->M_User->getData()
    ]);
  }

  // Setyo Nugroho 1301164053    
  public function add() {
    $data = [
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password')      
    ];

    $this->M_User->insert($data);
    redirect(base_url('admin/user'));
  }

  // Setyo Nugroho 1301164053    
  public function update() {
    $id = $this->input->post('id');
    $data = [
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password')      
    ];

    $this->M_User->update($id, $data);
    redirect(base_url('admin/user'));    
  }

  // Setyo Nugroho 1301164053    
  public function delete() {
    $id = $this->input->get('id');
    $this->M_User->delete($id);
    redirect(base_url('admin/user'));    
  }
}
