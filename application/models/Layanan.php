<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Layanan extends CI_Model
	{
		public function all(){
			return $this->db->get('layanan')->result();
		}
	}

 ?>