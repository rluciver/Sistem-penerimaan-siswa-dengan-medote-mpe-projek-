<?php
	class mup_admin extends CI_Model {
		function vup_admin(){
			$pass_admin = $this->db->get('admin');
			return $pass_admin;
		}

	}