<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mhs_model extends CI_Model {	

	function readProfile($NPM){
		$this->db->where('NPM',$NPM);
		$query=$this->db->get('mahasiswa');
		return $query->row();
	}

	function readMatkul(){
		$query=$this->db->get('Matakuliah');	
		return $query->result();
	}

	function edit_profile($NPM,$Image){	
		if ($Image == ""){
			$Images = $this->input->post('userpic');
		}else{
			$Images = "http://localhost/lapgas/uploads/pics_member/".basename($Image);
		}

		$data=array(						
			'Email' => $this->input->post('Email'),
			'Telfon' => $this->input->post('Telfon'),
			'Alamat' => $this->input->post('Alamat'),
			'pic' => $Images
		);
		$this->db->where('NPM',$NPM);
		$this->db->update('Mahasiswa',$data);
	}

	function readNilai($NPM){
		$this->db->select('mahasiswa.*,pembayaran.*,matakuliah.*');	
		$this->db->join('pembayaran', 'mahasiswa.nama = pembayaran.nama_mhs', 'left'); 		
		$this->db->join('matakuliah', 'matakuliah.nama_mk = pembayaran.nama_mk', 'left'); 		
		$this->db->where('NPM',$NPM);
		$query=$this->db->get('mahasiswa');
		return $query->result();
	}

	function readPassword($NPM){
		$this->db->where('NPM',$NPM);
		$query=$this->db->get('mahasiswa');
		return $query->row();
	}

	function edit_pw($NPM){		
		$data=array(			
			'password' => $this->input->post('b_password')
		);
		$this->db->where('NPM',$NPM);
		$this->db->update('mahasiswa',$data);
	}

	function readDashboard(){
		$query=$this->db->get('dashboard');	
		return $query->row();
	}
}