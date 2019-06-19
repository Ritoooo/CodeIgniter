<?php 
defined('BASEPATH') or exit('No default direct script access allowed');

class PersonaModel extends CI_Model
{
	
	public function listar(){
		$this->load->database();
		$query = $this->db->get("Persona");
		return $query->result();
	}
}
 ?>