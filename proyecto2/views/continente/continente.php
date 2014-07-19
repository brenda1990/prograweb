<?php  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Continente.php');
  include ('../../controllers/ContinenteController.php');
  include ('../../libs/Er.php');
  include ('../encabezado_inte/header.php');

  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $continenteC = new ContinenteController();
    $continenteC->insertaContinente($_POST);
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
       <h2>CONTINENTE</h2> 
        <br/>  
        <br/>
        <form method="POST" id="form_continente" role="form">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del continente" required>
          </div>

          <br />
          <br />

          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
      <div class="col-md-2"></div>
      
    </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/moment.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.es.js"></script>
    <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
<?php 