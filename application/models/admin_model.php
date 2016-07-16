<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {	

	// Mahasiswa //
	
	function add_mahasiswa($Image){	
		$level = "mahasiswa";

		if ($Image == ""){
			$Images = "http://localhost/lapgas/assets/img/default.png";
		}else{
			$Images = "http://localhost/lapgas/uploads/pics_member/".basename($Image);
		}

		$data=array(
			'NPM' => $this->input->post('NPM'),
			'Nama' => $this->input->post('Nama'),
			'Password' => $this->input->post('Password'),
			'Gender' => $this->input->post('Gender'),
			'Angkatan' => $this->input->post('Angkatan'),
			'Kelas' => $this->input->post('Kelas'),
			'Email' => $this->input->post('Email'),
			'Telfon' => $this->input->post('Telfon'),
			'Alamat' => $this->input->post('Alamat'),
			'pic' => $Images,
			'level' => $level
		);
		$this->db->insert('Mahasiswa',$data);
	}

	function readMahasiswa(){
		$query=$this->db->get('Mahasiswa');	
		return $query->result();
	}

	function readMahasiswaPersonal($NPM){
		$this->db->where('NPM',$NPM);
		$query=$this->db->get('Mahasiswa');
		return $query->row();
	}

	function filter_data_mahasiswa(){
		$cek_angkatan = $this->input->post('Angkatan');
		$cek_kelas = $this->input->post('Kelas');			

		$this->db->where('Angkatan',$cek_angkatan);
		$this->db->where('Kelas',$cek_kelas);				
		
		$query=$this->db->get('Mahasiswa');
		return $query->result();
	}

	function edit_mahasiswa($NPM,$Image){	
		if ($Image == ""){
			$Images = $this->input->post('userpic');
		}else{
			$Images = "http://localhost/lapgas/uploads/pics_member/".basename($Image);
		}

		$data=array(			
			'Nama' => $this->input->post('Nama'),
			'Password' => $this->input->post('Password'),
			'Gender' => $this->input->post('Gender'),
			'Angkatan' => $this->input->post('Angkatan'),
			'Kelas' => $this->input->post('Kelas'),
			'Email' => $this->input->post('Email'),
			'Telfon' => $this->input->post('Telfon'),
			'Alamat' => $this->input->post('Alamat'),
			'pic' => $Images
		);
		$this->db->where('NPM',$NPM);
		$this->db->update('Mahasiswa',$data);
	}

	function delete_mahasiswa($NPM){
		$this->db->where('NPM',$NPM);
		$this->db->delete('Mahasiswa');
	}	

	function readProfile($NPM){
		$this->db->where('NPM',$NPM);
		$query=$this->db->get('mahasiswa');
		return $query->row();
	}

	// Matakuliah //

	function add_matkul(){	
		$data=array(
			'Kode_mk' => $this->input->post('Kode'),		
			'Nama_mk' => $this->input->post('Nama_mk'),
			'Semester' => $this->input->post('Semester'),			
		);
		$this->db->insert('Matakuliah',$data);
	}

	function readMatkul(){
		$query=$this->db->get('Matakuliah');	
		return $query->result();
	}

	function readOneMatkul($Kode){
		$this->db->where('Kode_mk',$Kode);
		$query=$this->db->get('Matakuliah');
		return $query->row();
	}

	function edit_matakuliah($Kode){
		$data=array(			
			'Nama_mk' => $this->input->post('Nama_mk'),
			'Semester' => $this->input->post('Semester'),			
		);
		$this->db->where('Kode_mk',$Kode);
		$this->db->update('Matakuliah',$data);
	}

	function delete_matakuliah($Kode){
		$this->db->where('Kode_mk',$Kode);
		$this->db->delete('Matakuliah');
	}	

	// Pembayaran //

	function filter_Mahasiswa_1(){
		$cek_angkatan = $this->input->post('Angkatan');
		$cek_kelas = $this->input->post('Kelas');

		$this->db->where('Angkatan',$cek_angkatan);
		$this->db->where('Kelas',$cek_kelas);		
		$query=$this->db->get('Mahasiswa');
		return $query->result();
	}

	function filter_Mahasiswa_2(){
		$cek_angkatan = $this->input->post('Angkatan');
		$cek_kelas = $this->input->post('Kelas');

		$this->db->where('Angkatan',$cek_angkatan);
		$this->db->where('Kelas',$cek_kelas);		
		$query=$this->db->get('Mahasiswa');
		return $query->row();
	}

	function add_pembayaran($Image){
		$no = 0;		
		
		foreach ($this->input->post('Nama_mk') as $temp1) {
			if($temp1 != "-"){
				$mk_2[]=$temp1;
			}
		}

		foreach ($this->input->post('Nilai') as $temp2) {
			if($temp2 != "-"){
				$nilai_2[]=$temp2;
			}
		}



		$query_i = "select MAX(Kode) from Pembayaran";
	    $result_i = mysql_query($query_i);
	    $data2 = mysql_fetch_array($result_i);	    
	    $MaxID = $data2[0];	    
	    $temp = (int)substr($MaxID,2,4);	    	    

		$Images = "http://localhost/lapgas/uploads/struk/".basename($Image);
			
		foreach ($mk_2 as $mk ){			
			$data=array(
					'Kode' => $NewID = "K".sprintf("%04s",$temp++),
					'Angkatan' => $this->input->post('Angkatan'),
					'Kelas' => $this->input->post('Kelas'),
					'Nama_mhs' => $this->input->post('Nama_mhs'),
					'Nama_mk' => $mk,
					'Nominal' => $this->input->post('Nominal'),
					'Nilai' => $nilai_2[$no],
					'tgl_bayar' => $this->input->post('tgl_bayar'),
					'tgl_input' => $this->input->post('tgl_input'),				
					'pic' => $Images,
					'Status' => $this->input->post('Status'),
					'admin' => $this->input->post('admin')
				);			
			$this->db->insert('Pembayaran',$data);$no++;
		}		
	}

	function readPembayaran(){
		$query=$this->db->get('Pembayaran');	
		return $query->result();
	}

	function readOneBayar($Kode){
		$this->db->where('Kode',$Kode);		
		$query=$this->db->get('Pembayaran');
		return $query->row();
	}

	function readDetailBayar($NPM){
		$this->db->select('Mahasiswa.*,Pembayaran.*');
		$this->db->join('Pembayaran', 'Mahasiswa.Nama = Pembayaran.Nama_mhs', 'left'); 		
		$this->db->where('NPM',$NPM);
		$query=$this->db->get('Mahasiswa');
		return $query->result();
	}

	function readDetailBayar_2($NPM){
		$this->db->select('Mahasiswa.*,Pembayaran.*');
		$this->db->join('Pembayaran', 'Mahasiswa.Nama = Pembayaran.Nama_mhs', 'left'); 		
		$this->db->where('NPM',$NPM);
		$query=$this->db->get('Mahasiswa');
		return $query->row();
	}

	function edit_pembayaran($Image){
		if ($Image == ""){
			$Images = $this->input->post('userpic');
		}else{
			$Images = "http://localhost/lapgas/uploads/struk/".basename($Image);
		}

		$data=array(			
			'Angkatan' => $this->input->post('Angkatan'),
			'Kelas' => $this->input->post('Kelas'),
			'Nama_mhs' => $this->input->post('Nama_mhs'),
			'Nama_mk' => $this->input->post('Nama_mk'),
			'Nominal' => $this->input->post('Nominal'),
			'Nilai' => $this->input->post('Nilai'),
			'tgl_bayar' => $this->input->post('tgl_bayar'),
			'tgl_input' => $this->input->post('tgl_input'),
			'pic' => $Images,
			'admin' => $this->input->post('admin'),
			'Status' => $this->input->post('Status')
		);
		$this->db->where('Kode',$this->input->post('Kode'));
		$this->db->update('Pembayaran',$data);
	}

	function delete_pembayaran($Kode){
		$this->db->where('Kode',$Kode);
		$this->db->delete('Pembayaran');
	}	

	function filter_Pembayaran_mhs(){
		$cek_angkatan = $this->input->post('Angkatan');
		$cek_kelas = $this->input->post('Kelas');			

		$this->db->where('Angkatan',$cek_angkatan);
		$this->db->where('Kelas',$cek_kelas);				
		
		$query=$this->db->get('Mahasiswa');
		return $query->result();
	}

	function filter_Pembayaran_mk(){		
		$query=$this->db->get('Matakuliah');
		return $query->result();
	}

	function filter_Pembayaran_bayar(){		
		$cek_angkatan = $this->input->post('Angkatan');

		$this->db->where('Angkatan',$cek_angkatan);		
		
		$query=$this->db->get('Pembayaran');
		return $query->result();
	}

	function filter_Pembayaran_tanggal(){		
		$first_date = $this->input->post('date_1');
		$second_date = $this->input->post('date_2');
		$additional =  $this->input->post('additional');

		$this->db->select('Pembayaran.*,Mahasiswa.*,Matakuliah.*');
		$this->db->join('Mahasiswa', 'Pembayaran.Nama_mhs = Mahasiswa.Nama', 'left'); 		
		$this->db->join('Matakuliah', 'Pembayaran.Nama_mk = Matakuliah.Nama_mk', 'full'); 		

		if ($additional==""){
			$this->db->where('tgl_bayar >=', $first_date);	
			$this->db->where('tgl_bayar <=', $second_date);
		}else{
			$this->db->where('tgl_bayar >=', $first_date);	
			$this->db->where('tgl_bayar <=', $second_date);
			$this->db->where('Nama_mhs', $additional);
			$this->db->or_where('NPM', $additional);
			$this->db->or_where('matakuliah.Nama_mk', $additional);
			$this->db->or_where('matakuliah.Kode_mk', $additional);
		}

		$this->db->order_by("tgl_bayar", "asc");

		$query=$this->db->get('Pembayaran');
		return $query->result();
	}

	// ubah password //

	function readOneAdmin($kode){
		$this->db->where('kode',$kode);
		$query=$this->db->get('admin');
		return $query->row();
	}

	function edit_pw($kode){		
		$data=array(			
			'password' => $this->input->post('b_password')
		);
		$this->db->where('kode',$kode);
		$this->db->update('admin',$data);
	}

	// dashboard //

	function readDashboard(){
		$query=$this->db->get('dashboard');	
		return $query->row();
	}

	function edit_dashboard(){		
		$data=array(			
			'Title' => $this->input->post('Title'),
			'Content' => $this->input->post('Content'),			
			'Date' => $this->input->post('Date'),			
		);
		$this->db->where('Code','Admin');
		$this->db->update('dashboard',$data);
	}
}