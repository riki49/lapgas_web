<?php 

	class Cetak_model extends CI_Model {

    //put your code here
    function __construct(){
        parent::__construct();
    }
    
    function select_data_pembayaran() {
    	$this->db->select('Pembayaran.*,Mahasiswa.*');
		$this->db->join('Mahasiswa', 'Pembayaran.Nama_mhs = Mahasiswa.Nama', 'left'); 				
		$this->db->order_by('Pembayaran.Angkatan','asc');
        $query = $this->db->get('pembayaran');
        return $query->result();
    }

    function select_data_kelas1($Angkatan,$Kelas) {
        $this->db->where('Angkatan',$Angkatan);
        $this->db->where('Kelas',$Kelas);               
        
        $query=$this->db->get('Mahasiswa');
        return $query->result();
    }

    function select_data_kelas2($Angkatan,$Kelas) {        
        $this->db->where('Angkatan',$Angkatan);
        $this->db->where('Kelas',$Kelas);               
        
        $query=$this->db->get('Mahasiswa');
        return $query->row();
    }

    function readMatkul(){
        $query=$this->db->get('Matakuliah');    
        return $query->result();
    }

    function select_data_byTanggal($date_1,$date_2,$additional){       
        $this->db->select('Pembayaran.*,Mahasiswa.*,Matakuliah.*');
        $this->db->join('Mahasiswa', 'Pembayaran.Nama_mhs = Mahasiswa.Nama', 'left');       
        $this->db->join('Matakuliah', 'Pembayaran.Nama_mk = Matakuliah.Nama_mk', 'full');       

        if ($additional==""){
            $this->db->where('tgl_bayar >=', $date_1);  
            $this->db->where('tgl_bayar <=', $date_2);
        }else{
            $this->db->where('tgl_bayar >=', $date_1);  
            $this->db->where('tgl_bayar <=', $date_2);
            $this->db->where('Nama_mhs', $additional);
            $this->db->or_where('NPM', $additional);
            $this->db->or_where('matakuliah.Nama_mk', $additional);
            $this->db->or_where('matakuliah.Kode_mk', $additional);
        }

        $this->db->order_by("tgl_bayar", "asc");

        $query=$this->db->get('Pembayaran');
        return $query->result();
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

    function readMahasiswaPersonal($NPM){
        $this->db->where('NPM',$NPM);
        $query=$this->db->get('Mahasiswa');
        return $query->row();
    }

    function readMatkulCoba($NPM){
        $this->db->select('Mahasiswa.*,Matakuliah.*,Pembayaran.*');
        $this->db->join('Pembayaran', 'Mahasiswa.Nama = Pembayaran.Nama_mhs', 'full');      
        $this->db->join('Matakuliah', 'Pembayaran.Nama_mk = Matakuliah.Nama_mk', 'full');      
        $this->db->where('NPM',$NPM);
        $query=$this->db->get('Mahasiswa');    
        return $query->result();
    }
}
