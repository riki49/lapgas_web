<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kalkulator extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model('person_model');
	}

  public function kali ($bil1, $bil2) {
    $bil['bil1'] = $bil1;
    $bil['bil2'] = $bil2;
    $bil['hasil'] = $bil1 * $bil2;
    $this->person_model->name = 'csafasfsa';
    $this->person_model->age = 20;
    $bil['person'] = $this->person_model;
    $this->person_model->save();
    $this->load->view(
        'kalkulator/kali',
        $bil
    );
  }
}
