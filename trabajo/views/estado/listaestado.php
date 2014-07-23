<?php 
session_start();
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Estado.php');
     include ('../../models/Continente.php');
    include ('../../controllers/siteController/ControllerEstado.php');
   //  include ('../../controllers/siteController/ControllerPais.php');
    include ('../../libs/Er.php');
	include ('../layouts/header.php');

	$estadoC = new ControllerEstado();
	//$paisC = new ControllerPais();
	
?>	
<div class=row>
	<body background="vista.jpg">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<h2 class="text-center">LISTA DE ESTADO</h2>
			<?php $estadoC ->show_grid(); ?>
			<form method="post" action="listaestado.php">
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
	$query="select * from estado, pais where continente.idpais=pais.idestado";
	$resultado=mysql_query($query,$con);
	$total=mysql_num_rows($resultado);
	echo "<table><tr><td>id</td><td>Nombre</td><td>Apellidos</td><td>";
	while($dato=mysql_fetch_array($resultado)){
     echo "<tr>";
     echo "<td>".$dato['idestado']."</td>";
     echo "<td>".$dato['nombre']."</td>";
     echo "<td>".$dato['pais']."</td>";
     echo "</tr>";
	}
	echo "</table>";
	echo "Total de Personas Registradas : $total";
}
?>

<?php include ('../layouts/footer.php'); ?>