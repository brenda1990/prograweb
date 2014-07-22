<?php 
  session_start();
  include ('../layouts/header.php');
  /*
  cabecera para empezar a estructurar la pagina web pega el header descarga una pagina completa del header */

?>
<script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>
        <link rel="stylesheet" href="source/jquery.fancybox.css" type="text/css" media="screen" />
       
        <link rel="../ima/banderas.jpg" href="favicon.ico">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/justified-nav.css" rel="stylesheet">



        <script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>
        <link rel="stylesheet" href="source/jquery.fancybox.css" type="text/css" media="screen" />



      <div class="jumbotron">
        <h1>Hola, Mundo!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
           <div class="jumbotron">
                <h1>Marketing stuff!</h1>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
                <p><a class="ejemplo" href="formulario1.html">Formulario de Registra Revista</a></p>
         </div>

     <script type="text/javascript">
            $(document).ready(function() {
                $(".ejemplo").fancybox({
                    'autoScale': false,
                    'transitionIn': 'none',
                    'transitionOut': 'none',
                    'width': 680,
                    'height': 450,
                    'type': 'iframe'
                });
            });
        </script>
          <script type="text/javascript">
            $(document).ready(function() {
                $(".ejemplo").fancybox({
                    'autoScale': false,
                    'transitionIn': 'none',
                    'transitionOut': 'none',
                    'width': 680,
                    'height': 450,
                    'type': 'iframe'
                });
            });
        </script> 

  <?ph