<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country_model7 extends CI_Model {

    function get()
    {
        $query = $this->db->get('x2rpl1');
        return $query->result();
    }

}

/* End of file country_model.php */
/* Location: ./application/models/country_model.php */