<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Setyo Nugroho 1301164053  
class C_AdminSlider extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('M_Slider');
    if (!$this->session->has_userdata('logged_in_admin')) {
      redirect(base_url('admin/login'));
    }
	}

	public function index(){
		$this->load->view('admin/base', [
      'title' => 'Jualin | Home',
      'content' => 'admin/V_Admin_Slider',
      'data' => $this->M_Slider->getData()
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
      'image' => 'images/' . $this->upload->data()['file_name'],
      'link' => $this->input->post('link')
    ];

    $this->M_Slider->insert($data);
    redirect(base_url('admin/slider'));
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
      'link' => $this->input->post('link'),
      'image' => $image,
      
    ];
    $this->M_Slider->update($id, $data);
    redirect(base_url('admin/slider'));   
  }

  public function delete() {
    $id = $this->input->get('id');
    $this->M_Slider->delete($id);
    redirect(base_url('admin/slider'));    
  }
}
