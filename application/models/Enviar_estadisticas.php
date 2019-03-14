<?php

	class Enviar_estadisticas extends CI_Model{
		
		function __construct(){
			$this->load->database();
		}

		function registrar_visita(){
			$datestring = '%Y/%m/%d - %h:%i:%s %A';
			$fecha = mdate($datestring, now(LOCAL_TIMEZONE));
			$data = array(
				'date' => $fecha,
				'ip' => $_POST['user']['ip'],
				'pagina' => $_POST['user']['paginaActual'],
				'screenWidth' => $_POST['user']['screenWidth'],
				'screenHeight' => $_POST['user']['screenHeight'],
				'language' => $_POST['user']['language'],
				'vendor' => $_POST['user']['vendor'],
				'userAgent' => $_POST['user']['userAgent']
			);
			return $this->db->insert('visitas', $data);
		}

	}

?>