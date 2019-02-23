<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Kategori extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('M_Produk');
    $this->load->model('M_Kategori');
	}

	public function index(){
    $cat = $this->input->get('id');
    $kategori = $this->M_Kategori->getById($cat);
    $this->load->view('V_Base', [
      'title' => 'Jualin | Kategori',
      'content' => 'V_Kategori',
      'data' => [
        'kategori' => $kategori,
        'produk' => $this->M_Produk->getByCategory($cat)
      ]
    ]);
	}
	
}
