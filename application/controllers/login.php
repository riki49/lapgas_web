<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index(){
		$this->load->view('login');
	}

	public function doLogin(){
		if ($this->input->post()){
			$login = $this->login_model->getLogin();
			if($login != ''){
				$data_session = array(
					'isLogin' => TRUE,					
					'level' => $login->level,					
					'Nama' => $login->Nama,	
					'kode' => $login->kode,	
					'NPM' => $login->NPM,					
				);							
				$this->session->set_userdata($data_session);
				if ($this->session->userdata('level') == 'admin') {
					redirect('admin');
				} else if ($this->session->userdata('level') == 'mahasiswa') {
					redirect('mahasiswa');
				}			
			}else{				
				echo "<script>alert('Salah Username Atau Password');location.href='http://localhost/lapgas'</script>";
			}
		}
	}
	
	public function doLogout(){
		$this->session->sess_destroy();
		redirect('');
	}
}
