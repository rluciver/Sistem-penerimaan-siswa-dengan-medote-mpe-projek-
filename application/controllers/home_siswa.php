<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class home_siswa extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			//$this->load->model('mh_siswa','h_siswa');
			       $this->load->model('mlaporan');
		}

	
		function index(){
			$data['databeasiswa'] = $this->mlaporan->getAllItem3(); //query model semua barang
        	$this->load->view('headerS');
			$this->load->view('menu_siswa',$data);
			$this->load->view('footer_s');
			

		}
 
		function about(){
			$this->load->view('headerS');
			$this->load->view('contentks');
			$this->load->view('footer');

		}

		public function ajax_list()
		{
		$list = $this->h_siswa->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $h_siswa) {			
            $row[] = $no++;
			$row = array();
            $row[] = $h_siswa->nis;
            $row[] = $h_siswa->nama_siswa;
            $row[] = $h_siswa->keterangan;
            $row[] = $h_siswa->tahun;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$h_siswa->nis."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->h_siswa->count_all(),
						"recordsFiltered" => $this->h_siswa->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}


}

?>	
	
	
