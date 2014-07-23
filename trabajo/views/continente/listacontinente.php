<?php 
session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Continente.php');
    include ('../../controllers/siteController/ControllerContinente.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');

	$continenteC = new ControllerContinente();
	
?>	
<div class=row>
	<body background="brazil14_fondo.jpg">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<h2 class="text-center">Lista De Continentes</h2>
			<?php $continenteC->show_grid(); ?>
		</div>
		<div class="col-md-2">
		</div>
</div>
<?php include ('../layouts/footer.php'); ?>