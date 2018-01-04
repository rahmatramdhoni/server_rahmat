<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_device extends CI_Model {

	public function load_dataset(){
		$query = $this->db->query("select * from t_lampu");
		return $query->result();
	}

	public function status_lampu(){
		$query = "Select * from t_lampu";
		$return = $this->db->query($query);
		return $return->result();
	}
}
