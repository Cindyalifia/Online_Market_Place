<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');

// Cindy Alifia Putri 1301160199	
	class M_Login extends CI_Model{

		public function getData($email , $password){
			$this->db->where('email',$email); //
			$this->db->where('password',$password);
			$result = $this->db->get('login'); //login = nama database 

			if ($result->num_rows() > 0){
				return $result->result_array(); 
			} else {
				return array();
			}
		}
		public function getEmail($email){
			$this->db->where('email',$email);
			$resultt = $this->db->get('login');
			return $resultt->result_array();
		}
	}
?>