<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswaxrpl1 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_siswaxrpl1','siswaxrpl1');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('v_siswaxrpl1');
		//$this->load->view('footer');
	}

	public function ajax_list()
	{
		$list = $this->siswaxrpl1->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $siswaxrpl1) {			
            $row[] = $no++;
			$row = array();
            $row[] = $siswaxrpl1->nis;
            $row[] = $siswaxrpl1->nama_siswa;
            $row[] = $siswaxrpl1->jenis_kelamin;
            $row[] = $siswaxrpl1->kelas;
            $row[] = $siswaxrpl1->tempat_lahir;
            $row[] = $siswaxrpl1->tanggal_lahir;
            $row[] = $siswaxrpl1->nama_orang_tua;
            $row[] = $siswaxrpl1->tahun;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa('."'".$siswaxrpl1->nis."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswaxrpl1->nis."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->siswaxrpl1->count_all(),
						"recordsFiltered" => $this->siswaxrpl1->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->siswaxrpl1->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
				'nis' => $this->input->post('nis'),
				'nama_siswa' => $this->input->post('nama_siswa'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'kelas' => "XRPL1",
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'nama_orang_tua' => $this->input->post('nama_orang_tua'),
				'tahun' => $this->input->post('tahun'),
			);
		$insert = $this->siswaxrpl1->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(/*
				'nis' => $this->input->post('nis'),*/
				'nama_siswa' => $this->input->post('nama_siswa'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'kelas' => "XRPL1",
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'nama_orang_tua' => $this->input->post('nama_orang_tua'),
				'tahun' => $this->input->post('tahun'),
			);
		$this->siswaxrpl1->update(array('nis' => $this->input->post('nis')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->siswaxrpl1->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
