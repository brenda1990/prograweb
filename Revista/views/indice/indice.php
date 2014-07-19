<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Indice.php');
  include ('../../controllers/IndiceController.php');
  include ('../../libs/Er.php');
  include ('../encabezado_inte/header.php');
  


  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $indiceC = new IndiceController();
    $indiceC->insertaIndice($_POST);
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
          <h2 id="equipo">REGISTRA INDICE</h2>
          <form  method="post" accion="" id="form_equipo"> 
        	
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del equipo">
            </div>
            <div class="form-group">
              <label for="nombre">Numero:</label>
              <input type="text" class="form-control" id="numero" name="nombre" placeholder="Ingresa el nombre del equipo">
            </div>

            <div class="form-group">
				
				        <label for="id_pais">Revista:</label>
				        
				            <select id="id_pais" name="id_revista" class="form-control" required>
				                <option value="" disabled selected>Seleccionar id Revistas</option>
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
    </div>

<?php