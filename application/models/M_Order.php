<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_Order extends CI_Model{
		public function getOrder(){
      return $this->db->get("order_master")->result_array();
    }

    public function getData(){
      $data = $this->db->get("order_master")->result_array();
      $result = [];
      foreach($data as $d) {
          $detail = $this->getDetail($d["id"]);
          $d["detail"] = $detail;
          array_push($result, $d);
      }

      return $result;
    }

    public function getUserOrder($userId){
      $this->db->where("user_id", $userId);
      $data = $this->db->get("order_master")->result_array();

      $result = [];
      foreach($data as $d) {
          $detail = $this->getDetail($d["id"]);
          $d["detail"] = $detail;
          array_push($result, $d);
      }

      return $result;
    }
    
    public function getDetail($order_id) {
      $this->db->select('order_detail.*, produk.name, produk.price');      
			$this->db->from('order_detail');
      $this->db->where('order_id', $order_id);
      $this->db->join('produk', 'produk.id = order_detail.product_id');
			$result = $this->db->get(); 
			return $result->result_array(); 
    }

    public function updateStatus($id, $status) {
      $this->db->where("id", $id);
      $this->db->update("order_master", [
        "status" => $status
      ]);
      
    }

    public function placeOrder($userId) {
      $this->load->model("M_Cart");
      $cart = $this->M_Cart->getDataForUser($userId);
      $total = $this->M_Cart->getPriceSum($userId)[0]["sum"];
      $orderData = [
        "user_id" => $userId,
        "status" => "BELUM DIPROSES",
        "total" => $total
      ];

      $this->db->insert("order_master", $orderData);
      $order_id = $this->db->insert_id();
      foreach ($cart as $d) {
        $detail = [
          "order_id" => $order_id,
          "product_id" => $d["product_id"],
          "jumlah" => $d["jumlah"],
          "ukuran" => $d["ukuran"],
          "harga" => $d["price"]
        ];

        $this->db->insert("order_detail", $detail);
        
      }

      $this->db->where("user_id", $userId);
      $this->db->delete("cart");

      return $order_id;
    }
	}
?>