<?php 
    include ('../../libs/security.php');
    include ('../layouts/header.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Pais.php');
    include ('../../controllers/siteController/ControllerPais.php');
    include ('../../libs/Er.php');
      include ('../../libs/Fun.php');
     $paisC = new ControllerPais();
  if (isset($_POST['nombre'])) {
   
    $paisC->insertaPais($_POST,$_FILES);

  }  
?>
<body background="pais.jpg">
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
            <span class="glyphicon glyphicon-arrow-up"><span> REGISTRO PAIS
            </h1>
          </div>
       </div>
       <div class="row" >
         <div class="col-md-6" aling="center"> 
              <?php
              if($paisC->muestra_errores){
                  ?>
                  <div class="alert alert-danger"> 
                    <?php

                  foreach ($paisC->errores as $value) {
                         echo "<p>error: $value</p>";
                  } 
                  ?>
                </div>            
    
            <?php
               
              }
              ?>
              <body background="fondo.jpg">
             <form method="POST" id="formulario" role="form" enctype="multipart/form-data">
                <div class="form-group" id="formulario" name="formulario" >
                  <label for="nombre">Nombre del pais:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                </div>
                <div class="form-group" id="integer" name="integer">
                  <label for="nombre">Pais:</label>
                       <?php echo $paisC->getDropDown1 ('continente', 'idcontinente','idcontinente'); ?>
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
                   
                }
            },
        }
    });
 
     
  });
</script>
<?php