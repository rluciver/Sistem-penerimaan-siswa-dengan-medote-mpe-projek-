<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller{
	 function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }

    function index(){
        $this->load->view('login');
    }

    public function aksilogin(){
        if (!isset($_POST['login'])) {
            # code...
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $cek      = $this->m_login->proseslogin($username,$password);
            $hasil    = count($cek);
            if ($hasil > 0) {
                # code...
                $pelogin = $this->db->get_where('admin',array('username' => $username, 'password' => $password))->row();
                if ($pelogin->level == 'admin') {
                    # code...
                    redirect('index.php/wall/index');
                }else{
                   redirect('index.php/kepalasekolah/index');
                }               
            }else{
                redirect('index.php/login/index');
            }
        }
    }
    function logout(){
       // $this->session->session_destroy();
        redirect('index.php/home_siswa/index'); 
    }

}
?>

