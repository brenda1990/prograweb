<?php

class Usuario extends Modelo{
    public $nombre_tabla = 'usuarios';
    public $pk = 'id_usuario';
    
    
    public $atributos = array(
        'email'=>array(),
        'password'=>array(),
        'rol'=>array(),
    );
    
    public $errores = array( );
    
    private $email;
    private $password;
    private $rol;
       
    
    function Equipo(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
  public function get_email(){
        return $this->email;
    } 

    public function set_email($valor){

        $er = new Er();
        
        if ( !$er->valida_email($valor) ){
            $this->errores[] = "Este email (".$valor.") no es valido";
        }

        $this->email = trim($valor);
    }
  public function get_password(){
        return $this->email;
    } 

    public function set_password($valor){

        $er = new Er();
        
        if ( !$er->valida_email($valor) ){
            $this->errores[] = "Este email (".$valor.") no es valido";
        }

        $this->email = trim($valor);
    }
    


    
    
    
}

?>
