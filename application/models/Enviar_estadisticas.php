<?php

	class Enviar_estadisticas extends CI_Model{
		
		function __construct(){
			$this->load->database();
		}

		function registrar_visita(){
			$datestring = '%Y-%m-%d  %H:%i:%s';
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
			$this->db->insert('visitas', $data);
		}

		function registrar_frecuencia(){
			// Creo el identificador de la visita
			$identificador = $_POST['user']['ip'].'(res:'.$_POST['user']['screenWidth'].'x'.$_POST['user']['screenHeight'].')'.$_POST['user']['userAgent'];

			// Traemos id si el usuario ya visitó anteriormente
			$query = 'SELECT idvisitas_frecuencia, cantidad_visitas FROM visitas_frecuencia where key_visita = \''.$identificador.'\'';
			$consulta = $this->db->query($query)->result_array();
			if (!$consulta) { $es_nuevo = true; } else{ $es_nuevo = false; }
			$datestring = '%Y-%m-%d  %H:%i:%s';
			$fecha = mdate($datestring, now(LOCAL_TIMEZONE));
			if ($es_nuevo) {
				$data = array(
					'cantidad_visitas' => 1,
					'primera_visita' => $fecha,
					'ultima_pagina' => $_POST['user']['paginaActual'],
					'ip' => $_POST['user']['ip'],
					'screenWidth' => $_POST['user']['screenWidth'],
					'screenHeight' => $_POST['user']['screenHeight'],
					'key_visita' => $identificador
				);
				$this->db->insert('visitas_frecuencia', $data);
			} else {
				$cantidad_visitas = 
				$this->db->set('cantidad_visitas', intval($consulta[0]['cantidad_visitas']) + 1);
				$this->db->set('ultima_visita', $fecha);
				$this->db->set('ultima_pagina', $_POST['user']['paginaActual']);
				$this->db->where('idvisitas_frecuencia', intval($consulta[0]["idvisitas_frecuencia"]));
				$this->db->update('visitas_frecuencia');
			}
		}

		function consultar_subscripcion(){
			// IDENTIFICAMOS SI YA ES CORREO REGISTRADO
			$query = 'SELECT idsubscripciones FROM subscripciones where paginaSubscripcion = \''.$_POST['user']['paginaActual'].'\''.'AND correo_electronico = \''.$_POST['user']['correo'].'\'';
			$consulta = $this->db->query($query)->result_array();
			if (!$consulta){echo 1;} else {return false;}
		}

		function registrar_subscripcion(){
			// Creo el identificador de la visita
			$identificador = $_POST['user']['ip'].'(res:'.$_POST['user']['screenWidth'].'x'.$_POST['user']['screenHeight'].')'.$_POST['user']['userAgent'];

			// CREO FECHA DEL MOVIMIENTO CON FORMATO
			$datestring = '%Y-%m-%d  %H:%i:%s';
			$fecha = mdate($datestring, now(LOCAL_TIMEZONE));

			// REGISTRO EN BASE DE DATOS
			$data = array(
				'paginaSubscripcion' => $_POST['user']['paginaActual'],
				'nombre' => $_POST['user']['nombre'],
				'apellido' => $_POST['user']['apellido'],
				'correo_electronico' => $_POST['user']['correo'],
				'fecha' => $fecha,
				'screenWidth' => $_POST['user']['screenWidth'],
				'screenHeight' => $_POST['user']['screenHeight'],
				'lenguage' => $_POST['user']['language'],
				'vendor' => $_POST['user']['vendor'],
				'ip' => $_POST['user']['ip'],
				'key_visita' => $identificador
			);
			$this->db->insert('subscripciones', $data);
		}

	}

?>