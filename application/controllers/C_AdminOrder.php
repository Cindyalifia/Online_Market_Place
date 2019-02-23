<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Setyo Nugroho 1301164053  
class C_AdminOrder extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('M_Order');
    if (!$this->session->has_userdata('logged_in_admin')) {
      redirect(base_url('admin/login'));
    }
	}

	public function index(){
		$this->load->view('admin/base', [
      'title' => 'Jualin | Admin | Order',
      'content' => 'admin/V_Admin_Order',
      'data' => [
        "order" => $this->M_Order->getData()
      ]
    ]);
  }

  public function setStatus() {
    $id = $this->input->post("id");
    $status = $this->input->post("status");    
    $this->M_Order->updateStatus($id, $status);
    redirect(base_url('admin/order'));    
  }

  public function delete() {
    $id = $this->input->get('id');
    $this->M_Kategori->delete($id);
    redirect(base_url('admin/kategori'));    
  }
}
