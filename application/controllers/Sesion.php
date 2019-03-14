<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Sesion extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('Sesiones');
			$this->load->helper(array('date', 'url'));
			$this->load->library('session');
		}

		function index(){
			$data = $this->Sesiones->checar_usuario($_POST['usuario'], $_POST['password']);
			if ($data == 0) {
				header('Location: '.base_url());
			} else {
				$this->Sesiones->registrar_ultimo_acceso($data);
				$this->Sesiones->registrar_ingreso($data);
				$this->load->view('templates/header');
				$this->load->view('pages/app/dashboard/admin.php');
				$this->load->view('templates/footer');
				$user_data = array( 'idusuario' => $data );
				$this->session->set_userdata($user_data);
				// var_dump($this->session->userdata());
			}
		}

		function inactividad($last){

		}
	}

?>