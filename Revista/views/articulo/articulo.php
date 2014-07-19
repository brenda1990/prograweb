<?php  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Articulo.php');
  include ('../../controllers/ArticuloController.php');
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
    $articuloC = new ArticuloController();
    $articuloC->insertaArticulo($_POST,$_FILES);

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
       <h2>REGISTRA ARTICULO</h2> 
        <br/>  
        <br/>
        <form method="POST" id="form_continente" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="ARTICULO" required>
          </div>
          <br />
         <div class="form-group">
            <label for="nombre">Resumen:</label>
            <input type="text" class="form-control" id="resumen" name="resumen" placeholder="ARTICULO" required>
          </div>
          <br />
          <div class="form-group">
            <label for="abreviatura">Abstract:</label>
            <input type="text" class="form-control" id="abstract" name="abstract" placeholder="Ingresa la abreviatura" required />
          </div>
           <div class="form-group">
            <label for="nombre">Introduccion:</label>
            <input type="text" class="form-control" id="introduccion" name="introduccion" placeholder="ARTICULO" required>
          </div>
          <div class="form-group">
            <label for="nombre">Metodologia:</label>
            <input type="text" class="form-control" id="metodologia" name="metodologia" placeholder="ARTICULO" required>
          </div>
          <div class="form-group">
            <label for="nombre">Contenido:</label>
            <input type="text" class="form-control" id="contenido" name="contenido" placeholder="ARTICULO" required>
          </div>
          <br />
          <div class="form-group">
            <label for="nombre">Fecha de Creacion:</label>
            <input type="text" class="form-control" id="fecha_creacion" name="fecha_creacion" placeholder="ARTICULO" required>
          </div>
          <div class="form-group">
            <label for="nombre">Archivo PDF:</label>
            <input type="file" class="form-control" id="archivo_pdf" name="archivo_pdf" placeholder="ARTICULO" required>
          </div>
          <div class="form-group">
            <label for="nombre">id estatus:</label>
            <input type="text" class="form-control" id="id_status" name="id_status" placeholder="ARTICULO" required>
          </div>
          <div class="form-group">
            <label for="nombre">Concluciones:</label>
            <input type="text" class="form-control" id="conclusiones" name="conclusiones" placeholder="ARTICULO" required>
          </div>
          <div class="form-group">
            <label for="nombre">Agradecimientos:</label>
            <input type="text" class="form-control" id="agradecimientos" name="agradecimientos" placeholder="ARTICULO" required>
          </div>
          <div class="form-group">
            <label for="nombre">Referencias:</label>
            <input type="text" class="form-control" id="referencias" name="referencias" placeholder="ARTICULO" required>
          </div>
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