<?php 
  session_start();
  include ('../encabezado_inte/header.php');
  /*
  cabecera para empezar a estructurar la pagina web pega el header descarga una pagina completa del header */

?>
 <!-- Bootstrap -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrapValidator.min.css"/>

    <script type="text/javascript" src="js/jquery.min.map.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!--Either use the compressed version (recommended in the production site)-->
    <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>

    <!--Or use the original one with all validators included-->
    <script type="text/javascript" src="js/bootstrapValidator.js"></script>

<script>
$(document).ready(function() {
    
        $('#form1').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            numero: {
                validators: {
                    integer: {
                        message: 'Este no es un valor no entero'
                    }
                }
            }
        }
    }); 
});
</script>
     <!-- Required CSS -->

<style type="text/css">
/* Override feedback icon position */
.form-horizontal .has-feedback .input-group .form-control-feedback {
    top: 0;
    right: -30px;
}
</style>

    
  </head>
  <body>
  <div class="container">

      
    <div class="row" align="center">
      <div class="col-md-6"><br/>
      <label>REGISTRAR JUGADOR</label>
 
          <form id="form1">

        <div class="form-group">
            <label>Numero</label>

            <input type="text" class="form-control" name="numero" />
        </div>     
        </form>
      <div class="btn-group">
  <button type="button" class="btn btn-default">Resgistrar Jugardor</button>
</div>
  </div>
   </div>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/moment.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.es.js"></script>
    <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <?ph