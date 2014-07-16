<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Equipo.php');
  include ('../../controllers/EquipoController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');


  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $equipoC = new EquipoController();
    $equipoC->insertaEquipo($_POST);
  }
   
?>


      <div class="row">
        <div class="col-md-4">
          <h2 id="equipo">Equipo</h2>
          <form  method="post" accion="" id="form_equipo"> 
        	
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del equipo">


            </div>

            <div class="form-group">
				
				        <label for="id_pais">Pais:</label>
				        
				            <select id="id_pais" name="id_pais" class="form-control" required>
				                <option value="" disabled selected>Seleccionar</option>
                				<option>1</option>
                				<option>2</option>
                				<option>3</option>
                				<option>4</option>
                				<option>5</option>
				            </select>

            </div>

            <div class="form-group" id="seleccionarch">
              <label for="escudo">Escudo:</label>
              
            </div>

            <p><input type="submit" class="btn btn-default" value="Guardar"></p>

          </form>
             <input type="file" id="escudo" name="escudo" required>
        </div>
    </div>

<?php include ('../layouts/footer.php'); ?>