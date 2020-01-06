<?php
class m_cetaksiswa extends CI_Model {
 
    var $tabel = 'tbl_datasiswa';
     var $tabel2 = 'tbl_hasil';
 
    public function getAllItemX1($tahun) {
        $query = $this->db->query("SELECT * FROM  xrpl1 where tahun = '$tahun'");
        return $query->result();
    }
    public function getAllItemX2($tahun) {
        $query = $this->db->query("SELECT * FROM  xrpl2 where tahun = '$tahun'");
        return $query->result();
    }
    public function getAllItemX3($tahun) {
        $query = $this->db->query("SELECT * FROM  xrpl3 where tahun = '$tahun'");
        return $query->result();
    }

    public function getAllItemXI1($tahun) {
        $query = $this->db->query("SELECT * FROM  x1rpl1 where tahun = '$tahun'");
        return $query->result();
    }
    public function getAllItemXI2($tahun) {
        $query = $this->db->query("SELECT * FROM  x1rpl2 where tahun = '$tahun'");
        return $query->result();
    }
    public function getAllItemXI3($tahun) {
        $query = $this->db->query("SELECT * FROM  x1rpl3 where tahun = '$tahun'");
        return $query->result();
    }

 public function getAllItemXII1($tahun) {
        $query = $this->db->query("SELECT * FROM  x2rpl1 where tahun = '$tahun'");
        return $query->result();
    }
    public function getAllItemXII2($tahun) {
        $query = $this->db->query("SELECT * FROM  x2rpl2 where tahun = '$tahun'");
        return $query->result();
    }
    public function getAllItemXIII3($tahun) {
        $query = $this->db->query("SELECT * FROM  x2rpl3 where tahun = '$tahun'");
        return $query->result();
    }





    public function getAllItem2XI1($tahun) {
       $query = $this->db->query("SELECT * FROM h_xrpl1 where tahun = '$tahun'");
        return $query->result();
    }
    public function getAllItem2XI2($tahun) {
       $query = $this->db->query("SELECT * FROM h_xrpl2 where tahun = '$tahun'");
        return $query->result();
    }
    public function getAllItem2XI3($tahun) {
       $query = $this->db->query("SELECT * FROM h_xrpl3 where tahun = '$tahun'");
        return $query->result();
    }


    public function getAllItem2XII1($tahun) {
       $query = $this->db->query("SELECT * FROM h_x1rpl1 where tahun = '$tahun'");
        return $query->result();
    }
    public function getAllItem2XII2($tahun) {
       $query = $this->db->query("SELECT * FROM h_xr1pl2 where tahun = '$tahun'");
        return $query->result();
    }
    public function getAllItem2XII3($tahun) {
       $query = $this->db->query("SELECT * FROM h_x1rpl3 where tahun = '$tahun'");
        return $query->result();
    }



    public function getAllItem2XIII1($tahun) {
       $query = $this->db->query("SELECT * FROM h_x2rpl1 where tahun = '$tahun'");
        return $query->result();
    }

     public function getAllItem2XIII2($tahun) {
           $query = $this->db->query("SELECT * FROM h_x2rpl2 where tahun = '$tahun'");
            return $query->result();
        }

     public function getAllItem2XIII3($tahun) {
           $query = $this->db->query("SELECT * FROM h_x2rpl3 where tahun = '$tahun'");
            return $query->result();
        }


    











    public function getAllItem3XI1($tahun) {
        $query = $this->db->query("SELECT * FROM h_xrpl1 where keterangan = 'mendapat biaya siswa' and tahun ='$tahun' ");
        return $query->result();
    }
    public function getAllItem3XI2($tahun) {
        $query = $this->db->query("SELECT * FROM h_xrpl2 where keterangan = 'mendapat biaya siswa' and tahun ='$tahun' ");
        return $query->result();
    }
    public function getAllItem3XI3($tahun) {
        $query = $this->db->query("SELECT * FROM h_xrpl3 where keterangan = 'mendapat biaya siswa' and tahun ='$tahun' ");
        return $query->result();
    }

    public function getAllItem3XII1($tahun) {
        $query = $this->db->query("SELECT * FROM h_x1rpl1 where keterangan = 'mendapat biaya siswa' and tahun ='$tahun' ");
        return $query->result();
    }
    public function getAllItem3XII2($tahun) {
        $query = $this->db->query("SELECT * FROM h_x1rpl2 where keterangan = 'mendapat biaya siswa' and tahun ='$tahun' ");
        return $query->result();
    }
    public function getAllItem3XII3($tahun) {
        $query = $this->db->query("SELECT * FROM h_x1rpl3 where keterangan = 'mendapat biaya siswa' and tahun ='$tahun' ");
        return $query->result();
    }

    public function getAllItem3XIII1($tahun) {
        $query = $this->db->query("SELECT * FROM h_x2rpl1 where keterangan = 'mendapat biaya siswa' and tahun ='$tahun' ");
        return $query->result();
    }
    public function getAllItem3XIII2($tahun) {
        $query = $this->db->query("SELECT * FROM h_x2rpl2 where keterangan = 'mendapat biaya siswa' and tahun ='$tahun' ");
        return $query->result();
    }
    public function getAllItem3XIII3($tahun) {
        $query = $this->db->query("SELECT * FROM h_x2rpl3 where keterangan = 'mendapat biaya siswa' and tahun ='$tahun' ");
        return $query->result();
    }

 
}
?>