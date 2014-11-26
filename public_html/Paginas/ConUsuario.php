
<html >
<head>
	<meta charset="UTF-8">
	      <link rel="stylesheet" type="text/css" href="../Estilos/foundation.css">
	    <!--<link rel="stylesheet" type="text/css" href="../Estilos/estilo2.css">-->



	<title>Consulta de usuario</title>
	
</head>
<body >
<center>


<div class="row">
<div class="row2">

<h3>Consulta de usuario</h3>

</div>
</div>
<div class="row">
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
</body>
</html>