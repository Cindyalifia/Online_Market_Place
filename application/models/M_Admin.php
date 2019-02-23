<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
	
// Cindy Alifia Putri 1301160199	
	class M_Admin extends CI_Model{

		public function getData(){
			$result = $this->db->get('loginadmin'); 
			return $result->result_array(); 
		}

		public function delete($id) {
			return $this->db->delete('loginadmin', [
				'id' => $id
			]);
		}

		public function insert($data) {
			return $this->db->insert('loginadmin', $data);
		}

		public function update($id, $data) {
			return $this->db->update('loginadmin', $data, [
				'id' => $id
			]);
		}
	}
?>