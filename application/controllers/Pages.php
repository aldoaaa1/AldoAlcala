<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pages extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('Enviar_estadisticas');
			$this->load->helper(array('date', 'url'));
			$this->load->library('session');
		}

		function index(){
			$datestring = '%Y-%m-%d  %H:%i:%s';
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

		function b($a){
			$data['modules_ubication'] = 'modules/'.$a.'/';
			$this->load->view('templates/header.php');
			$this->load->view('pages/'.$a, $data);
			// NO INCLUYE EL FOOTER
		}

		function nuevo_registro(){
			$this->Enviar_estadisticas->registrar_visita();
			$this->Enviar_estadisticas->registrar_frecuencia();
		}

	}


?>