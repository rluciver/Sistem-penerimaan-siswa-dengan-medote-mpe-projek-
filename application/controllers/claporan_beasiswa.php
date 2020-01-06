<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class claporan_beasiswa extends CI_Controller {
    /*****
     | Laporan PDF dengan DOMPDF
     | controller claporanpdf
     | by gtech
    *****/
 
    public function __construct() {
        parent::__construct();
        $this->load->model('m_cetaksiswa');
        $this->load->library('dompdf_gen');
    }
 
   public function index(){
        $this->load->view('header');
        $this->load->view('v_report/vlaporan_beasiswa');
    }
 
    // fungsi cetak siswa pdf
    public function cetak(){
         $tahun              = $this->input->post('tahun');      
        //query model semua barang 
        $data['title'] = 'Cetak PDF Data Beasiswa'; //judul title
        $data['databeasiswa'] = $this->m_cetaksiswa->getAllItem3XI1($tahun); //query model semua barang
 
        $this->load->view('v_report/vcetak_laporan_beasiswa', $data);
 
        $paper_size  = 'A4'; //paper size
        $orientation = 'landscape'; //tipe format kertas
        $html = $this->output->get_output();
 
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporanbeasiswa.pdf", array("Attachment"=>0));
    }

}
/* End of file claporanpdf.php */
/* Location: ./application/controllers/claporanpdf.php */

