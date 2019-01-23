<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header("Access-Control-Allow-Origin: *");	

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data['pesan'] = $this->session->flashdata('error');
		$this->load->view('menu/register', $data);
	}

	public function store(){
		$this->load->model('user');
		$email = $this->input->post('email');

		if($this->user->has_registered($email)){
			$this->session->set_flashdata('error', 'has_registered');
			redirect('/register', 'refresh');
			return;
		}

		$nama  = $this->input->post('nama');
		$alamat  = $this->input->post('alamat');
		$jenis_kelamin  = $this->input->post('jenis_kelamin');
		$password  = $this->input->post('password');

		$this->user->store([
			"nama" => $nama, "jenis_kelamin" => $jenis_kelamin,
			"email" => $email, "alamat" => $alamat,
			"password" => $password
		]);

		
		$this->session->set_userdata([
			"username" => $email
		]);
			
		$this->session->set_flashdata('success', 'has_registered');
		redirect('/dashboard', 'refresh');		

	}
}
