<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user');		
	}

	public function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->user->exists($email, $password)){
			$this->session->set_userdata([
				"username" => $email
			]);
			redirect('/dashboard', 'refresh');	
		} else {
			$this->session->set_flashdata('pesan', 'failed');
			redirect('/', 'refresh');	
		}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('pesan', 'success');
		redirect('/', 'refresh');	
	}
}
