<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_data extends CI_Controller {

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
		$this->load->model('layanan');
		$this->load->helper('url');
		if(!$this->session->has_userdata("username")){
			redirect('/', 'refresh');			
		}
				
	}

	public function index()
	{
		$data["aktivitas"] = "";
		$data["layanan"] = "active";
		$data["pertanyaan"] = "";
		$data["sparepart"] = "";

		$data['d_layanan'] = $this->layanan->all();

		$this->load->view('user/layanan', $data);
	}
}
