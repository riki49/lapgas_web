<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('mhs_model');

		if($this->session->userdata('isLogin')== FALSE or $this->session->userdata('level') != 'mahasiswa'){
			echo "<script>alert('You Have To Login First');location.href='http://localhost/lapgas'</script>";		
		}		
	}

	public function index(){		
		$this->dashboard();
	}

	public function profile($NPM){		
		$data['mahasiswa']=$this->mhs_model->readProfile($NPM);
		$this->load->view('mahasiswa/profile',$data);
	}

	public function e_profile($NPM){
		$config['upload_path'] = './uploads/pics_member';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';

		$this->load->library('upload', $config);		
		$field_name = "userfile";
		$this->upload->do_upload($field_name);
		$upload_data = $this->upload->data();
		$Image = $upload_data['file_name'];

		if($this->input->post()){
			$this->mhs_model->edit_profile($NPM,$Image);
			echo "<script>alert('Sukses Edit Data');location.href='http://localhost/lapgas/mahasiswa'</script>";
		}else{			
			$data['mahasiswa']=$this->mhs_model->readProfile($NPM);		
			$this->load->view('mahasiswa/e_profile',$data);
		}
	}

	public function l_nilai($NPM){
		$data['Matakuliah']=$this->mhs_model->readMatkul();
		$data['Pembayaran']=$this->mhs_model->readNilai($NPM);
		$this->load->view('mahasiswa/l_nilai',$data);
	}	

	public function cp($NPM){		
		if($this->input->post()){
			if($this->input->post('l_password') == $this->input->post('password')){
				$this->mhs_model->edit_pw($NPM);
				echo "<script>alert('Sukses Edit Password');location.href='http://localhost/lapgas/mahasiswa'</script>";	
			} else {		
				echo "<script>alert('Password Tidak Cocok');location.href='http://localhost/lapgas/mahasiswa'</script>";	
			}
		}else{			
			$data['mahasiswa']=$this->mhs_model->readPassword($NPM);		
			$this->load->view('mahasiswa/ubah_pw',$data);
		}
	}

	public function dashboard(){		
		$data['dashboard']=$this->mhs_model->readDashboard();
		$this->load->view('mahasiswa/index', $data);
	}
}
