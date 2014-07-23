<?php

function conectar(){
     $user="root";
     $pass="anabel12345";
     $server="localhost";
     $db="regu";
     $con=mysql_connect($server,$user,$pass) or die ("Error");
      mysql_select_db($db,$con);

      return $con;
}

?> 