<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

	// Setyo Nugroho 1301164053
	class M_User extends CI_Model{

		// Setyo Nugroho 1301164053
		public function getData(){
			$result = $this->db->get('login'); 
			return $result->result_array(); 
		}

		// Setyo Nugroho 1301164053
		public function delete($id) {
			return $this->db->delete('login', [
				'id' => $id
			]);
		}

		// Setyo Nugroho 1301164053		
		public function insert($data) {
			return $this->db->insert('login', $data);
		}

		// Setyo Nugroho 1301164053		
		public function update($id, $data) {
			return $this->db->update('login', $data, [
				'id' => $id
			]);
		}
	}
?>