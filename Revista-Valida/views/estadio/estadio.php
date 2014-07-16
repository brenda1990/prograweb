<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Estadio.php');
  include ('../../controllers/EstadioController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');


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
<?php include ('../layouts/footer.php'); ?>