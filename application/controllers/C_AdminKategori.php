<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Setyo Nugroho 1301164053  
class C_AdminKategori extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('M_Kategori');
    if (!$this->session->has_userdata('logged_in_admin')) {
      redirect(base_url('admin/login'));
    }
	}

	public function index(){
		$this->load->view('admin/base', [
      'title' => 'Jualin | Admin | Kategori',
      'content' => 'admin/V_Admin_Kategori',
      'data' => $this->M_Kategori->getData()
    ]);
  }

  public function add() {
    $data = [
      'name' => $this->input->post('name'),
    ];

    $this->M_Kategori->insert($data);
    redirect(base_url('admin/kategori'));
  }

  public function update() {
    $id = $this->input->post('id');
    $data = [
      'name' => $this->input->post('name'),
    ];

    $this->M_Kategori->update($id, $data);
    redirect(base_url('admin/kategori'));    
  }

  public function delete() {
    $id = $this->input->get('id');
    $this->M_Kategori->delete($id);
    redirect(base_url('admin/kategori'));    
  }
}
