<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Order extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('M_Order');
    $this->load->model('M_Cart');
    if (!$this->session->has_userdata('logged_in')) {
      redirect(base_url());
    }
	}

	public function index(){
    $user_id = $this->session->userdata('logged_in')['id'];    
    $order = $this->M_Order->getUserOrder($user_id);
    $this->load->view('V_Base', [
      'title' => 'Jualin | Order',
      'content' => 'V_MyOrder',
      'data' => [
        'order' => $order
      ]
    ]);
  }
  
  public function placeOrder() {
    $user_id = $this->session->userdata('logged_in')['id'];

    if (sizeof($this->M_Cart->getDataForUser($user_id)) <= 0) {
      redirect(base_url());      
    }

    $id = $this->M_Order->placeOrder($user_id);
    $this->load->view('V_Base', [
      'title' => 'Jualin | Order Berhasil',
      'content' => 'V_OrderComplete',
      'data' => [
        'orderId' => $id
      ]
    ]);  
  }
	
}
