<?php 
  session_start();

  /*
  cabecera para empezar a estructurar la pagina web pega el header descarga una pagina completa del header */
?>
<link rel="shortcut icon" href="dia.ico">
<body background="boton.jpg">
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
  <div class="col-md-12">
 <div class="page-header">
  <h1>JOYAS ANABEL<small>    Lo Mejor En Calidad     </small></h1>
</div>
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#">Inicio</a></li>
  <li><a href="#">Registra Revista</a></li>
  <li><a href="#">Registra Autor</a></li>
  <li><a href="#">Registra Indice</a></li>
  <li><a href="#">Registra Articulo</a></li>
</ul>
  </div>
  </div>
  <div class="row">
    <br/>
    <br/>
    
  <div class="col-md-4">
    <br/>
    <br/>
    <blockquote>
  <p>Registro de Para Guardar en BD</p>
</blockquote>
    <div class="btn-group-vertical">
   <button type="button" class="btn btn-default">Registra Autor</button>
  <button type="button" class="btn btn-default">Registra Revista</button>
   <button type="button" class="btn btn-default">Registra Indice</button>
  <button type="button" class="btn btn-default">Registra Articulo</button>
</div>
  </div>
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
</div>
    
 <address>
  <strong>Twitter, Inc.</strong><br>
  795 Folsom Ave, Suite 600<br>
  San Francisco, CA 94107<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>

<address>
  <strong>Full Name</strong><br>
  <a href="mailto:#">first.last@example.com</a>
</address>
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
