<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Sparepart extends CI_Model
	{
		public function all(){
			return $this->db->get('sparepart')->result();
		}
	}

 ?>