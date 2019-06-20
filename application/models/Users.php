<?php 
defined('BASEPATH') or exit('No default direct script access allowed');

class Users extends CI_Model
{
	public $table = 'contacto';
	public $table_id = 'idContacto';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function findAll(){
		$this->db->select();
		$this->db->from($this->table);
		$query = $this->db->get();
		return $query->result();
	}

	public function find($id){
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('idContacto', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function insert($data){
		$this->db->set('nombre', $data['nombre']);
		$this->db->set('email', $data['email']);
		$this->db->set('telefono', $data['telefono']);
		$this->db->set('direccion', $data['direccion']);
		$this->db->insert('contacto');
	}

	public function destroy($nombre){
		$this->db->where('nombre', $nombre);
		$this->db->delete('contacto');
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