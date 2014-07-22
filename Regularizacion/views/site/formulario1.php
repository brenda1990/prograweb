<?php  
  include ('../../../libs/adodb5/adodb-pager.inc.php');
  include ('../../../libs/adodb5/adodb.inc.php');
  include ('../../../models/Conexion.php');
  include ('../../../models/Modelo.php');
  include ('../../../models/Alumno.php');
  include ('../../../controllers/siteController/AlumnoController.php');
  include ('../../../libs/Er.php');
 // include ('../encabezado_inte/header.php');
     $alumnoC = new AlumnoController();
  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
   
    $alumnoC->insertaAlumno($_POST,$_FILES);

  } 


   

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTRAR REVISTA</title>

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
        $('#imagen').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            portada: {
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
        $('#integerf').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            numeroc: {
                validators: {
                    integer: {
                        message: 'Este no es un valor no entero'
                    }
                }
            }
        }
    }); 
       $('#numerov').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            numerot: {
                validators: {
                    integer: {
                        message: 'Este no es un valor no entero'
                    }
                }
            }
        }
    });   
    $('#datetimePicker').datetimepicker();

    $('#uploadForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            fecha: {
                validators: {
                    date: {
                        format: 'MM/DD/YYYY h:m A',
                        message: 'EL DATO NO ES VALIDO'
                    }
                }
            }
        }
    });

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
      <label>REGISTRAR REVISTA</label>
 
          <form id="form1">

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombrer" id="nombrer" />
        </div>
        <div class="form-group">
            <label>Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos"/>
        </div>
        <div class="form-group">
            <label>Direccion</label>
            <input type="text" class="form-control" name="direccion" id="dicreccion"/>
        </div>

        </form>
    
        <div class="form-group" id="integerf">      
        
                        <label class="col-lg-3 control-label">Numero de Control</label>
                        <div class="col-cmd-6">
                            <input type="text" class="form-control" name="numeroc" id="numeroc" />
                        </div>
                
                </div>

                 <div class="form-group" id="numerov">      
        
                        <label class="col-lg-3 control-label">Numero de Telefono</label>
                        <div class="col-cmd-6">
                            <input type="text" class="form-control" name="numerot" />
                        </div>
                
                </div>
        
      <div class="form-group" id="uploadForm">
        <label class="col-lg-3 control-label">Fecha</label>
        
            <div class="input-group date" id="datetimePicker">
                <input type="text" class="form-control" name="fecha" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            <span class="help-block">MM/DD/YYYY h:m A</span>
           
        </div>
     
      <form id="imagen" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-lg-3 control-label">Foto</label>
        <div class="col-lg-9">
            <input type="file" class="form-control" name="foto" id="foto" />
        </div>
    </div>
</form> 
</div>  
<button type="submit" class="btn btn-default">Registrar</button>  
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
                $('#datetimepicker1').datetimepicker({language: 'es'});
            });
            $(function () {
                $('#datetimepicker1').datetimepicker({
                   language: 'es'
                });
            });
         $(function () {
            

        $('#form1').bootstrapValidator({
        fields: {
            nombrer: {
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
              apellidos: {
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
            direccion: {
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
            editorial: {
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
            titulo: {
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
           subtitulo: {
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
  $(function () {
        $('#form2').bootstrapValidator({
        fields: {
            username: {
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
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            }
        }
    });
  });
  $(function () {
        $('#form3').bootstrapValidator({
        fields: {
            username: {
                message: 'The username is not valid',
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
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            }
        }
    });
  }); 
   $(function () {
        $('#form4').bootstrapValidator({
        fields: {
            nombre: {
                message: 'The username is not valid',
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
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            }
        }
    });
  });
        </script>

  </body>
</html>
<?php