<?php 
defined('BASEPATH') or exit('No default direct script access allowed');

class MantenimientoControlador extends CI_Controller
{

	public function index(){
		$this->load->model("mantenimientoModel");
		$usuarios = $this->mantenimientoModel->getData();
		$data["page_title"] = "Contactos";
		$data["usuarios"] = $usuarios;
		$data["Persona"] = $usuarios;
		$this->load->view('mantenimientoView',$data);
	}

	public function alta(){

		$data["nombre"] = $_POST['txtnombre'];
		$data["telefono"] = $_POST['txttelefono'];
		$data["email"] = $_POST['txtemail'];
		$data["direccion"] = $_POST['txtdireccion'];
		$this->load->model("mantenimientoModel");
		$this->mantenimientoModel->insert($data);
		$this->index();
	}

	public function baja(){
		$nombre = $_POST['txtnombre'];
		$this->load->model('mantenimientoModel');
		$this->mantenimientoModel->baja($nombre);
		$this->index();
	}

	public function accion(){
		//var_dump($_POST['editar']);
		$this->load->model('mantenimientoModel');
		$data['usuario'] = $this->mantenimientoModel->obtenerContacto($_POST['editar']);
		$this->load->view('edit', $data);
	}

	public function editar(){
		$data['id'] = $_POST['id'];
		$data["nombre"] = $_POST['txtnombre'];
		$data["telefono"] = $_POST['txttelefono'];
		$data["email"] = $_POST['txtemail'];
		$data["direccion"] = $_POST['txtdireccion'];
		$this->load->model("mantenimientoModel");
		$this->mantenimientoModel->update($data);
		$this->index();
	}

	public function create(){
		$this->load->view('create');
	}

	public function delete(){
		$this->load->view('delete');
	}
}
 ?>