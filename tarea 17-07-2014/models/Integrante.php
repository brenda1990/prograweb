<?php

class Integrante extends Modelo{
    public $nombre_tabla = 'integrante';
    public $pk = 'idintegrante';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'peso'=>array(),
        'estatura'=>array(),
        'foto'=>array(),
        'edad'=>array(),
        'idequipo'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido;
    private $peso;
    private $estatura;
    private $foto;
    private $edad;
    private $idequipo;
       
    
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
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

        $this->apellido = trim($valor);
    }

    public function get_peso(){
        return $this->peso;
    } 

    public function set_peso($valor){

        $er = new Er();
        
        if ( !$er->valida_numero($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

        $this->peso = trim($valor);
    }

    public function get_estatura(){
        return $this->nombre;
    } 

    public function set_estatura($valor){

        $er = new Er();
        
        if ( !$er->valida_numero($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

        $this->estatura = trim($valor);
    }

    public function get_foto(){
        return $this->foto;
    } 

    public function set_foto($valor){

        $er = new Er();
       
        if ( !$er->valida_imagen($valor['name']) ){
            $this->errores[] = "Este foto (".$valor.") no es valido";
        }
         //agregar funcion para validar tipo y tamaño del archivo
        $this->foto = trim($valor['name']);
    }

       
    public function get_edad(){
        return $this->edad;
    } 

    public function set_edad($valor){

        $er = new Er();
        
        if ( !$er->valida_numero($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

        $this->edad = trim($valor);
    }

    public function get_idequipo(){
        return $this->idequipo;
    } 

    public function set_idequipo($valor){

        $er = new Er();
        
        if ( !$er->valida_numero($valor) ){
            $this->errores[] = "Este numero (".$valor.") no es valido";
        }

        $this->idequipo = trim($valor);
    }


    
    
    
}

?>
