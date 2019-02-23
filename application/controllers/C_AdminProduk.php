<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Setyo Nugroho 1301164053  
class C_AdminProduk extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('M_Produk');
    $this->load->model('M_Kategori');  
    if (!$this->session->has_userdata('logged_in_admin')) {
      redirect(base_url('admin/login'));
    }  
	}

	public function index(){
		$this->load->view('admin/base', [
      'title' => 'Jualin | Home',
      'content' => 'admin/V_Admin_Produk',
      'data' => [
        'produk' => $this->M_Produk->getProduk(),
        'kategori' => $this->M_Kategori->getData()
      ]
    ]);
  }

  public function add() {
    $config['upload_path'] = './images/';
    $config['allowed_types'] = 'jpg|png';
    $config['max_size'] = 2000;

    $this->load->library('upload', $config);


    if (!$this->upload->do_upload('image'))
    {
      $message = $this->upload->display_errors();
      redirect(base_url('admin/produk'));
    }
        
    $data = [
      'name' => $this->input->post('name'),
      'price' => $this->input->post('price'),
      'rating' => $this->input->post('rating'),
      'description' => $this->input->post('description'),      
      'image' => 'images/' . $this->upload->data()['file_name'],
      'kategori_id' => $this->input->post('kategori_id'),
      
    ];

    $this->M_Produk->insert($data);
    redirect(base_url('admin/produk'));
  }

  public function update() {
    $id = $this->input->post('id');
    $config['upload_path'] = './images/';
    $config['allowed_types'] = 'jpg|png';
    $config['max_size'] = 2000;

    $this->load->library('upload', $config);

    if (!empty($_FILES['new_image']['name'])) {
      if (!$this->upload->do_upload('new_image'))
      {
        $message = $this->upload->display_errors();
        redirect(base_url('admin/produk'));
      } 
      $image = 'images/' . $this->upload->data()['file_name'];  
    } else {
      $image = $this->input->post('image');
    } 

        
    $data = [
      'name' => $this->input->post('name'),
      'price' => $this->input->post('price'),
      'rating' => $this->input->post('rating'),
      'description' => $this->input->post('description'),      
      'image' => $image,
      'kategori_id' => $this->input->post('kategori_id'),
      
    ];
    $this->M_Produk->update($id, $data);
    redirect(base_url('admin/produk'));   
  }

  public function delete() {
    $id = $this->input->get('id');
    $this->M_Produk->delete($id);
    redirect(base_url('admin/produk'));    
  }
}
