<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {	
	
	function getLogin(){
		$this -> db -> where ('Nama', $this->input->post('Nama'));
		$this -> db -> where ('Password', $this->input->post('Password'));
		$query = $this->db->get('admin');		
		if ($query->num_rows()==1) {
			return $query->row();
		} else {			
			$this -> db -> where ('NPM', $this->input->post('Nama'));
			$this -> db -> where ('Password', $this->input->post('Password'));
			$query = $this->db->get('mahasiswa');		
			if ($query->num_rows()==1)
				return $query->row();
			else			
				return '';		
		}
	}
}