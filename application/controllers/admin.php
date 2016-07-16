<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');

		if($this->session->userdata('isLogin')== FALSE or $this->session->userdata('level') != 'admin'){
			echo "<script>alert('You Have To Login First');location.href='http://localhost/lapgas'</script>";
		}
	}

	public function tambah($bil1, $bil2) {
		
			$data['bil1'] = $bil1;
			$data['hasil'] = $bil1 + $bil2;
			$data['bil2'] = $bil2;

			$this->load->view('admin/test', $data);
	}

	public function index(){
		$this->dashboard();
	}


	// Mahasiswa//

	public function a_mahasiswa(){
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
			$this->admin_model->add_mahasiswa($Image);
			echo "<script>alert('Sukses Tambah Data');location.href='http://localhost/lapgas/admin/l_mahasiswa'</script>";
		}else{
			$this->load->view('admin/add_mhs');
		}
	}

	public function e_mahasiswa($NPM){
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
			$this->admin_model->edit_mahasiswa($NPM,$Image);
			echo "<script>alert('Sukses Edit Data');location.href='http://localhost/lapgas/admin/l_mahasiswa'</script>";
		}else{
			$data['Mahasiswa']=$this->admin_model->readMahasiswaPersonal($NPM);
			$this->load->view('admin/add_mhs',$data);
		}
	}

	public function d_mahasiswa($NPM){
		$this->admin_model->delete_mahasiswa($NPM);
		echo "<script>alert('Success Delete Data');location.href='http://localhost/lapgas/admin/l_mahasiswa'</script>";
	}

	public function filter_mahasiswa(){
		if($this->input->post()){
			$data['Mahasiswa']=$this->admin_model->filter_data_mahasiswa();
			$this->load->view('admin/list_mhs' ,$data);
		}else{
			$this->load->view('admin/filter_list_m');
		}
	}

	public function l_mahasiswa(){
		$data['Mahasiswa']=$this->admin_model->readMahasiswa();
		$this->load->view('admin/list_mhs_all',$data);
	}

	public function detail_mahasiswa($NPM){
		$data['mahasiswa']=$this->admin_model->readProfile($NPM);
		$this->load->view('admin/detail_mahasiswa',$data);
	}

	// Matakuliah//

	public function a_matkul(){
		if($this->input->post()){
			$this->admin_model->add_matkul();
			echo "<script>alert('Sukses Tambah Data');location.href='http://localhost/lapgas/admin/l_matkul'</script>";
		}else{
			$this->load->view('admin/add_matkul');
		}
	}

	public function l_matkul(){
		$data['Matakuliah']=$this->admin_model->readMatkul();
		$this->load->view('admin/list_matkul',$data);
	}

	public function e_matkul($Kode){
		if($this->input->post()){
			$this->admin_model->edit_matakuliah($Kode);
			echo "<script>alert('Sukses Edit Data');location.href='http://localhost/lapgas/admin/l_matkul'</script>";
		}else{
			$data['Matakuliah']=$this->admin_model->readOneMatkul($Kode);
			$this->load->view('admin/add_matkul',$data);
		}
	}

	public function d_matkul($Kode){
		$this->admin_model->delete_matakuliah($Kode);
		echo "<script>alert('Success Delete Data');location.href='http://localhost/lapgas/admin/l_matkul'</script>";
	}

	// Pembayaran //

	public function pre_a_bayar(){
		if($this->input->post()){
			$data['Matakuliah']=$this->admin_model->readMatkul();
			$data['Mahasiswa_1']=$this->admin_model->filter_mahasiswa_1();
			$data['Mahasiswa_2']=$this->admin_model->filter_mahasiswa_2();
			$this->load->view('admin/add_bayar',$data);
		}else{
			$this->load->view('admin/pre_add_bayar');
		}
	}

	public function pre_e_bayar($NPM,$Kode){
		$data['Matakuliah']=$this->admin_model->readMatkul();
		$data['Pembayaran']=$this->admin_model->readOneBayar($Kode);
		$data['Pembayaran_2']=$NPM;
		$this->load->view('admin/edit_bayar',$data);
	}

	public function a_bayar(){
		$config['upload_path'] = './uploads/struk';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';

		$this->load->library('upload', $config);
		$field_name = "userfile";
		$this->upload->do_upload($field_name);
		$upload_data = $this->upload->data();
		$Image = $upload_data['file_name'];

		$this->admin_model->add_pembayaran($Image);
		echo "<script>alert('Sukses Tambah Data');location.href='http://localhost/lapgas/admin/filter_bayar'</script>";
	}

	public function filter_bayar(){
		$this->load->view('admin/filter_list_b');
	}

	public function filter_bayar_byKelas(){
		$data['Mahasiswa']=$this->admin_model->filter_pembayaran_mhs();
		$data['Matakuliah']=$this->admin_model->filter_pembayaran_mk();
		$data['Pembayaran']=$this->admin_model->filter_pembayaran_bayar();
		$this->load->view('admin/list_bayar' ,$data);
	}

	public function filter_bayar_byTanggal(){
		$data['Pembayaran']=$this->admin_model->filter_pembayaran_tanggal();
		$this->load->view('admin/list_bayar_2' ,$data);
	}

	public function e_bayar(){
		$config['upload_path'] = './uploads/struk';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '10000';
		$config['max_height']  = '10000';

		$this->load->library('upload', $config);
		$field_name = "userfile";
		$this->upload->do_upload($field_name);
		$upload_data = $this->upload->data();
		$Image = $upload_data['file_name'];

		$NPM = $this->input->post('NPM');

		$this->admin_model->edit_pembayaran($Image);
		echo "<script>alert('Sukses Edit Data');location.href='http://localhost/lapgas/admin/detail_bayar/".$NPM." '</script>";
	}

	public function d_bayar($NPM,$Kode){
		$NPM = $NPM;
		$this->admin_model->delete_pembayaran($Kode);
		echo "<script>alert('Success Delete Data');location.href='http://localhost/lapgas/admin/detail_bayar/".$NPM." '</script>";
	}

	public function detail_bayar($NPM){
		$data['Pembayaran']=$this->admin_model->readDetailBayar($NPM);
		$data['Pembayaran_2']=$this->admin_model->readDetailBayar_2($NPM);
		$data['Matakuliah']=$this->admin_model->readMatkul();
		$data['Mahasiswa']=$this->admin_model->readMahasiswaPersonal($NPM);
		$this->load->view('admin/detail_pembayaran',$data);
	}

	// password //

	public function cp($kode){
		if($this->input->post()){
			if($this->input->post('l_password') == $this->input->post('password')){
				$this->admin_model->edit_pw($kode);
				echo "<script>alert('Sukses Edit Password');location.href='http://localhost/lapgas/admin'</script>";
			} else {
				echo "<script>alert('Password Tidak Cocok');location.href='http://localhost/lapgas/admin'</script>";
			}
		}else{
			$data['admin']=$this->admin_model->readOneAdmin($kode);
			$this->load->view('admin/ubah_pw',$data);
		}
	}

	// Dashboard //

	public function dashboard(){
		$data['dashboard']=$this->admin_model->readDashboard();
		$this->load->view('admin/index', $data);
	}

	public function e_dashboard(){
		if($this->input->post()){
			$this->admin_model->edit_dashboard();
			echo "<script>alert('Sukses Edit Dashboard');location.href='http://localhost/lapgas/admin'</script>";
		}else{
			$data['dashboard']=$this->admin_model->readDashboard();
			$this->load->view('admin/ubah_dashboard', $data);
		}
	}

}
