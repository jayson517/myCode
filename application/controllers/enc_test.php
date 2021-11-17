<?php 

class Enc_test extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->library('session');

		$this->session->set_flashdata('nav_title', "Encryption");

		$this->load->library('encryption');
		$this->load->helper('file');

		$this->load->view('enc_test/main');

		$data1 = 'Some file data';
		$data2 = "blah blah data 2";
	    if ( ! write_file('./assets/files/data1.php', $data1))
	    {
	            echo 'Unable to write the file';
	    }
	    else
	    {
	            echo 'File written!';
	    }

	    if ( ! write_file('./assets/files/data2.php', $data2))
	    {
	            echo 'Unable to write the file';
	    }
	    else
	    {
	            echo 'File written!';
	    }

	    /**
	     * 
		$salt = '2528b80cca970d4325eeec68feeea9e61da9ce401192c70356d6495568a941d3415d795d1ffc54dd2fe2ece6a208678de3aec9f332a00fd60728c7d8a1279f7b';

		$email = 'idtomis.ezek@gmail.com';


		$data['samp'] = "Jayson";
		$data['base64_email'] = base64_encode($email);
		$data['base64_salt'] = base64_encode($salt);

	     */
		


		/**
		 * @ First Return
		 * 
		 * aWR0b21pcy5lemVrQGdtYWlsLmNvbQ==
		 */


	}
}


 ?>