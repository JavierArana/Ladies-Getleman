
<html >
<head>
	<meta charset="UTF-8">
	       <link rel="stylesheet" type="text/css" href="../Estilos/foundation.css">
	    <link rel="stylesheet" type="text/css" href="../Estilos/estilo2.css">

		<script type="text/javascript" src="../js/vendor/modernizr.js"></script>	

<script>
      $(document).foundation();
</script>
	<title>Consulta de Productos</title>
	
</head>
<body >
<center>


<div class="row">
<div class="row2">
<h3>Consulta de Productos</h3>
</div>
</div>
<div class="row">
<div >
<table>
<thead>
	<tr>
		<th>ID</th>
		<th>Marca</th>
		<th>Nombre</th>
		
		<th>talla</th>
		<th>genero</th>
		<th>Costo</th>
		<th>existencia</th>
		<th>imagen</th>
		<th>Operaciones</th>
	</tr>
</thead>
<tbody>
<?php 

require_once 'procesar/consultar.php';
$con = new consultar();
$con->consultarProductos();
 ?>


</tbody>
</table>

</div>	
</div>

</center>
</body>
</html>