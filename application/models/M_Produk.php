<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
		// Setyo Nugroho 1301164053	
	class M_Produk extends CI_Model{
		public function getProductEachCategory(){
			$result = [];
			$category = $this->db->get('kategori')->result_array();
			foreach ($category as $c) {
				$this->db->where('kategori_id',$c['id']);
				$product = $this->db->get('produk', 6)->result_array();
				if (sizeof($product) > 4) {
					array_push($result, [
						"id" => $c["id"],
						"kategori" => $c["name"],
						"data" => $product
					]);
				}
			}

			return $result;
		}

		// Rafli Alwan Nugraha 1301164028	
		public function getById($id) {
			$this->db->where('id', $id);
			$result = $this->db->get('produk');;
			if ($result->num_rows() > 0) {
				return $result->result_array()[0];
			}

			return [];
		}

		public function getByCategory($cat) {
				$this->db->where('kategori_id', $cat);
				return $this->db->get('produk')->result_array();
		}

		public function search($q) {
			$this->db->like('name', $q);
			return $this->db->get('produk')->result_array();
		}

		// Rafli Alwan Nugraha 1301164028
		public function getProduk(){
			$this->db->select('produk.*, kategori.name as nama_kategori');
			$this->db->from('produk');
			$this->db->join('kategori', 'produk.kategori_id = kategori.id');
			$produk = $this->db->get()->result_array();
			return $produk;
		}

		// Setyo Nugroho 1301164053		
		public function delete($id) {
			return $this->db->delete('produk', [
				'id' => $id
			]);
		}

		// Setyo Nugroho 1301164053		
		public function insert($data) {
			return $this->db->insert('produk', $data);
		}

		// Setyo Nugroho 1301164053		
		public function update($id, $data) {
			return $this->db->update('produk', $data, [
				'id' => $id
			]);
		}
	}
?>