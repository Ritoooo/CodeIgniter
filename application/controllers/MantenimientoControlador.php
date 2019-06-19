<?php 
defined('BASEPATH') or exit('No default direct script access allowed');

class MantenimientoControlador extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("mantenimientoModel");
		$this->load->library("session");
	}

	public function index(){
		$this->load->model("mantenimientoModel");
		$usuarios = $this->mantenimientoModel->getData();
		$data["usuarios"] = $usuarios;
		$data["Persona"] = $usuarios;
		//$this->load->view('mantenimientoView',$data);
		return $usuarios;

	}
}
 ?>