<?php 
defined('BASEPATH') or exit('No default direct script access allowed');

class mantenimientoModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getData(){
		$usuarios = $this->db->query('select * from contacto;');
		return $usuarios->result();
	}
}
 ?>