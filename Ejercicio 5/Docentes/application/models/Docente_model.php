<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docente_model extends CI_Model {

	function list(){
		$this->db->select("*");
		$this->db->from("persona");
		$this->db->where("personaje='doc'");
		return $this->db->get()->result_array();
	}

	function verificar($ci){
		$this->db->select("*");
		$this->db->from("persona");
		$this->db->where("ci",$ci);
		return $this->db->get()->row_array();
	}


	function create($params){
		$this->db->insert("persona",$params);
	}

	function update($ci,$params){
		$this->db->where("ci",$ci);
		return $this->db->update("persona",$params);
	}

	function delete($ci){
		$this->db->where("ci",$ci);
		return $this->db->delete("persona");
	}


}

/* End of file docente_model.php */
/* Location: ./application/models/docente_model.php */