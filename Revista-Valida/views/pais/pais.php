<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Pais.php');
  include ('../../controllers/PaisController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');


  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $paisC = new PaisController();
    $paisC->insertaPais($_POST);
  }
   
?>

    <div class="row">
      <div class="col-md-1"> </div>
      <div class="col-md-9">
        <h2>PAIS</h2> 
        <form method="POST" id="form_pais" role="form">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del pais">
          </div>
          <div class="form-group">
            <label for="bandera">Bandera</label>
            <input type="file" id="bandera" name="bandera" required>
          </div>

          <div class="form-group">
            <label for="id_continente">Continente:</label>
            <select id="id_continente" name="id_continente" class="form-control" required>
              <option value="" disabled selected>Seleccionar</option>
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