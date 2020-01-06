<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class wall extends CI_Controller {

		function index(){
			$this->load->view('header');
			$this->load->view('v_home');
			$this->load->view('footer');
		}
}

?>