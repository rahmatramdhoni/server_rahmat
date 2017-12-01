<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("M_login");
	}

	public function login()
	{
		$usr = $this->input->post('usr');
		$pwd = $this->input->post(md5('pwd'));
		$sql = $this->db->query("SELECT * FROM login WHERE username='$usr' AND password='$pwd'");
		return $sql->result();
		if ($sql-result() > 0) {
			# code...

			redirect('Apps/admin');
		} else {
			# code...
			$this->session->set_flashdata('msg', 'Periksa Kembali Username Dan Password Anda');
			redirect('Apps');
		}
		
	}
	public function logout()
	{
		# code...
	}
	
}
