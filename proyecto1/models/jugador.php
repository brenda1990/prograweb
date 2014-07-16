<?php

class Jugador extends Modelo{
    public $nombre_tabla = 'jugador';
    public $pk = 'idjugador';
    
    
    public $atributos = array(
        'idjugador'=>array(),
        'numero'=>array(),
        'idintegrante'=>array(),
        'idposicion'=>array(),
    );
    
    public $errores = array( );
    
    private $idjugador;
    private $numero;
    private $idintegrante;
    private $posicion;

       
    
    function Jugador(){
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

    public function set_idjugador($valor){

        $er = new Er();
        
        if ( !$er->valida_numero($valor) ){
            $this->errores[] = "Este nombre  (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from usuarios where email = '$valor'");
        $rows = $rs->GetArray();
        
        if(count($rows) > 0){
            $this->errores[] = "Este nombre (".$valor.") ya esta registrado"; 
        }else{
            $this->idjugador = trim($valor);
        }
    }

    public function get_id_jugador(){
        return $this->baja;
    }
    
    public function set_idjugador($valor){
        $this->idjugador = trim( md5($valor) );
    }
    


    
    
    
}

?>
