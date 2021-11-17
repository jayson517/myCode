<?php 

class Email_test extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->helper('url');

		$this->load->library('session');
		$this->session->set_flashdata('nav_title', "Email");
		$this->load->view('email/main');
	}

	public function send_email()
	{

		$this->load->library('email');


		/**
		 * ===================================================================================
		$config = array(
		    'protocol' => 'ssmtp', // 'mail', 'sendmail', or 'smtp'
		    'smtp_host' => 'ssl://smtp.googlemail.com', 
		    'smtp_port' => 587,
		    'smtp_user' => 'jesoria517@gmail.com',
		    'smtp_pass' => 'J!23456Soria',
		    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
		    'mailtype' => 'text', //plaintext 'text' mails or 'html'
		    'smtp_timeout' => '4', //in seconds
		    'charset' => 'iso-8859-1',
		    'validate' => FALSE,
		    'wordwrap' => TRUE
		);

		**/



		/**
		 * ===================================================================================
		
		$config['useragent']	= "CodeIgniter";
		// $config['mailpath']            = "/usr/sbin/sendmail"; // or "/usr/bin/sendmail"
		$config['protocol']  	= "smtp";
		$config['smtp_host'] 	= "localhost";
		$config['smtp_port'] 	= "587";
		$config['smtp_user'] 	= 'jesoria517@gmail.com',
		$config['smtp_pass']   	= 'J!23456Soria',
		$config['mailtype'] 	= 'html';
		$config['charset']  	= 'utf-8';
		$config['newline']  	= "\r\n";
		$config['wordwrap'] 	= TRUE;

		**/

		/**
		 * ===================================================================================
		 * @ 
		 * 
		$config['useragent']    = "CodeIgniter";
        // $config['mailpath']     = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']     = "mail"; //use 'mail' instead of 'sendmail or smtp'
        $config['smtp_host']    = "your domain name";
        $config['smtp_user']    = "jesoria517@gmail.com";
        $config['smtp_pass']    = "J@ysonJocelyn517";
        $config['smtp_port']    =  587;
        $config['smtp_crypto']  = 'ssl';
        $config['smtp_timeout'] = "";
        $config['mailtype']     = "html";
        $config['charset']      = "utf-8";
        $config['newline']      = "\r\n";
        $config['wordwrap']     = TRUE;
        $config['validate']     = FALSE;
		**/


		/**
		 * =========================================================================================
		 * @ From Sir Germel
		 * 20211116
		 */

		$config['useragent'] = 'none';
		$config['protocol'] = 'smtp';
		$config['smtp_crypto'] = 'tls';
		$config['smtp_host'] = 'smtp.gmail.com';
		$config['smtp_port'] = '587';
		$config['smtp_user'] = 'idtomis.doh.gov.ph@gmail.com';
		$config['smtp_pass'] = 'Default@123';
		$config['wordwrap(str)'] = TRUE;
		$config['mailtype'] = 'html';
		$config['newline'] = "\r\n";
		$config['charset'] = 'iso-8859-1';

		$this->email->initialize($config);

		$to = $this->input->post('txtEmail');

		$this->email->from('idtomis.doh.gov.ph@gmail.com','idtomis.doh.gov.ph@gmail.com');
		$this->email->to($to);
		$this->email->subject('Registration Confirmation');
		$this->email->message('Sample Email Message Lang Ito...');

		$this->email->send();

		echo $this->email->print_debugger(); 


		/**
		 * ===================================================================================
		 * @ Errors in Sending
		 */
		// $this->load->library('email', $config);
		// $this->email->initialize($config);
		// $this->email->set_newline("\r\n");

		// $from = $this->config->item('smtp_user');
		// $subject = $this->input->post('subject');
		// $message = $this->input->post('message');
		
		// $subject = "Sample lang";
		// $message = "Email Sending Test";

		// $this->email->set_newline("\r\n");
		// $this->email->from($from);
		// $this->email->to($to);
		// $this->email->subject($subject);
		// $this->email->message($message);

		// if ($this->email->send()) {
		// 	echo 'Your Email has successfully been sent.';
		// } else {
		// 	// show_error($this->email->print_debugger());
			
		// 	echo "Error";
		// }  

		// echo $this->email->print_debugger();

	}
}

 ?>