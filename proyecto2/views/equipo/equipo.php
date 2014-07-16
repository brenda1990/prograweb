<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
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
    $equipoC = new EquipoController();
    $equipoC->insertaEquipo($_POST);
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
                 <input type="file" id="escudo" name="escudo" required>
            <p><input type="submit" class="btn btn-default" value="Guardar"></p>

          </form>
          
        </div>
    </div>

<?php