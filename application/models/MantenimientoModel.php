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
		$usuarios = $this->db->get('contacto');
		return $usuarios->result();
	}

	public function insert($data){
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('email', $data['email']);
		$this->db->set('telefono', $data['telefono']);
		$this->db->set('direccion', $data['direccion']);
		$this->db->insert('contacto');
	}

	public function baja($nombre){
		$this->db->where('nombre', $nombre);
		$this->db->delete('contacto');
	}

	public function obtenerContacto($idContacto){
		$this->db->select('nombre,email,telefono,direccion,idContacto');
		$this->db->from('contacto');
		$this->db->where('idContacto', $idContacto);
		$contacto = $this->db->get();
        return $contacto->result();
	}

	public function update($data){
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('email', $data['email']);
		$this->db->set('telefono', $data['telefono']);
		$this->db->set('direccion', $data['direccion']);
		$this->db->where('idContacto', $data['id']);
		$this->db->update('contacto');
	}
}
 ?>