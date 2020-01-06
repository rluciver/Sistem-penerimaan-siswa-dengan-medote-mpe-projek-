<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswaxrpl2 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_siswaxrpl2','siswaxrpl2');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('v_siswaxrpl2');
		//$this->load->view('footer');
	}

	public function ajax_list()
	{
		$list = $this->siswaxrpl2->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $siswaxrpl2) {			
            $row[] = $no++;
			$row = array();
            $row[] = $siswaxrpl2->nis;
            $row[] = $siswaxrpl2->nama_siswa;
            $row[] = $siswaxrpl2->jenis_kelamin;
            $row[] = $siswaxrpl2->kelas;
            $row[] = $siswaxrpl2->tempat_lahir;
            $row[] = $siswaxrpl2->tanggal_lahir;
            $row[] = $siswaxrpl2->nama_orang_tua;
            $row[] = $siswaxrpl2->tahun;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_siswa('."'".$siswaxrpl2->nis."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$siswaxrpl2->nis."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->siswaxrpl2->count_all(),
						"recordsFiltered" => $this->siswaxrpl2->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->siswaxrpl2->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$data = array(
				'nis' => $this->input->post('nis'),
				'nama_siswa' => $this->input->post('nama_siswa'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'kelas' => "XRPL2",
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'nama_orang_tua' => $this->input->post('nama_orang_tua'),
				'tahun' => $this->input->post('tahun'),
			);
		$insert = $this->siswaxrpl2->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(/*
				'nis' => $this->input->post('nis'),*/
				'nama_siswa' => $this->input->post('nama_siswa'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'kelas' => "XRPL2",
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'nama_orang_tua' => $this->input->post('nama_orang_tua'),
				'tahun' => $this->input->post('tahun'),
			);
		$this->siswaxrpl2->update(array('nis' => $this->input->post('nis')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->siswaxrpl2->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}
