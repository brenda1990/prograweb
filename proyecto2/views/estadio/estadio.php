<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Estadio.php');
  include ('../../controllers/EstadioController.php');
  include ('../../libs/Er.php');
  include ('../encabezado_inte/header.php');


  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $estadioC = new EstadioController();
    $estadioC->insertaEstadio($_POST);
  } 

?>
    <div class="row">
      <div class="col-md-1"> </div>
      <div class="col-md-9">
        <h2>ESTADIO</h2> 
        <form method="post" id="form_estadio" role="form">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del estadio" required>
          </div>

          <div class="form-group">
            <label for="id_ciudad">Ciudad:</label>
            <select id="id_ciudad" name="id_ciudad" class="form-control" required>
              <option value="" disabled selected >Seleccionar</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>  
         


          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>

      <div class="col-md-2"></div>



    </div>
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
<?php 