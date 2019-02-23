<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

	// Setyo Nugroho 1301164053
	class M_Slider extends CI_Model{

		// Setyo Nugroho 1301164053
		public function getData(){
			$result = $this->db->get('slider'); 
			return $result->result_array(); 
		}

		// Setyo Nugroho 1301164053
		public function delete($id) {
			return $this->db->delete('slider', [
				'id' => $id
			]);
		}

		// Setyo Nugroho 1301164053
		public function insert($data) {
			return $this->db->insert('slider', $data);
		}

		// Setyo Nugroho 1301164053
		public function update($id, $data) {
			return $this->db->update('slider', $data, [
				'id' => $id
			]);
		}
	}
?>