<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libro_model extends CI_Model {

	function list(){
		$this->db->select('*');
		$this->db->from('persona');
		$this->db->where("personaje='doc'");
		return $this->db->get()->result_array();
	}

	function one($id){
		$this->db->select('*');
		$this->db->from('persona');
		$this->db->where('ci',$id);
		return $this->db->get()->row_array();
	}

	function create($params){
		$this->db->insert('persona',$params);
		return $this->db->insert_ci();
	}

	function update($id,$params){
		$this->db->where('ci',$id);
		return $this->db->update('persona',$params);
	}

	function delete($id){
		$this->db->where('ci',$id);
		return $this->db->delete('persona');
	}


}