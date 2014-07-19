<?php  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Autor.php');
  include ('../../controllers/AutorController.php');
  include ('../../libs/Er.php');
  include ('../encabezado_inte/header.php');
     echo "<pre>datos:";
     print_r($_POST);
     print_r($_FILES);
     echo "</pre>";

  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $autorC = new AutorController();
    $autorC->insertaAutor($_POST,$_FILES);

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
       <h2>REGISTRA AUTOR</h2> 
        <br/>  
        <br/>
        <form method="POST" id="form_continente" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del continente" required>
          </div>
          <div class="form-group">
            <label for="nombre">Apellidos:</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingresa el nombre del continente" required>
          </div>
              <div class="form-group">
            <label for="nombre">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Ingresa el nombre del continente" required>
          </div>
          <br />
          <br />
          <label for="">Agregar imagen:</label>
            <input type="file" class="form-control" id="foto" name="foto" placeholder="ARTICULO" required>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
       

    </div>
        <div class="col-md-9">

        </div> 
    </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/moment.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.es.js"></script>
    <scrip
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
<?php 