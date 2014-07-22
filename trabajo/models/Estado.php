<?php

class Estado extends Modelo{
    public $nombre_tabla = 'estado';
    public $pk = 'idestado';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'idpais'=>array(),
      
    );
    
    public $errores = array( );
    
    private $nombre;
    private $idpais;

    
    function Estado(){
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
     public function get_idpais(){
        return $this->nombre;
    } 

    public function set_idpais($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

               
        $this->idpais = trim($valor);
        
    } 
    
    
}

?>