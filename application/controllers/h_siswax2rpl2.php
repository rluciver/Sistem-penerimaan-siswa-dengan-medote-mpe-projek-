<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class h_siswax2rpl2 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mh_siswax2rpl2','h_siswax2rpl2');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header');
$this->load->view('vh_siswax2rpl2');
//$this->load->view('footer');

	}

	public function ajax_list()
	{
		$list = $this->h_siswax2rpl2->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $h_siswax2rpl2) {			
            $row[] = $no++;
			$row = array();
            $row[] = $h_siswax2rpl2->nis;
            $row[] = $h_siswax2rpl2->nama_siswa;
            $row[] = $h_siswax2rpl2->nilai_prestasi;
            $row[] = $h_siswax2rpl2->nilai_disiplin;
            $row[] = $h_siswax2rpl2->nilai_absensi;
            $row[] = $h_siswax2rpl2->nilai_mpe;
            $row[] = $h_siswax2rpl2->keterangan;
            $row[] = $h_siswax2rpl2->tahun;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_siswa('."'".$h_siswax2rpl2->nis."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->h_siswax2rpl2->count_all(),
						"recordsFiltered" => $this->h_siswax2rpl2->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->h_siswax2rpl2->get_by_id($id);
		echo json_encode($data);
	}


	public function ajax_add()

	{
				$db_host = 'localhost'; // Nama Server
				$db_user = 'root'; // User Server
				$db_pass = ''; // Password Server
				$db_name = 'db_biayasiswa'; // Nama Database

				$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
				$sql = 'SELECT prestasi , kedisiplinan , kehadiran ,stbobot FROM tbl_bobot';
				$query = mysqli_query($conn, $sql);

			$row = mysqli_fetch_array($query);
			$a = $row['prestasi'];
			$b = $row['kedisiplinan'];
			$c = $row['kehadiran'];
			$d = $row['stbobot'];


			$nr = $this->input->post('nilai_lapor');
			$ns = $this->input->post('sertifikat');

			$np = $this->input->post('patuh');
			$nd = $this->input->post('datang');
			$ni = $this->input->post('ikut');

			$ndis = $this->input->post('disiplin');
			if("90" <= $nr)
			{
				$nl = "3";
			}
			else if("80" <= $nr)
			{
				$nl = "2";
			}
			else
			{
				$nl = "1";
			}
			$totpres = ($ns + $nl);
			$totdis = ($np + $nd + $ni);
			$tothadir = $ndis;



			$tot = pow($totpres,$a)+pow($totdis,$b)+pow($tothadir,$c);

			if
			($tot >= $d)
			{
				$k_hasil = "MENDAPAT BIAYA SISWA";
			}
			else
			{
				$k_hasil = "TIDAK MENDAPAT BIAYA SISWA";
			}

		$data = array(
				'nis' => $this->input->post('nis'),
				'nama_siswa' => $this->input->post('nama_siswa'),
				'nilai_prestasi' => $totpres,
				'nilai_disiplin' => $totdis,
				'nilai_absensi' => $tothadir,
				'nilai_mpe' => $tot,
				'keterangan' => $k_hasil,
				'tahun' => $this->input->post('tahun')
			);

		$insert = $this->h_siswax2rpl2->save($data);
		echo json_encode(array("status" => TRUE));


			
	}


	public function ajax_delete($id)
	{
		$this->h_siswax2rpl2->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}




}
