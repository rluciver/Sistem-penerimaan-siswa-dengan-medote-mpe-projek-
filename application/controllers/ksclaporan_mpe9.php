<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ksclaporan_mpe9 extends CI_Controller {
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
        $this->load->view('headerks');
        $this->load->view('v_report/vlaporan_mpe9');
        $this->load->view('footer');
    }
    /*public function cetak()
    {
        $tahun             = $this->input->post('tahun');
        echo $tahun;
        $data['datasiswa'] = $this->m_cetaksiswa->getAllItem($tahun);
        //query model semua barang
        $this->load->view('v_report/v_cetaksiswa',$data);
    }*/
 
    // fungsi cetak siswa pdf
    public function cetak(){      
        $tahun              = $this->input->post('tahun');    
        $data['datampe']    = $this->m_cetaksiswa->getAllItem2XIII3($tahun); 
        $data['title']      = 'Cetak PDF Data Perhitungan MPE';  
        //query model semua barang 
        $this->load->view('v_report/vcetak_laporan_mpe9', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'landscape'; //tipe format kertas
        $html = $this->output->get_output();
 
        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan.pdf", array("Attachment"=>0));
    }

}
/* End of file claporanpdf.php */
/* Location: ./application/controllers/claporanpdf.php */



