<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Rafli Alwan Nugraha 1301164028
class C_Detail extends CI_Controller {
  
  // Rafli Alwan Nugraha 1301164028
	public function __construct(){
    parent::__construct();
    $this->load->model('M_Produk');
  }

  // Rafli Alwan Nugraha 1301164028
  public function index() {
    $id = $this->input->get('id');
    $produk = $this->M_Produk->getById($id);
    $this->load->view('V_Base', [
      'title' => $produk['name'] . " | Jualin",
      'content' => 'V_Detail',
      'data' => [
        'produk' => $produk
      ]
    ]);
  }
}