<?php 
  define('BASEURL','http://localhost/verano_web/proyecto1');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FIFA</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/mi.css" rel="stylesheet">
  </head>

  <body role="document">

    <!--inicia navar -->

    <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
               <span class="glyphicon glyphicon-th"><span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-align-justify"></span>FIFA</a>
              <a class="ejemplo" href="..\equipo\equipo.php"><span class="glyphicon glyphicon-list-alt"></span>Equipo</a>
              <a class="ejemplo" href="..\articulo\continente.php"><span class="glyphicon glyphicon-list-alt"></span>Continente</a>
              <a class="ejemplo" href="..\posicion\posicion.php"><span class="glyphicon glyphicon-file"></span>Posicion</a>
              <a class="ejemplo" href="..\pais\pais.php"><span class="glyphicon glyphicon-open"></span>País</a>
              <a class="ejemplo" href="..\ciudad\ciudad.php"><span class="glyphicon glyphicon-arrow-up"></span>Cuidad</a>
              <a class="ejemplo" href="..\integrante\integrante.php"><span class="glyphicon glyphicon-paperclip"></span>Integrante</a> 
              <a class="ejemplo" href="#"><span class="glyphicon glyphicon-ok-sign"></span>Tipo Integrante</a> 
              <a class="ejemplo" href="..\estadio\estadio.php"><span class="glyphicon glyphicon-upload"></span>Estadio</a>    
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
           
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      <!-- termina navar-->

  <!-- inicia imagen-->
   <div class="container">
     
        <div class="media">
              <img width="120%" height="120%" src="imagenes/fifa.jpg" />

             </div>
  
 </div>
  <!-- termina imagen-->
   <!-- inicia menu aplicaciones-->
   <div class="container">
    
  <div class="container">  
   
        <div class="col-md-5">
 
         </div>
         <div class="col-md-7">
        
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-file"></span> Noticias
              </button>
                <button type="button" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-camera"></span> Fotos
              </button> <button type="button" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-facetime-video"></span> Videos
              </button> <button type="button" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-phone-alt"></span> Juegos
              </button> <button type="button" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-gift"></span> Actividad Social
              </button>
              </div>
         </div>
       </div>
       <hr>
       </hr>
        <div >
               <ol class="breadcrumb">
              <li><a href="#">Partidos<span class="glyphicon glyphicon-chevron-down"></span></a></li>
              <li><a href="#">Equipos<span class="glyphicon glyphicon-chevron-down"></a></li>
               <li><a href="#">Jugadores<span class="glyphicon glyphicon-chevron-down"></a></li>
              <li><a href="#">Grupos<span class="glyphicon glyphicon-chevron-down"></a></li>
              <li><a href="#">Estadisticas<span class="glyphicon glyphicon-chevron-down"></a></li>
               <li><a href="#">Premios<span class="glyphicon glyphicon-chevron-down"></a></li>
              <li><a href="#">Entradas<span class="glyphicon glyphicon-chevron-down"></a></li>
              <li><a href="#">Destino<span class="glyphicon glyphicon-chevron-down"></li>
               <li><a href="#">Organizacion<span class="glyphicon glyphicon-chevron-down"></a></li>
            </ol>
        </div>
      
      <div id="content-wrap">
      
              <div >
                <img width="100%" height="100%" src="imagenes/fondo.jpg" />
    
                <img aling="center" src="imagenes/seleccion.jpg" />
                  <h3></h3>
               
              
                 </div>
        </div>
     <hr>     
   </hr>
      <div class="col-md-8">
          <div class="row">
           <img aling="center"  src="imagenes/abajo.jpg" />
            <hr> </hr>
               <img aling="center" width="80%" height="80%" src="imagenes/iz1.jpg" />
               <hr> </hr>
               <img aling="center" width="80%" height="80%" src="imagenes/wero.jpg" />
          </div>
       </div>
       <div class="col-md-4">
          <div class="row">
              <h2>Fotos </h2>
              <hr> </hr>
           <img aling="left" width="100%" height="100%" src="imagenes/seleccion.jpg" />
            <img aling="left" width="100%" height="100%" src="imagenes/seleccion1.jpg" />
             <img aling="left" width="100%" height="100%" src="imagenes/seleccion2.jpg" />
              <img  width="100%" height="100%" src="imagenes/seleccion3.jpg" />
          </div>
       </div>
  <!-- termina menu aplicaciones-->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">

