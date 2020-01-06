<?php 

/**
* 
*/
class cabout extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('h_about');
		$this->load->view('footer');
	}
}

?>