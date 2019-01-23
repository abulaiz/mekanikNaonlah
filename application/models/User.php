<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Model
	{
		public function has_registered($email){
			$a = $this->db->where("email", $email)
						->get('users')
						->num_rows();
			return ($a == 0 ? false : true);
		}

		public function store($data){
			$this->db->insert("users" , $data);
		}

		public function exists($email, $password){
			$a = $this->db->where("email", $email)
							->where("password", $password)
							->get('users')
							->num_rows();	
			return ($a == 1 ? true : false);		
		}
	}

 ?>