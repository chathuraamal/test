<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//$this->load->view('main/main_menu.php');
		$this->load->view('welcome_message.php');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */