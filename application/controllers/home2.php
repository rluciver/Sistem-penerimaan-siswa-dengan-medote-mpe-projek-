<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home2 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('country_model2');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function json_search_country()
	{
		$query  = $this->country_model2->get();
        $data = array();
        foreach ($query as $key => $value) 
        {
            $data[] = array('id' => $value->nama_siswa, 'name' => $value->nis,'tahun' => $value->tahun);
        }
        echo json_encode($data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */