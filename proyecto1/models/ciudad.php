<?php

class Ciudad extends Modelo{
    public $nombre_tabla = 'ciudad';
    public $pk = 'idciudad';
    
    
    public $atributos = array(
        'idciudad'=>array(),
        'nombre'=>array(),
    );
    
    public $errores = array( );
    
    private $idciudad;
    private $nombre;
       
    
    function Ciudad(){
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
            $this->errores[] = "Este nombre  (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from usuarios where email = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este nombre (".$valor.") ya esta registrado"; 
        }else{
            $this->nombre = trim($valor);
        }
    }

    public function get_nombre(){
        return $this->baja;
    }
    
    public function set_nombre($valor){
        $this->nombre = trim( md5($valor) );
    }
    


    
    
    
}

?>
