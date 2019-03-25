<?php

	class Sesiones extends CI_Model{
		
		function __construct(){
			$this->load->database();
		}

		function checar_usuario($usuario, $password){
			$query = $this->db->query('SELECT * FROM codeigniter.usuarios WHERE usuario = "'.$usuario.'"');
			$db_usuario = $query->result_array();
			if (!$db_usuario) {
				return 0;
			} else {
				$idusuario = (int)$db_usuario[0]['idusuario'];
				if ($idusuario > 0) {
					if ($password == $db_usuario[0]['pass']) {
						return $idusuario;
					} else { return 0; }
				} else { return 0; }
			}
		}

		function registrar_ultimo_acceso($id){
			$fecha = mdate('%Y-%m-%d  %H:%i:%s', now(LOCAL_TIMEZONE));
			$this->db->set('ultimo_acceso', $fecha);
			$this->db->where('idusuario', $id);
			$this->db->update('usuarios');
		}

		function registrar_ingreso($id){
			$datestring = '%Y-%m-%d  %H:%i:%s';
			$fecha = mdate($datestring, now(LOCAL_TIMEZONE));
			$data = array(
				'idusuario' => $id,
				'fecha_inicio' => $fecha
			);
			return $this->db->insert('inicios_sesion', $data);
		}

		function registrar_salida($id_registro){
			$fecha = mdate('%Y-%m-%d  %H:%i:%s', now(LOCAL_TIMEZONE));
			$this->db->set('fecha_salida', $fecha);
			$this->db->where('idinicios_sesion', $id_registro);
			$this->db->update('inicios_sesion');
		}


	}

?>