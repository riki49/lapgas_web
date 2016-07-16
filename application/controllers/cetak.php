<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cetak extends CI_Controller{
    //put your code here
     public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('fpdf');
        $this->load->model('cetak_model');

        if($this->session->userdata('isLogin')== FALSE or $this->session->userdata('level') != 'admin'){
            echo "<script>alert('You Have To Login First');location.href='http://localhost/lapgas'</script>";       
        }
    } 
    
    public function cetakRecap1($Angkatan,$Kelas) {        
        $data['Pembayaran'] = $this->cetak_model->select_data_pembayaran();
        $data['Kelas1'] = $this->cetak_model->select_data_kelas1($Angkatan,$Kelas);
        $data['Kelas2'] = $this->cetak_model->select_data_kelas2($Angkatan,$Kelas);        
        $data['Matakuliah'] = $this->cetak_model->readMatkul();
        $this->load->view('cetak/cetak_Recap1',$data);
    }

    public function cetakRecap2($date_1,$date_2,$additional) {       
        $data['Pembayaran'] = $this->cetak_model->select_data_byTanggal($date_1,$date_2,$additional);        
        $this->load->view('cetak/cetak_Recap2',$data);
    }

    public function cetakRecap3($NPM) {        
        $data['Pembayaran']=$this->cetak_model->readDetailBayar($NPM);        
        $data['Matakuliah']=$this->cetak_model->readMatkul($NPM);
        $data['Mahasiswa2']=$this->cetak_model->readMatkulCoba($NPM);
        $data['Mahasiswa']=$this->cetak_model->readMahasiswaPersonal($NPM);
        $this->load->view('cetak/cetak_Recap3',$data);
    }
}    