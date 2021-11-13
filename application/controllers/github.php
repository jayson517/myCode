<?php 

class Github extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->library('session');
		$this->session->set_flashdata('nav_title', "Git");
		$this->load->view('github/main');
		
	}
}

 ?>