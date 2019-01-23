<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('layanan');
		$this->load->model('sparepart');		
	}

	public function index()
	{
		$data['pesan'] = $this->session->flashdata('pesan');
		$data['layanan'] = $this->layanan->all();
		$data['sparepart'] = $this->sparepart->all();
		$this->load->view('landing-page/main', $data);
	}
}
