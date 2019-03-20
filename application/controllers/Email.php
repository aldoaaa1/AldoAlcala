<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Email extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->helper(array('date', 'url'));
			$this->load->library('email');
		}

		function index(){
			$this->email->from('ALDO ALCALA (Page)');
			$this->email->to('aldo.aaa1@gmail.com');
			// $this->email->cc('another@another-example.com');
			// $this->email->bcc('them@their-example.com');
			$this->email->subject('Email Testing 2');
			$this->email->message('Testing the email class.');
			$this->email->send();
		}

		function send2me(){
			$mensaje = "\n".$_POST["email"]["mensaje"]."\n\n".'Este mensaje ha sido enviado desde la página de '.$_POST["email"]["pagina"].' de aldoalcala.000webhostapp.com';
			$this->email->from($_POST["email"]["correo"]);
			$this->email->to('aldo.aaa1@gmail.com');
			// $this->email->cc('another@another-example.com');
			// $this->email->bcc('them@their-example.com');
			$this->email->subject($_POST["email"]["asunto"]);
			$this->email->message($mensaje);
			$this->email->send();
		}

	}
?>