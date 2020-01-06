<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class homeabout extends CI_Controller {

		function index(){
			$this->load->view('headerS');
			$this->load->view('h_about');
			$this->load->view('footer_s');

		}
}

?>