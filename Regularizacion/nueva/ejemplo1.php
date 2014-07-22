<?php 
  session_start();
  /*
  cabecera para empezar a estructurar la pagina web pega el header descarga una pagina completa del header */

?>
<link href="css/bootstrap.min.css" rel="stylesheet">
 <div class="container">
     <div class="row">
         <div class="col-md-12">
           <h1 class="text-center"> 
            <span class="glyphicon glyphicon-arrow-up"><span> EJEMPLO 1
            </h1>
          </div>
       </div>
       <div class="row">
         <div class="col-md-4"> 
               <form role="form" id="formulario">
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
                </div>
              </form>
              <form id="uploadForm" class="form-horizontal" enctype="multipart/form-data">
    <br/>
</form>
<form id="imabandera" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-lg-2 control-label">Bandera</label>
        <div class="col-lg-10">
            <input type="file" class="form-control" name="bandera" />
        </div>
    </div>
</form>
<button type="submit" class="btn btn-default">Registrar</button>
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
<?php