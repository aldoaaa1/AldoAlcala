<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->model('Enviar_estadisticas');
		$this->load->helper(array('date', 'url'));
	}

	function index(){
		$datestring = '%Y/%m/%d - %h:%i:%s %A';
		$data['fecha'] = mdate($datestring, now(LOCAL_TIMEZONE));
		$data['modules_ubication'] = 'modules/index/';
		$this->load->view('templates/header.php');
		$this->load->view('pages/index.php', $data);
		$this->load->view('templates/footer.php');
	}

	function a($a){
		$data['modules_ubication'] = 'modules/'.$a.'/';
		$this->load->view('templates/header.php');
		$this->load->view('pages/'.$a, $data);
		$this->load->view('templates/footer.php');
	}

	function nuevo_registro(){
		$this->Enviar_estadisticas->registrar_visita();
	}

}


?>