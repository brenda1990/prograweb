<?php

class Er {
    
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
//VALIDA QUE EL VALOR DADO SEAN SOLO NUMEROS
	public function valida_numero($valor){
		$exp_reg = "/^[[:digit:]]+$/"; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
//VALIDA QUE LA CADENA SEA SOLO DE LETRAS MINUSCULAS

	public function letras_minusculas($valor){
		$exp_reg = "/^[a-z]+$/"; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
//VALIDA QUE LA CADENA SEAN SOLO LETRAS, NO IMPORTA SI SON MAYUSCULAS O MINUSCULAS
		public function mayusculas_minusculas($valor){
		$exp_reg = "/^[a-z]+$/i"; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}	
//VALIDA QUE LA CADENA SEA UNA CONTRASENA SEGURA
		public function segura_contra($valor){ 
		$exp_reg = "/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/"; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

//VALIDA UN NUMERO TELEFONICO DE EUA

		public function numero_tel($valor){ 
		$exp_reg = '/^(?:1(?:[. -])?)?(?:\((?=\d{3}\)))?([2-9]\d{2})' .'(?:(?$0';  
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
//VALIDA QUE SEA UNA DIRECCION IPV4
		public function ip_version($valor){ 
		$exp_reg = "/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])" . "(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/"; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
//VALIDA UN NUMERO TELEFONICO DE EUA

		public function numero_telefono($valor){ 
		$exp_reg = '/^(?:1(?:[. -])?)?(?:\((?=\d{3}\)))?([2-9]\d{2})' .'(?:(?$0';  
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
//REEMPLAZA TODAS LAS A POR UNA R
		public function reemplazar($valor){ 
			$cadena = "Soy una cadena con 123 números y guiones <>";
			$patron = "/a/";
			$reemplazo = "R";
			echo preg_replace($patron, $reemplazo, $cadena);			

	}	
// VALIDA UN USUARIO
        public function valida_username($valor){
		$exp_reg = "/^([a-zA-Z0-9])+$/";  
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		}        	
    }
//VALIDA PASSWORD
     public function valida_password($valor){
		$exp_reg = "/^([A-Za-z0-9_+,.:.,=?();!#$%&*<>-])+$/";  
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		}      	
    }  
//VALIDA RFC
    public function valida_rfc($valor){
		$exp_reg = "/^([A-Z,Ñ,&]{3,4}[0-9]{2}[0-1][0-9][0-3][0-9][A-Z,0-9]?[A-Z,0-9]?[0-9,A-Z]?)+$/";  
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		}    	
    }  
//VALIDA CODIGO POSTAL
     public function valida_cp($valor){ 
		$exp_reg = "/^(^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$)+$/";  
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		}         
    }
//VALIDA UN NOMBRE
       public function valida_nombre($valor){
		$exp_reg = "/^([a-zA-ZñÑ\s]{2,50})+$/";  
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		}       	
    }
//VALIDA CURP
 public function valida_curp($valor){
 		$exp_reg = "/^(^.*(?=.{18})(?=.*[0-9])(?=.*[A-ZÑ]).*$)+$/";  
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		}   
    }    
//VALIDA TELEFONO

        public function valida_telefono($valor){ 
 		$exp_reg = "/^(^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$)+$/";  
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		}         	
    }

//VALIDA UNA TARJETA
    public function valida_tarjeta($valor){
 		$exp_reg = "/^(^((67\d{2})|(4\d{3})|(5[1-5]\d{2})|(6011))(-?\s?\d{4}){3}|(3[4,7])\ d{2}-?\s?\d{6}-?\s?\d{5}$)+$/";  
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		}     	
    }
//VALIDA UNA FECHA
        public function valida_fecha($valor){
 		$exp_reg = "/^(^\d{1,2}\/\d{1,2}\/\d{2,4}$)+$/";  
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		}        	
    }    
//VALIDA UNA HORA
     public function valida_hora($valor){
 		$exp_reg = "/^(^[0-2][0-3]:[0-5][0-9]$)+$/";  
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		}        
    }    
//VALIDA EL GENERO
       public function valida_genero($valor){  
 		$exp_reg = "/^(H|M)+$/";  
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		}        	
    }
//VALIDA UNA IMAGEN
       public function valida_imagen($valor){  
 		$exp_reg = "%\.(gif|jpe?g|png)$%i";  
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		}        	
    }

}

?> 