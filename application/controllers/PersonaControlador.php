<?php 
defined('BASEPATH') or exit('No default direct script access allowed');

class PersonaControlador extends CI_Controller
{
	
	public function index(){
		$this->load->model("PersonaModel");
		$data["Persona"] = $this->PersonaModel->listar();
		header('Content-Type: application/json');
		echo json_encode($data);

	}
}
 ?>