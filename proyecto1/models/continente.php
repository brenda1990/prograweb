<?php

class continente extends Modelo{
    public $nombre_tabla = 'continente';
    public $pk = 'idcontinente';
    
    
    public $atributos = array(
        'idcontinente'=>array(),
        'nombre'=>array(),
    );
    
    public $errores = array( );
    
    private $idcontinente;
    private $nombre;
       
    
    function continente(){
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
