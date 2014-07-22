<?php

class Pais extends Modelo{
    public $nombre_tabla = 'pais';
    public $pk = 'idpais';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'direccion'=>array(),
        'ubicacion'=>array(),   
        'direccion'=>array(),
        'nombrepro'=>array(),   
        'campo1'=>array(),
        'campo2'=>array(),   
        'campo3'=>array(),      
    );
    
    public $errores = array( );
    
    private $nombre;
    private $direccion;
    private $ubicacion;
    private $direccion;
     private $nombrepro;
    private $campo1;
    private $campo2;
    private $campo3;
       
    
    function Pais(){
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
     public function get_ubicacion(){
        return $this->ubicacion;
    } 

    public function set_ubicacion($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este foto (".$valor.") no es valido";
        }
         //agregar funcion para validar tipo y tamaño del archivo
        $this->ubicacion = trim($valor);
    }
     public function get_nombrepro(){
        return $this->nombrepro;
    } 

    public function set_nombrepro($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este foto (".$valor.") no es valido";
        }
         //agregar funcion para validar tipo y tamaño del archivo
        $this->nombrepro = trim($valor);
    }
     public function get_campo1(){
        return $this->campo1;
    } 

    public function set_campo1($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este foto (".$valor.") no es valido";
        }
         //agregar funcion para validar tipo y tamaño del archivo
        $this->campo1 = trim($valor);
    }

 public function get_campo2(){
        return $this->campo2;
    } 

    public function set_campo2($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este foto (".$valor.") no es valido";
        }
         //agregar funcion para validar tipo y tamaño del archivo
        $this->campo2 = trim($valor);
    }
     public function get_campo3(){
        return $this->campo3;
    } 

    public function set_campo3($valor){

        $er = new Er();
        
        if ( !$er->valida_imagen($valor['name']) ){
            $this->errores[] = "Este foto (".$valor.") no es valido";
        }
         //agregar funcion para validar tipo y tamaño del archivo
        $this->campo3 = trim($valor['name']);
    }
}

?>
