<?php
	class ControllerJugador extends Jugador{
		
		public $muestra_errores = false;
		function __construct(){
			
		}



        public function insertaJugador($datos){
        	echo "<pre>datos:";
        	print_r($datos);
        	echo "</pre>";
        	$equipo = new Jugador();
        	$equipo -> set_idjugador($datos['idjugador']);
        	$equipo -> set_numero($datos['numero']);
        	$equipo -> set_idintegrante($datos['idintegrante']);
        	$equipo -> set_idposicion($datos['idposicion']);
        	if(count($equipo->errores)>0){
        		print_r($equipo->errores);
        	} 
        	die();
        }


        
		
		public function validaJugador($datos){
			$rs = $this->consulta_sql(" select * from jugador where numero = '".$datos['numero']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if ($rows['0']['password']== md5($datos['password'])) {
        			$this->iniciarSesion($rows['0']['rol'],$rows['0']['email']);
        		}else{
		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}

		}

		public function iniciarSesion($rol,$email){
			$_SESSION['user'] = $rol;
			$_SESSION['email'] = $email;
			header("Location: inicio.php");
		}

		public function cerrarSesion(){
			session_destroy();
			header("Location: inicio.php");
		}

	}


?>