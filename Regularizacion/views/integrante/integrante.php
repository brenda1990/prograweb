<?php  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Integrante.php');
  include ('../../controllers/siteController/IntegranteController.php');
  include ('../../libs/Er.php');
  include ('../encabezado_inte/header.php');
     echo "<pre>datos:";
     print_r($_POST);
     print_r($_FILES);
     echo "</pre>";

  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $integranteC = new IntegranteController();
    $integranteC->insertaIntegrante($_POST,$_FILES);

  } 

   

?>

 <!-- Bootstrap -->
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

<script>
$(document).ready(function() {
        $('#divfoto').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            foto: {
                validators: {
                    file: {
                        extension: 'jpg',
                        type: 'image/jpg',
                        maxSize: 2048 * 1024,   // 2 MB
                        message: 'no es unaa imagen'
                    }
                }
            }
        }
    });
        $('#forpeso').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            peso: {
                validators: {
                    integer: {
                        message: 'Este no es un valor no entero'
                    }
                }
            }
        }
    });  
        $('#forestatura').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            estatura: {
                validators: {
                    integer: {
                        message: 'Este no es un valor no entero'
                    }
                }
            }
        }
    });  
            $('#foredad').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            edad: {
                validators: {
                    integer: {
                        message: 'Este no es un valor no entero'
                    }
                }
            }
        }
    });
    $('#datetimePicker').datetimepicker();


    $('#datetimePicker')
        .on('dp.change dp.show', function(e) {
            // Validate the date when user change it
            $('#uploadForm')
                // Get the bootstrapValidator instance
                .data('bootstrapValidator')
                // Mark the field as not validated, so it'll be re-validated when the user change date
                .updateStatus('meeting', 'NOT_VALIDATED', null)
                // Validate the field
                .validateField('meeting');
        });
});
</script>
 <div class="container">

      
    <div class="row" align="center">
      <div class="col-md-6"><br/>
      <label>REGISTRAR INTEGRANTE</label>
 
       <form role="form" id="formulari" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control"  id="nombre" name="nombre" />
        </div>
        <div class="form-group">
            <label>Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" />
        </div>
        
    
        <div class="form-group" >      
        
                        <label class="col-lg-3 control-label">Peso</label>
                        <div class="col-cmd-6">
                            <input type="text" class="form-control" id="peso" name="peso" />
                        </div>
                
                </div>

        <div class="form-group" >      
        
                        <label class="col-lg-3 control-label">Estatura</label>
                        <div class="col-cmd-6">
                            <input type="text" class="form-control" id="estatura" name="estatura" />
                        </div>
                
                </div>
                <div class="form-group" >      
        
                        <label class="col-lg-3 control-label">Edad</label>
                        <div class="col-cmd-6">
                            <input type="text" class="form-control" name="edad" id="edad" />
                        </div>
                
                </div>
                  <label class="col-lg-3 control-label">idEquipo</label>
                        <div class="col-cmd-6">
                            <input type="text" class="form-control" name="idequipo" id="idequipo" />
                        </div>
                
              <div class="form-group">
        <label class="col-lg-3 control-label">Foto</label>
        <div class="col-lg-9">
            <label for="">Agregar foto:</label>
                    <input type="file" class="form-control" id="foto" name="foto" placeholder="ARTICULO" required>
                     <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form> 
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
    <script type="text/javascript">
   
         $(function () {

        $('#form1').bootstrapValidator({
        fields: {
            nombre: {
                message: 'Ingrese un nombre valido',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
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
              apellido: {
                message: 'Ingrese un nombre valido',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
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