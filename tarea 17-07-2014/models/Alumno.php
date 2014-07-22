<?php

class Alumno extends Modelo{
    public $nombre_tabla = 'alumno';
    public $pk = 'idalumno';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellidos'=>array(),
        'direccion'=>array(),
        'numeroc'=>array(),  
        'numerot'=>array(),  
        'fecha'=>array(),  
        'foto'=>array(),      
    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellidos;
    private $direccion;
     private $numeroc;
    private $numerot;
    private $fecha;
    private $foto;
       
    
    function Alumno(){
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

    public function get_apellidos(){
        return $this->apellidos;
    } 

    public function set_apellidos($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este valor (".$valor.") no es valido";
        }

        $this->apellidos = trim($valor);
    }
     public function get_direccion(){
        return $this->direccion;
    } 

    public function set_direccion($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este valor (".$valor.") no es valido";
        }

        $this->direccion = trim($valor);
    }
     public function get_numeroc(){
        return $this->numeroc;
    } 

    public function set_numeroc($valor){

        $er = new Er();
        
        if ( !$er->valida_numero($valor) ){
            $this->errores[] = "Este valor (".$valor.") no es valido";
        }

        $this->numeroc = trim($valor);
    }
     public function get_numerot(){
        return $this->numerot;
    } 

    public function set_numerot($valor){

        $er = new Er();
        
        if ( !$er->valida_numero($valor) ){
            $this->errores[] = "Este valor (".$valor.") no es valido";
        }

        $this->numerot = trim($valor);
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


}

?>