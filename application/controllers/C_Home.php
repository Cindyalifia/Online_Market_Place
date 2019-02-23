<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Setyo Nugroho 1301164053
class C_Home extends CI_Controller {
  
  // Setyo Nugroho 1301164053
	public function __construct(){
    parent::__construct();
    $this->load->model('M_Produk');
    $this->load->model('M_Slider');    
	}

  // Setyo Nugroho 1301164053  
	public function index(){
		$this->load->view('V_Base', [
      'title' => 'Butik becho | Home',
      'content' => 'V_Home',
      'data' => [
        'slider' => $this->M_Slider->getData()
      ]
    ]);
  }

  // Setyo Nugroho 1301164053 
  public function get_product() {
    header('Content-Type: application/json');
    echo json_encode( $this->M_Produk->getProductEachCategory() );
  }
}
