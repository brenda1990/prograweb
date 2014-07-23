<?php 
session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Pais.php');
     include ('../../models/Continente.php');
    include ('../../controllers/siteController/ControllerPais.php');
     include ('../../controllers/siteController/ControllerContinente.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');

	$paisC = new ControllerPais();
	$continenteC = new ControllerContinente();
	
?>	

<div class=row>

	<body background="vista.jpg">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">

			<h2 class="text-center">LISTA DE PAIS</h2>
			<?php $paisC ->show1(); ?>			
			<form method="post" action="listapais.php">
				<input type="submit" name"mostrar" Value="Mostrar">

		    </form>

		</div>
		<div class="col-md-2">
		</div>

</div>
<?php
include("conexion.php");
$con=conectar();
if (isset($_REQUEST['mostrar'])) {
	$query="select * from ";
	$resultado=mysql_query($query,$con);
	$total=mysql_num_rows($resultado);
	echo "<table><tr><td>id</td><td>Nombre</td><td>Apellidos</td><td>";
	while($dato=mysql_fetch_array($resultado)){
     echo "<tr>";
     echo "<td>".$dato['idpais']."</td>";
     echo "<td>".$dato['nombre']."</td>";
     echo "<td>".$dato['bandera']."</td>";
     echo "</tr>";
	}
	echo "</table>";
	echo "Total de Personas Registradas : $total";
}
?>
<?php include ('../layouts/footer.php'); ?>