<?php

class Integrante extends Modelo{
    public $nombre_tabla = 'integrante';
    public $pk = 'id_integrante';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'peso'=>array(),
        'estatura'=>array(),
        'foto'=>array(),
        'edad'=>array(),
        'id_equipo'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido;
    private $peso;
    private $estatura;
    private $foto;
    private $edad;
    private $id_equipo;
       
    
    function Integrante(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

        $this->nombre = trim($valor);
    }

    public function get_apellido(){
        return $this->apellido;
    } 

    public function set_apellido($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este apellido (".$valor.") no es valido";
        }

        $this->apellido = trim($valor);
    }

    public function get_peso(){
        return $this->peso;
    } 

    public function set_peso($valor){

        $er = new Er();
        
        if ( !$er->valida_numero($valor) ){
            $this->errores[] = "Este valor (".$valor.") (peso) no es valido";
        }

        $this->peso = trim($valor);
    }

    public function get_estatura(){
        return $this->estatura;
    } 

    public function set_estatura($valor){

        $er = new Er();
        
        if ( !$er->valida_numero($valor) ){
            $this->errores[] = "Este valor (".$valor.") (estatura) no es valido";
        }

        $this->estatura = trim($valor);
    }

    public function get_foto(){
        return $this->foto;
    } 

    public function set_foto($valor){

        $er = new Er();
        
        if ( !$er->valida_imagen($valor) ){
            $this->errores[] = "Esta imagen (".$valor.") no es valida";
        }

        $this->foto = trim($valor);
    }

    public function get_edad(){
        return $this->edad;
    } 

    public function set_edad($valor){

        $er = new Er();
        
        if ( !$er->valida_numero($valor) ){
            $this->errores[] = "Este valor (".$valor.") (edad) no es valido";
        }

        $this->edad = trim($valor);
    }

    public function get_id_equipo(){
        return $this->id_equipo;
    } 

    public function set_id_equipo($valor){

        $er = new Er();
        
        if ( !$er->valida_numero($valor) ){
            $this->errores[] = "Esta equipo (".$valor.") no es valido";
        }

        $this->id_equipo = trim($valor);
    }



}

?>
