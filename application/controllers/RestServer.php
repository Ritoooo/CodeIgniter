<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use Restserver\Libraries\REST_Controller;
require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

class Restserver extends REST_Controller  {

	public function __construct() {
        parent::__construct();
		
        $this->load->database();
        $this->load->helper('url');
    }

	public function users_get(){
		$this->load->model("Users");
		$this->response($this->Users->findAll());
	}

	public function user_get(){
		
		$this->load->model("Users");
		$id = $this->get('id');		
		$user = $this->Users->find($id);
		if($user)
        {	$this->response($user, 200);	}
        else
        {	$this->response(NULL, 404);		}
	}


	public function guardar_post(){
		$data["nombre"] = $this->input->post('txtnombre');
		$data["telefono"] = $this->input->post('txttelefono');
		$data["email"] = $this->input->post('txtemail');
		$data["direccion"] = $this->input->post('txtdireccion');
		$this->load->model("Users");
		$this->Users->insert($data);
		$this->users_get();
	}

	public function guardar_get(){
		$data["nombre"] = $this->input->get('txtnombre');
		$data["telefono"] = $this->input->get('txttelefono');
		$data["email"] = $this->input->get('txtemail');
		$data["direccion"] = $this->input->get('txtdireccion');
		$this->load->model("Users");
		$this->Users->insert($data);
		$this->users_get();
	}

	public function delete_get(){
		$nombre = $this->input->get('txtnombre');
		$this->load->model('Users');
		$this->Users->destroy($nombre);
		$this->users_get();
	}

	public function edit_get(){
		$data['id'] = $this->input->get('id');
		$data["nombre"] = $this->input->get('txtnombre');
		$data["telefono"] = $this->input->get('txttelefono');
		$data["email"] = $this->input->get('txtemail');
		$data["direccion"] = $this->input->get('txtdireccion');
		$this->load->model("Users");
		$this->Users->update($data);
		$this->users_get();
	}

	public function delete_post(){
		$nombre = $this->input->post('txtnombre');
		$this->load->model('Users');
		$this->Users->destroy($nombre);
		$this->users_get();
	}

	public function edit_post(){
		$data['id'] = $this->input->post('id');
		$data["nombre"] = $this->input->post('txtnombre');
		$data["telefono"] = $this->input->post('txttelefono');
		$data["email"] = $this->input->post('txtemail');
		$data["direccion"] = $this->input->post('txtdireccion');
		$this->load->model("Users");
		$this->Users->update($data);
		$this->users_get();
	}

}

 ?>