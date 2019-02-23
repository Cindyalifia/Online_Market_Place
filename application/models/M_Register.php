<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

// Cindy Alifia Putri 1301160199	
	class M_Register extends CI_Model{
		public function insertData($data){
			return $this->db->insert('login',$data);
		}
	}
?>