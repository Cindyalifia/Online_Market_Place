<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Naufal Afif 1301164102
class C_Cart extends CI_Controller {

  // Naufal Afif 1301164102
	public function __construct(){
    parent::__construct();
    $this->load->model('M_Cart');
    if (!$this->session->has_userdata('logged_in')) {
      redirect(base_url());
    }
  }
  // Naufal Afif 1301164102  
  public function index() {
    $user_id = $this->session->userdata('logged_in')['id'];
    $cart = $this->M_Cart->getDataForUser($user_id);
    $sum = $this->M_Cart->getPriceSum($user_id);    

    $this->load->view('V_Base', [
      'title' => 'Cart',
      'content' => 'V_Cart',
      'data' => [
        'cart' => $cart,
        'sum' => $sum[0]['sum']
      ]
    ]);
  }

  // Naufal Afif 1301164102
  public function add() {
    $user_id = $this->session->userdata('logged_in')['id'];
    $this->M_Cart->insert([
      'user_id' => $user_id,
      'product_id' => $this->input->post('produk_id'),
      'jumlah' => $this->input->post('jumlah'),
      'ukuran' => $this->input->post('ukuran')
    ]);

    redirect(base_url('cart'));
  }

  // Naufal Afif 1301164102
  public function delete() {
    $id = $this->input->get('id');
    $this->M_Cart->delete($id);
    redirect(base_url('cart'));    
  }
}