<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswax1rpl3 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_siswax1rpl3','siswax1rpl3');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('v_siswax1rpl3');
		//$this->load->view('footer');
	}

	public function ajax_list()
	{
		$list = $this->siswax1rpl3->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $siswax1rpl3) {			
            $row[] = $no++;
			$row = array();
            $row[] = $siswax1rpl3->nis;
            $row[] = $siswax1rpl3->nama_siswa;
            $row[] = $siswax1rpl3->jenis_kelamin;
            $row[] = $siswax1rpl3->kelas;
            $row[] = $siswax1rpl3->tempat_lahir;
            $row[] = $siswax1rpl3->tanggal_lahir;
            $row[] = $siswax1rpl3->nama_orang_tua;
            $row[] = $siswax1rpl3->tahun;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa('."'".$siswax1rpl3->nis."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswax1rpl3->nis."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->siswax1rpl3->count_all(),
						"recordsFiltered" => $this->siswax1rpl3->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->siswax1rpl3->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
				'nis' => $this->input->post('nis'),
				'nama_siswa' => $this->input->post('nama_siswa'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'kelas' => "XIRPL3",
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'nama_orang_tua' => $this->input->post('nama_orang_tua'),
				'tahun' => $this->input->post('tahun'),
			);
		$insert = $this->siswax1rpl3->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(/*
				'nis' => $this->input->post('nis'),*/
				'nama_siswa' => $this->input->post('nama_siswa'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'kelas' => "XIRPL3",
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'nama_orang_tua' => $this->input->post('nama_orang_tua'),
				'tahun' => $this->input->post('tahun'),
			);
		$this->siswax1rpl3->update(array('nis' => $this->input->post('nis')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->siswax1rpl3->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
