<?php 
  session_start();
  include ('../layouts/header.php');
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
			<label>LISTA DE CONTINENTES</label>
			<a href="../continente/continente.php"><img src="boton_vista.jpg"></a>
		</div>

		<div class="col-md-3">
			<label>LISTA DE PAISES</label>
			<a href="../pais/pais.php"><img src="boton_vista.jpg"></a>
		</div>

		<div class="col-md-3">
			<label>LISTA DE ESTADOS</label>
			<a href="../estado/estado.php"><img src="boton_vista.jpg"></a>
		</div>
		<div class="col-md-1" >
			<label></label>
		</div>
	</div>
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