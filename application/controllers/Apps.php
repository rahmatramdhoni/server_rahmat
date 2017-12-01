<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("mod_device");
		$this->load->model("M_login");
	}

	public function index(){
		$this->load->view("apps/login");
	}
	public function login()
	{
		// $this->mod_device->load_dataset();
		# code...
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);

		
		$cek = $this->M_login->cek_login("login",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				
				'username' => $username,
				
				);
 			
			$this->session->set_userdata($data_session);
 
			redirect('Apps/admin');
 
		}else{
			$this->session->set_flashdata('msg','Username dan password salah !');
			redirect('Apps');
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('Apps');
	}
	public function admin()
	{
		$data['judul'] = 'Home';
		$data['subjudul'] = 'Tampilan Awal Sistem';
		$data['content'] = 'apps/test';
		$this->load->view('Apps/admin',$data);
		
	}
	public function test()
	{
		# code...
		$data['judul'] = 'Home';
		$data['subjudul'] = 'Tampilan Awal Sistem';
		$data['content'] = 'apps/test';
		$this->load->view('Apps/admin',$data);
	}
	public function lampu()
	{
		# code...
		$data['judul'] = 'Monitoring Lampu';
		$data['subjudul'] = 'Tabel Monitoring Lampu';
		$data['content'] = 'apps/monitoring_l';
		$data['isi1'] = $this->db->query("SELECT * FROM t_lampu WHERE lokasi='Lantai 1'");
		$data['isi2'] = $this->db->query("SELECT * FROM t_lampu WHERE lokasi='Lantai 2'");
		$data['isi3'] = $this->db->query("SELECT * FROM t_lampu WHERE lokasi='Lantai 1'");
		$data['test'] = $this->db->query("SELECT * FROM t_lampu WHERE lokasi='Lantai 1'");
		
		$this->load->view('Apps/admin',$data);
	}
	public function send()
	{
		# code...
		# code...
		$data['judul'] = 'Monitoring Lampu';
		$data['subjudul'] = 'Tabel Monitoring Lampu';
		$data['content'] = 'apps/nilaijadi';
		
		$data['test'] = $this->db->get('t_lampu');
		
		$this->load->view('Apps/admin',$data);
	}
	public function on($id)
	{
		# code...
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date('Y-m-d H:i:s');
		$data = array('state' => '1', 'datetime' => $waktu );
		$this->db->where('id', $id);
		$u = $this->db->UPDATE('t_lampu', $data);
		
		if ($u) {
			# code...
			redirect('Apps/lampu');
		}
		
	}
	public function off($id)
	{
		# code...
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date('Y-m-d H:i:s');
		$data = array('state' => '0', 'datetime' => $waktu );
		$this->db->where('id', $id);
		$u = $this->db->UPDATE('t_lampu', $data);
		
		if ($u) {
			# code...
			redirect('Apps/lampu');
		}
		
	}
	public function on_lantai1()
	{
		# code...
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date('Y-m-d H:i:s');
		$data = array('state' => '1', 'datetime' => $waktu );
		$this->db->where('lokasi', 'Lantai 1');
		$u = $this->db->UPDATE('t_lampu', $data);
		
		if ($u) {
			# code...
			redirect('Apps/lampu');
		}
		
	}
	public function off_lantai1()
	{
		# code...
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date('Y-m-d H:i:s');
		$data = array('state' => '0', 'datetime' => $waktu );
		$this->db->where('lokasi', 'Lantai 1');
		$u = $this->db->UPDATE('t_lampu', $data);
		
		if ($u) {
			# code...
			redirect('Apps/lampu');
		}
		
	}
	public function on_lantai2()
	{
		# code...
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date('Y-m-d H:i:s');
		$data = array('state' => '1', 'datetime' => $waktu );
		$this->db->where('lokasi', 'Lantai 2');
		$u = $this->db->UPDATE('t_lampu', $data);
		
		if ($u) {
			# code...
			redirect('Apps/lampu');
		}
		
	}
	public function off_lantai2()
	{
		# code...
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date('Y-m-d H:i:s');
		$data = array('state' => '0', 'datetime' => $waktu );
		$this->db->where('lokasi', 'Lantai 2');
		$u = $this->db->UPDATE('t_lampu', $data);
		
		if ($u) {
			# code...
			redirect('Apps/lampu');
		}
		
	}
	public function sensor()
	{
		# code...
		$data['judul'] = 'Monitoring Sensor';
		$data['subjudul'] = 'Tabel Monitoring Sensor';
		$data['content'] = 'apps/monitoring_s';
		$data['isi1'] = $this->db->query("SELECT * FROM t_sensor WHERE nm_sensor='Sensor 1'");
		$data['isi2'] = $this->db->query("SELECT * FROM t_sensor WHERE nm_sensor='Sensor 2'");
		$this->load->view('Apps/admin',$data);
	}
	public function test_restful(){
		header("content-type:json");
		echo json_encode(array("data_json" => $this->mod_device->load_dataset()));
	}
}
