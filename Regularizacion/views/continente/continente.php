<?php 
  session_start();
   include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Continente.php');
  include ('../../controllers/siteController/ControllerContinente.php');
  include ('../../libs/Er.php');
  include ('../encabezado_inte/header.php');
     echo "<pre>datos:";
     print_r($_POST);
     echo "</pre>";

  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $continenteC = new ContinenteController();
    $continenteC->insertaContinente($_POST);

  } 

   
  /*
  cabecera para empezar a estructurar la pagina web pega el header descarga una pagina completa del header */

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


  <div class="container">
     <div class="row">
      <h2>REGISTRA CONTINENTE</h2> 
        <br/>  
        <br/>
        <form method="POST" id="form_continente" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del continente" required>
          </div>
          <br />
          <br />
          
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>      
       
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
<?ph