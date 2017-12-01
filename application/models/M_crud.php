<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	public function insert_data($data){
		$in = $this->db->insert('login', $data);
		return $in;
	}
	
}
