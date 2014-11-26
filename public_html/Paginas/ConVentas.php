
<html >
<head>
	<meta charset="UTF-8">
	       <link rel="stylesheet" type="text/css" href="../Estilos/foundation.css">
	    <link rel="stylesheet" type="text/css" href="../Estilos/estilo2.css">

		<script type="text/javascript" src="../js/vendor/modernizr.js"></script>	

<script>
      $(document).foundation();
</script>
	<title>Consulta de Ventas</title>
	
</head>
<body >
<center>


<div class="row">
<div class="row2">
<h3>Consulta de Ventas</h3>
</div>
</div>
<div class="row">
<div >
<table>
<thead>
	<tr>
		<th>idVenta</th>
		<th>idCliente</th>
		<th>idProducto</th>
		
		<th>FechaV</th>
		<th>CostoU</th>
		<th>Cantidad</th>
		<th>CostoT</th>
	
		<th>Operaciones</th>
	</tr>
</thead>
<tbody>
<?php 

require_once 'procesar/consultar.php';
$con = new consultar();
$con->consultarVentas();
 ?>


</tbody>
</table>

</div>	
</div>

</center>
</body>
</html>