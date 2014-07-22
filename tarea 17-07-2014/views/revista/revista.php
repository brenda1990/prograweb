<?php 
  include ('../libs/adodb5/adodb-pager.inc.php');
  include ('../libs/adodb5/adodb.inc.php');
  include ('../models/Conexion.php');
  include ('../models/Modelo.php');
  include ('../models/Revista.php');
  include ('../controllers/RevistaController.php');
  include ('../libs/Er.php');
 // include ('../encabezado_inte/header.php');


  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $revistaC = new RevistaController();
    $revistaC->insertaRevista($_POST);
  } 

?>
<link rel="stylesheet" type="text/css" media="screen" href="content/bootstrap-datetimepicker.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="dia.ico">
<body background="boton.jpg">
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrapValidator.min.css"/>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!--Either use the compressed version (recommended in the production site)-->
    <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>

    <!--Or use the original one with all validators included-->
    <script type="text/javascript" src="js/bootstrapValidator.js"></script>
   <!-- Required JS -->
    <div class="container">
         <div class="row">
         <div class="col-md-12">
           <h1 class="text-center"> 
            <span class="glyphicon glyphicon-arrow-up"><span> Registro Revista
            </h1>
          </div>
       </div>
        <?php
              if($revistaC->muestra_errores){
                  ?>
                  <div class="alert alert-danger"> 
                    <?php

                  foreach ($revistaC->errores as $value) {
                         echo "<p>error: $value</p>";
                  } 
                  ?>
                </div>            
    
            <?php
               
              }
              ?>
        <form method="post" id="form_estadio" role="form">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre"  required>
          </div>
          <div class="form-group">
            <label for="nombre">Fecha:</label>
            <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Ingresa el nombre del estadio" required>
          <div class="form-group">
            <label for="nombre">Volumen:</label>
            <input type="text" class="form-control" id="volumen" name="volumen" placeholder="Ingresa el nombre del estadio" required>
          </div>
          <div class="form-group">
            <label for="nombre">Titulo:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa el nombre del estadio" required>
          </div>
          <div class="form-group">
            <label for="nombre">Subtitulo:</label>
            <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Ingresa el nombre del estadio" required>
          </div>
          <div class="form-group">
            <label for="nombre">Numero:</label>
            <input type="text" class="form-control" id="numero" name="numero" placeholder="Ingresa el nombre del estadio" required>
          </div>
          <div class="form-group">
            <label for="nombre">Clave:</label>
            <input type="text" class="form-control" id="clave" name="clave" placeholder="Ingresa el nombre del estadio" required>
          </div>
          <div class="form-group">
            <label for="nombre">Directorio
              :</label>
            <input type="text" class="form-control" id="directorio" name="directorio" placeholder="Ingresa el nombre del estadio" required>
          </div>
          <div class="form-group">
            <label for="nombre">Editorial:</label>
            <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Ingresa el nombre del estadio" required>
          </div>
         
              <label for="">Agregar imagen:</label>
            <input type="file" class="form-control" id="portada" name="portada" placeholder="ARTICULO" required>
          <button type="submit" class="btn btn-primary">Guardar</button>

        </form>
  
        
    </div>
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/moment.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.es.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.es.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   <script type="text/javascript">
    $(function () {
                $('#datetimepicker1').datetimepicker({language: 'es'});
            })
    </script>
<?php 