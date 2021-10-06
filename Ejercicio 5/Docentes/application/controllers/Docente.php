<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docente extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Docente_model");
	}

	public function index()
	{
		$this->load->view("docente/index");
	}

	public function list(){
		$docentes = $this->Docente_model->list();
		$jTableResult["Result"] = "OK";
		$jTableResult["Records"] = $docentes;
		header('Content-Type: application/json');
		echo json_encode($jTableResult);
	}

	public function create(){
		$_POST['personaje'] = "doc";
		$ci = $_POST['ci'];
		$this->Docente_model->create($_POST);
		$docente = $this->Docente_model->verificar($ci);
		$jTableResult["Result"] = "OK";
		$jTableResult["Record"] = $docente;
		header('Content-Type: application/json');
		echo json_encode($jTableResult);
	}

	public function update(){
		$ci = $_POST["ci"];
		unset($_POST["ci"]);
		$_POST["personaje"] = "doc";
		$status = $this->Docente_model->update($ci,$_POST);
		if($status){
			$docente = $this->Docente_model->verificar($ci);
			$jTableResult["Result"] = "OK";
			$jTableResult["Record"] = $docente;
		}else{
			$jTableResult["Result"] = "ERROR";
			$jTableResult["Message"] = "No se actualizo";
		}
		header('Content-Type: application/json');
		echo json_encode($jTableResult);
	}

	public function delete(){
		$status = $this->Docente_model->delete($_POST["ci"]);
		if($status){
			$jTableResult["Result"] = "OK";
		}else{
			$jTableResult["Result"] = "ERROR";
			$jTableResult["Message"] = "No se elimino";
		}
		header('Content-Type: application/json');
		echo json_encode($jTableResult);
	}

}

