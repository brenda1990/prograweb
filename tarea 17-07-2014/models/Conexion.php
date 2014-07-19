<?php

class Conexion {
    
    
    function Conexion(){
        $this->db = ADONewConnection('mysql');
        $this->db->debug = true;
			       //ip     user      pass    bd
        $this->db->Connect('localhost','root','anabel12345','fifa');

    }
    
}

?>
