<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Search extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('M_Produk');
	}

	public function index(){
    $query = $this->input->get("q");
    $this->load->view('V_Base', [
      'title' => 'Jualin | Search ' . $query,
      'content' => 'V_ProductList',
      'data' => [
        'heading' => "Result for: $query",
        'produk' => $this->M_Produk->search($query)
      ]
    ]);
	}
	
}
