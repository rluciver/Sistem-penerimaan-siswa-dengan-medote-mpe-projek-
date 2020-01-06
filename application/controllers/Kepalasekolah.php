<?php 
	
defined('BASEPATH') OR exit('No direct script access allowed');

class kepalasekolah extends CI_Controller{
 	
	
	 
	function index(){
		$this->load->view('headerKS');
		$this->load->view('contentks');
		$this->load->view('footer');
	}
}

 ?>