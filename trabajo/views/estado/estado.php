<?php 
    include ('../../libs/security.php');
    include ('../layouts/header.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Estado.php');
    include ('../../controllers/siteController/ControllerEstado.php');
    include ('../../libs/Er.php');
    $estadoC = new ControllerEstado();
  if (isset($_POST['nombre'])) {
    $estadoC->insertaEstado($_POST,$_FILES);
  } 


   

?>
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

<link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="shortcut icon" href="icono.ico">
        <body background="banderas.jpg">

<div class="container">
     <div class="row">
         <div class="col-md-12">
           <h1 class="text-center"> 
            <span class="glyphicon glyphicon-arrow-up"><span> REGISTRO ESTADO
            </h1>
          </div>
       </div>
       <div class="row">
         <div class="col-md-4"> 
              <?php
              if($estadoC->muestra_errores){
                  ?>
                  <div class="alert alert-danger"> 
                    <?php

                  foreach ($estadoC->errores as $value) {
                         echo "<p>error: $value</p>";
                  } 
                  ?>
                </div>            
    
            <?php
               
              }
              ?>
              <body background="estado.jpg">
             <form method="POST" id="formulari" role="form" enctype="multipart/form-data">
                <div class="form-group" id="formulario" name="formulario">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                </div>
                <div class="form-group" id="integer" name="integer">
                  <label for="nombre">Pais:</label>
                       <?php echo $estadoC->getDropDown2 ('pais', 'idpais','idpais'); ?>
                </div>
              <button type="submit" class="btn btn-primary">Guardar</button>
              </form>
  </div>
  </div>
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
    $(function () {
        $('#formulario').bootstrapValidator({
        fields: {
            nombre: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'Necesarios 6 caracteres minimos'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The username can only consist of alphabetical, number and underscore'
                    }
                }
            },
        }
    });  
  });
</script>
<?php