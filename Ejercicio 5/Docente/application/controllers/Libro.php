<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libro extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Libro_model');
	}

	public function index()
	{
		$this->load->view('libro/index');
	}

	public function list(){
		$libros = $this->Libro_model->list();
		$jTableResult['Result'] = 'OK';
		$jTableResult['Records'] = $libros;
		header('Content-Type: application/json');
		echo json_encode($jTableResult);
	}

	public function create(){
		$_POST['fechanac'] = date('Y-m-d H:i:s');
		$this->Libro_model->create($_POST);
		if ($id==0) {
			$jTableResult['Result'] = 'ERROR';
			$jTableResult['Message'] = 'No Insertado';
		}else{
			$libro = $this->Libro_model->one($id);
			$jTableResult['Result'] = 'OK';
			$jTableResult['Record'] = $libro;
		}
		header('Content-Type: application/json');
		echo json_encode($jTableResult);
	}

	public function update(){
		$id = $_POST['ci'];
		unset($_POST['ci']);
		$status = $this->Libro_model->update($id,$_POST);
		if ($status) {
			$libro = $this->Libro_model->one($id);
			$jTableResult['Result'] = 'OK';
			$jTableResult['Record'] = $libro;
		}else{
			$jTableResult['Result'] = 'ERROR';
			$jTableResult['Message'] = 'No actualizado';
		}
		header('Content-Type: application/json');
		echo json_encode($jTableResult);
	}

	public function delete(){
		$status = $this->Libro_model->delete($_POST['ci']);
		if ($status) {
			$jTableResult['Result'] = 'OK';
		}else{
			$jTableResult['Result'] = 'ERROR';
			$jTableResult['Message'] = 'No eliminado';
		}
		header('Content-Type: application/json');
		echo json_encode($jTableResult);
	}

}
