<?php 
    include ('../../libs/security.php');
    include ('../layouts/header.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../libs/Er.php');
?>
	<body background="fondo.jpg">
   <div="container">
	<div class="row" align="center">
		<div class="col-md-1" >
			
			<label></label>
		</div>
		<div class="col-md-3" >
			
		</div>

		<div class="col-md-3">
			
		</div>

		<div class="col-md-3">
			
		</div>
		<div class="col-md-1" >
			<label></label>
		</div>
	</div>
	<br/><br/><br/>

	<div class="row" align="center">
	<div class="col-md-1" >
			<label></label>
		</div>
		<div class="col-md-3" >
			<label>REGISTRA CONTINENTE</label>
			<a href="../continente/continente.php"><img src="boton4.jpg"></a>
		</div>

		<div class="col-md-3">
			<label>REGISTRA PAIS</label>
			<a href="../pais/pais.php"><img src="boton4.jpg"></a>
		</div>

		<div class="col-md-3">
			<label>REGISTRA ESTADO</label>
			<a href="../estado/estado.php"><img src="boton4.jpg"></a>
		</div>
		<div class="col-md-1" >
			<label></label>
		</div>
	</div>
</div>

<?php include ('../layouts/footer.php'); ?>