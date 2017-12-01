<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function __construct(){
		parent::__construct();
		//header('Content-Type:application/json');
		//$this->load->model('M_Crud');
		//$this->nama_server = "cccc";
	}
public function index()
{
	# code...
		$data['judul'] = 'DATA USER';
		$data['subjudul'] = 'DATA USER';
		$data['content'] = 'apps/crud_v';
		$data['login']=$this->db->get('login');
		$this->load->view('Apps/admin',$data);
}
public function v_insert()
{
	# code...
		$data['judul'] = 'DATA USER';
		$data['subjudul'] = 'TAMBAH DATA USER';
		$data['content'] = 'apps/crud_i';
		//$data['login']=$this->db->get('login');
		$this->load->view('Apps/admin',$data);
}
public function insert()
{
	# code...
	$username = $this->input->post('us');
	$password = $this->input->post('ps');
	$data = array('username' => $username, 'password' => md5($password) );
	$this->load->model('M_Crud');

	$in = $this->M_Crud->insert_data($data);
	if ($in) {
		# code...
		//echo json_encode(array("status" => TRUE));
		redirect('Crud');
	}

}
public function delete($id)
{
	# code...
	$this->db->where('id', $id);
	$del = $this->db->delete('login');
	if ($del) {
		# code...
		redirect('Crud');
	}
}
public function v_update($id)
{
	# code...
		$data['judul'] = 'DATA USER';
		$data['subjudul'] = 'EDIT DATA USER';
		$data['content'] = 'apps/crud_u';
		$this->db->where('id', $id);
		$v=$this->db->get('login');
		foreach ($v->result() as $key) {
			# code...
			$data['id'] = $key->id;
			$data['username'] = $key->username;
			//$data['password'] = $key->password;
		}
		$this->load->view('Apps/admin',$data);
}
public function update()
{
	# code...
	$id = $this->input->post('id');
	$username = $this->input->post('us');
	$password = $this->input->post('ps');
	$data = array('username' => $username, 'password' => md5($password) );
	$this->db->where('id', $id);
	$up = $this->db->update('login', $data);
	if ($up) {
		# code...
		redirect('Crud');
	}
}
}
