<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Integrante.php');
  include ('../../controllers/IntegranteController.php');
  include ('../../libs/Er.php');
  include ('../encabezado_inte/header.php');


  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $integranteC = new IntegranteController();
    $integranteC->insertaIntegrante($_POST);
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


        <p><a class="btn btn-primary btn-lg" role="button" id="boton1">Ver Formularios &raquo;</a></p>


    <div class="row">

          <div class="col-md-4" id="formulario2">
          <h2 id="integrante">Integrante</h2>
          <form method="POST" id="form_integrante" role="form">
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del integrante" required>
            </div>

            <div class="form-group">
              <label for="apellido">Apellido:</label>
              <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresa el apellido del integrante" required>
            </div>

            <div class="form-group">
              <label for="peso">Peso:</label>
              <input type="text" class="form-control" id="peso" name="peso" placeholder="Ingresa el peso del integrante" required>
            </div>

            <div class="form-group">
              <label for="estatura">Estatura:</label>
              <input type="text" class="form-control" id="estatura" name="estatura" placeholder="Ingresa la estatura del integrante" required>
            </div>

            <div class="form-group">
              <label for="edad">Edad:</label>
              <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingresa la edad del integrante" required>
            </div>

            <div class="form-group">
              <label for="foto">Foto:</label>
              <input type="file" id="foto" name="foto" required>
            </div>

            <div class="form-group">
              <label for="id_equipo">Equipo:</label>
              <select id="id_equipo" name="id_equipo" class="form-control" required>
                <option value="" disabled selected>Seleccionar</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>

            <p><a class="btn btn-default" href="#" role="button" id="boton2">Entrenador &raquo;</a></p>
            <p><a class="btn btn-default" href="#" role="button" id="boton3">Jugador &raquo;</a></p>  
            <!--</div>-->
            <div id="formulario3">
              <h2>Tipo de integrante</h2>
            <div class="form-group" id="form_jugador">
              <h3>Jugador</h3>
              <div class="form-group">
                <label for="numero">numero:</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Ingresa el numero del jugador" required>
              </div>  

              <div class="form-group">
                <label for="id_posicion">Posici&oacute;n:</label>
                <select id="id_posicion" name="id_posicion" class="form-control" required>
                  <option value="" disabled selected>Seleccionar</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>



            <div class="form-group" id="form_entrenador">
              <h3>Entrenador</h3>
              
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
            </div> 
            </div>
            <p><input type="submit" class="btn btn-default" value="Guardar"></p>

          </form>          
       </div>
      </div>



<?php 