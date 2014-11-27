
<html >
<head>
	<meta charset="UTF-8">
	      <link rel="stylesheet" type="text/css" href="../Estilos/foundation.css">
	    <!--<link rel="stylesheet" type="text/css" href="../Estilos/estilo2.css">-->



	<title>Consulta de usuario</title>
	
</head>
<body >

<section class="Caja">

<div class="row">
<div class="row2">
<center>
<h3>Consulta de usuario</h3>
</center>
</div>

</div>
<div class="link">
<p ><a href="registro.php"><h5>         Crear Nuevo Usuario</h5></a></p>
</div>
</div>
<div class="link">
<p ><a href="ConUsuario.php"><h5>         Actualizar</h5></a></p>
</div>
<center>
<div class="row" class="pruebas1">
<div >
<table>
<thead>
	<tr>
		<th>ID_Cliente</th>
		<th>Nombre</th>
		<th>Fecha_de_Nacimiento</th>
		<th>Sexo</th>
		<th>NickName</th>
		<th>email</th>
		<th>Password</th>
		<th>Telefono</th>
		<th>Direccion</th>
		<th>Operaciones</th>
	</tr>
</thead>
<tbody>
<?php 

require_once 'procesar/consultar.php';
$con = new consultar();
$con->consultarUsuarios();
 ?>


</tbody>
</table>

</div>	
</div>

</center>
</section>
</body>
</html>