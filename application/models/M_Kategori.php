<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

	// Setyo Nugroho 1301164053
	class M_Kategori extends CI_Model{

		// Setyo Nugroho 1301164053
		public function getData(){
			$result = $this->db->get('kategori'); 
			return $result->result_array(); 
		}

		public function getById($id) {
			$this->db->where('id', $id);
			$result = $this->db->get('kategori'); 
			if ($result->num_rows() > 0) {
				return $result->result_array()[0]; 
			}

			return [];			
		}

		// Setyo Nugroho 1301164053
		public function delete($id) {
			return $this->db->delete('kategori', [
				'id' => $id
			]);
		}

		// Setyo Nugroho 1301164053
		public function insert($data) {
			return $this->db->insert('kategori', $data);
		}

		// Setyo Nugroho 1301164053
		public function update($id, $data) {
			return $this->db->update('kategori', $data, [
				'id' => $id
			]);
		}
	}
?>