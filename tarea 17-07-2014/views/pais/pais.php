<?php  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Pais.php');
  include ('../../controllers/siteController/PaisController.php');
  include ('../../libs/Er.php');
  include ('../encabezado_inte/header.php');
     $paisC = new PaisController();
  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
   
    $paisC->insertaPais($_POST,$_FILES);

  } 


   

?>
<link href="css/bootstrap.min.css" rel="stylesheet">

<div class="container">
     <div class="row">
         <div class="col-md-12">
           <h1 class="text-center"> 
            <span class="glyphicon glyphicon-arrow-up"><span> Registro Pais
            </h1>
          </div>
       </div>
       <div class="row">
         <div class="col-md-4"> 
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
             <form method="POST" id="formulario" role="form" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                </div>
                <div class="form-group">
                  <label for="nombre">ID CONTINENTE:</label>
                  <input type="text" class="form-control" id="idcontinente" name="idcontinente" placeholder="id continente">
                </div>
                      <label for="">Agregar bandera:</label>
                      <input type="file" class="form-control" id="bandera" name="bandera" placeholder="ARTICULO" required>
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
        $('#formulari').bootstrapValidator({
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
        $(document).ready(function() {
    $('#imabandera').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            bandera: {
                validators: {
                    file: {
                        extension: 'jpg,png',
                        type: 'image/jpg,image/png',
                        maxSize: 2048 * 1024,   // 2 MB
                        message: 'The selected file is not valid'
                    }
                }
            }
        }
    });
});
  });
</script>
<?ph