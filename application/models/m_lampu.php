<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lampu extends CI_Model {

	public function insert_data($data){
		$in = $this->db->insert('login', $data);
		return $in;
	}
	public function tampil_lampu1()
	{
		# code...
		$this->db->where('lokasi','Lantai 1');
		$lmp = $this->db->get('t_lampu');
		return $lmp;
	}
	public function tampil_lampu2()
	{
		# code...
		$this->db->where('lokasi','Lantai 2');
		$lmp = $this->db->get('t_lampu');
		return $lmp;
	}
	public function off($id)
	{
		# code...
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date('Y-m-d H:i:s');
		$data = array('state' => '0', 'datetime' => $waktu );
		
		$this->db->where('id',$id);
		$update = $this->db->update('t_lampu',$data);
		return $update;
	}
	public function on($id)
	{
		# code...
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date('Y-m-d H:i:s');
		$data = array('state' => '1', 'datetime' => $waktu );
		
		$this->db->where('id',$id);
		$update = $this->db->update('t_lampu',$data);
		return $update;
	}
	public function onlantai1()
	{
		# code...
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date('Y-m-d H:i:s');
		$data = array('state' => '1', 'datetime' => $waktu );
		
		$this->db->where('lokasi','Lantai 1');
		$update = $this->db->update('t_lampu',$data);
		return $update;
	}
	public function offlantai1()
	{
		# code...
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date('Y-m-d H:i:s');
		$data = array('state' => '0', 'datetime' => $waktu );
		
		$this->db->where('lokasi','Lantai 1');
		$update = $this->db->update('t_lampu',$data);
		return $update;
	}
	public function onlantai2()
	{
		# code...
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date('Y-m-d H:i:s');
		$data = array('state' => '1', 'datetime' => $waktu );
		
		$this->db->where('lokasi','Lantai 2');
		$update = $this->db->update('t_lampu',$data);
		return $update;
	}
	public function offlantai2()
	{
		# code...
		date_default_timezone_set('Asia/Jakarta');
		$waktu = date('Y-m-d H:i:s');
		$data = array('state' => '0', 'datetime' => $waktu );
		
		$this->db->where('lokasi','Lantai 2');
		$update = $this->db->update('t_lampu',$data);
		return $update;
	}
	
}
