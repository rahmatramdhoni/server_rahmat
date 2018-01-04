<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sensor extends CI_Model {

	public function sensor1()
	{
		# code...
		$this->db->where('nm_sensor','Sensor 1');
		$sensor = $this->db->get('t_sensor');
		return $sensor;
	
	}
	public function sensor2()
	{
		# code...
		$this->db->where('nm_sensor','Sensor 2');
		$sensor = $this->db->get('t_sensor');
		return $sensor;
	}
}