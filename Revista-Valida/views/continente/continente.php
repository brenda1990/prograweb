<?php  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Continente.php');
  include ('../../controllers/ContinenteController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $continenteC = new ContinenteController();
    $continenteC->insertaContinente($_POST);
  }  

?>


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


<?php include ('../layouts/footer.php'); ?>