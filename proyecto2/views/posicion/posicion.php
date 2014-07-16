<?php  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Equipo.php');
  include ('../../controllers/EquipoController.php');
  include ('../../libs/Er.php');
  include ('../encabezado_inte/header.php');
  


  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $posicionC = new PosicionController();
    $posicionC->insertaPosicion($_POST);
  }
   
?>
<script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>
        <link rel="stylesheet" href="source/jquery.fancybox.css" type="text/css" media="screen" />

        <link rel="icon" href="favicon.ico">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/justified-nav.css" rel="stylesheet">



        <script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>
        <link rel="stylesheet" href="source/jquery.fancybox.css" type="text/css" media="screen" />


<div class="row">
      <div class="col-md-1">  
      </div>
      <div class="col-md-9">
       <h2>POSICI&Oacute;N</h2> 
        <br/>  
        <br/>
        <form methos="post" id="form_posicion" role="form">
          <div class="form-group">
            <label for="nombre">Posición:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa la posici&oacute;n" required>
          </div>

          <br />

          <div class="form-group">
            <label for="abreviatura">Abreviatura:</label>
            <input type="text" class="form-control" id="abreviatura" name="abreviatura" placeholder="Ingresa la abreviatura" required />
          </div>

          <br />
          <br />

          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
      <div class="col-md-2"></div>
      
    </div>

<?php 