<?php

class estadio extends Modelo{
    public $nombre_tabla = 'estadio';
    public $pk = 'idestadio';
    
    
    public $atributos = array(
        'identrenador'=>array(),
        'idpais'=>array(),
    );
    
    public $errores = array( );
    
    private $idestadio;
    private $Nombre;
    private $idciudad;
       
    
    function estadio(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_identrenador(){
        return $this->identrenador;
    } 

    public function set_identrenador($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre  (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from usuarios where email = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este nombre (".$valor.") ya esta registrado"; 
        }else{
            $this->identrenador = trim($valor);
        }
    }

    public function get_id_entrenador(){
        return $this->baja;
    }
    
    public function set_nombre($valor){
        $this->identrenador = trim( md5($valor) );
    }
    


    
    
    
}

?>
