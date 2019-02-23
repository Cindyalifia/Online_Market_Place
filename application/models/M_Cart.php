<?php  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  // Naufal Afif 1301164102
	class M_Cart extends CI_Model{

    // Naufal Afif 1301164102
		public function getData(){
			$result = $this->db->get('cart'); 
			return $result->result_array(); 
    }
    
    // Setyo Nugroho 1301164053
    public function getDataForUser($id){
      $this->db->select('cart.*, produk.name, produk.price');      
			$this->db->from('cart');
      $this->db->where('user_id', $id);
      $this->db->join('produk', 'produk.id = cart.product_id');
			$result = $this->db->get(); 
			return $result->result_array(); 
    }

    // Setyo Nugroho 1301164053
    public function getPriceSum($id){
      $this->db->select('SUM(price * jumlah) as sum');      
			$this->db->from('cart');
      $this->db->where('user_id', $id);
      $this->db->join('produk', 'produk.id = cart.product_id');
			$result = $this->db->get(); 
			return $result->result_array(); 
    }

    // Naufal Afif 1301164102
	  public function delete($id) {
			return $this->db->delete('cart', [
				'id' => $id
			]);
		}

    // Naufal Afif 1301164102
		public function insert($data) {
			return $this->db->insert('cart', $data);
		}

    // Naufal Afif 1301164102
		public function update($id, $data) {
			return $this->db->update('cart', $data, [
				'id' => $id
			]);
		}
	}
?>