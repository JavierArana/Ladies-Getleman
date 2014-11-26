
<html >
<head>
	<meta charset="UTF-8">
	       <link rel="stylesheet" type="text/css" href="../Estilos/foundation.css">
	    <link rel="stylesheet" type="text/css" href="../Estilos/estilo2.css">

		<script type="text/javascript" src="../js/vendor/modernizr.js"></script>	

<script>
      $(document).foundation();
</script>
	<title>Consulta de Proveedores</title>
	
</head>
<body >
<center>


<div class="row">
<div class="row2">
<h3>Consulta de Proveedores</h3>
</div>
</div>
<div class="row">
<div >
<table>
<thead>
	<tr>
		<th>IdProveedor</th>
		<th>nombre</th>
		<th>direccion</th>
		
		<th>telefono</th>
		<th>email</th>
		<th>tipoProducto</th>
		<th>cantidad</th>
	<th>Operaciones</th>
	</tr>
</thead>
<tbody>
<?php 

require_once 'procesar/consultar.php';
$con = new consultar();
$con->consultarProveedores();
 ?>


</tbody>
</table>

</div>	
</div>

</center>
</body>
</html>