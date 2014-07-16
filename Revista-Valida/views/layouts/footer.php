    <hr>
    <div class="row">
      <div class="col-md-12">
          <p>Programación Web</p>
      </div>

    </div>

    </div><!--/.container-->
<!--FancyBox-->
    <script>
        $(document).ready(function() {
            $(".fancyy").fancybox({
                'autoScale': false,
                'transitionIn': 'none',
                'transitionOut': 'none',
                'width': 680,
                'height': 450,
                'type': 'iframe'
            });
        });
    </script>

<!--navegacion en integrante-->
<script> 
      $(document).ready(
        function(){
          $('#formulario2').hide(); //ocultar
          $('#formulario3').hide(); //ocultar

          $('#boton1').click(
            function(){
              $('#formulario2').show('fast'); //mostrar
              $('#formulario3').show('fast'); //mostrar
              $('#form_entrenador').hide(); //ocultar
              $('#form_jugador').hide(); //ocultar
            }

            );

          $('#boton2').click(
            function(){
              $('#form_entrenador').show('fast'); //mostrar
              $('#form_jugador').hide('fast'); //mostrar
            }

            );

          $('#boton3').click(
            function(){
              $('#form_jugador').show('fast'); //mostrar
              $('#form_entrenador').hide('fast'); //mostrar
            }

            );
        }
        );
    </script>


<!--Valida el formulario equipo-->
    <script>
    $(document).ready(function() {
        $('#form_equipo').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                nombre: {
                    validators: {
                        notEmpty: {
                            message: 'El nombre es requerido.'
                        }
                    }
                },
                escudo: {
                    validators: {
                        file: {
                            extension: 'jpeg,png',
                            type: 'image/jpeg,image/png',
                            maxSize: 2048 * 1024,   // 2 MB
                            message: 'The selected file is not valid'
                        }
                    }
                }
            }
        });
    });
  </script>
<!-- valida el formulario integrante-->
  <script>
      $(document).ready(function() {
          $('#form_integrante').bootstrapValidator({
                  // Only disabled elements are excluded
                  // The invisible elements belonging to inactive tabs must be validated
                  excluded: [':disabled'],
                  feedbackIcons: {
                      valid: 'glyphicon glyphicon-ok',
                      invalid: 'glyphicon glyphicon-remove',
                      validating: 'glyphicon glyphicon-refresh'
                  },
                  fields: {
                      nombre: {
                          validators: {
                              notEmpty: {
                                  message: 'El nombre es requerido.'
                              }
                          }
                      },
                      id_pais: {
                          validators: {
                              notEmpty: {
                                  message: 'El pais es necesario'
                              }
                          }
                      },
                      apellido: {
                          validators: {
                              notEmpty: {
                                  message: 'El apellido es requerido.'
                              }
                          }
                      },
                      peso: {
                          validators: {
                              integer: {
                                  message: 'solo enteros'
                              }
                          }
                      },
                      estatura: {
                          validators: {
                              integer: {
                                  message: 'solo enteros'
                              }
                          }
                      },
                      edad: {
                          validators: {
                              integer: {
                                  message: 'solo enteros'
                              }
                          }
                      },
                      foto: {
                          validators: {
                              file: {
                                  extension: 'jpeg,png',
                                  type: 'image/jpeg,image/png',
                                  maxSize: 2048 * 1024,   // 2 MB
                                  message: 'The selected file is not valid'
                              }
                          }
                      },
                      id_equipo: {
                          validators: {
                              integer: {
                                  message: 'El pais es necesario'
                              }
                          }
                      },
                      numero: {
                          validators: {
                              integer: {
                                  message: 'El numero es necesario'
                              }
                          }
                      },



                      id_posicion: {
                          validators: {
                              notEmpty: {
                                  message: 'La posicion es necesario'
                              }
                          }
                      },
                      id_pais: {
                          validators: {
                              notEmpty: {
                                  message: 'La posicion es necesario'
                              }
                          }
                      },
                  }
              });
      });
      </script>
<!--Valida el formulario pais-->
  <script>
    $(document).ready(function() {
        $('#form_pais').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                nombre: {
                    validators: {
                        notEmpty: {
                            message: 'El nombre es requerido'
                        }
                    }
                },
                bandera: {
                          validators: {
                              file: {
                                  extension: 'jpeg,png',
                                  type: 'image/jpeg,image/png',
                                  maxSize: 2048 * 1024,   // 2 MB
                                  message: 'The selected file is not valid'
                              }
                          }
                      },
                id_continente: {
                          validators: {
                              notEmpty: {
                                  message: 'La posicion es necesario'
                              }
                          }
                      },
            }
        });
    });
    </script>
<!--Validar continente-->
<script>
$(document).ready(function() {
    $('#form_continente')
        .bootstrapValidator({
            // The disabled elements are excluded
            // Hidden elements (including the rating star) are included
            excluded: ':disabled',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                nombre: {
                    validators: {
                        notEmpty: {
                            message: 'El directorio es requerido'
                        }
                    }
                },
                
                
            }
        });
});
</script>
<!-- Valida el formulario posicion-->
<script>
$(document).ready(function() {
    $('#form_posicion').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                validators: {
                    notEmpty: {
                        message: 'El pais es necesario'
                    }
                }
            },
            abreviatura: {
                validators: {
                    notEmpty: {
                        message: 'El pais es necesario'
                    }
                }
            },
        }
    });
});
</script>

<!--Valida el formulario estadio-->
<script>
$(document).ready(function() {
    $('#form_estadio').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            Nombre: {
                validators: {
                    notEmpty: {
                        message: 'El pais es necesario'
                    }
                }
            },
            idciudad: {
                validators: {
                    notEmpty: {
                        message: 'El pais es necesario'
                    }
                }
            },
        }
    });
});
</script>
	<script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>




  </body>
</html>