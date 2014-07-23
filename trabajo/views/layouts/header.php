<?php 
  define('BASEURL','http:/prograweb/trabajo');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>TRABAJO</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
    <link href="../css/micss.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox-buttons.css?v=1.0.5" />
    <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox-thumbs.css?v=1.0.7" />

  <!-- Fin de Librerias -->

  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-defautl navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-collapse collapse">
            
          <ul class="nav navbar-nav navbar-right">
          <?php if(!isset($_SESSION['user'])){ ?>
            <li><a href="<?php echo BASEURL; ?>/views/site/login.php">
              <span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
             <?php }else{ ?>
            <li><a href="<?php echo BASEURL; ?>/views/site/logout.php">
              <span class="glyphicon glyphicon-log-out"></span> Logout</a>
            </li>
            <?php } ?>
          </ul>
          

        </div><!--/.nav-collapse -->
      </div>

    </div>
  
    <div class="container theme-showcase" role="main">


