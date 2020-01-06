<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ksc_cetaksiswa2 extends CI_Controller {
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
        $this->load->view('v_report/v_formcetaksiswa2');
        $this->load->view('footer');
    }

    public function cetak(){      
        $tahun             = $this->input->post('tahun');    
        $data['datasiswa'] = $this->m_cetaksiswa->getAllItemX2($tahun); 
        
        $data['title'] = 'Cetak PDF Data Siswa';  
        //query model semua barang 
        $this->load->view('v_report/v_cetak_laporan_siswa2', $data);
 
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

