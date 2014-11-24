
<?php 
require_once 'config.php';
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
 $idgeneral=$_GET['ID'];
 $metodoElegido=$_GET['me'];

 if($metodoElegido==1){
 	EliminarUsuarios();
 }elseif ($metodoElegido==2) {
 	EliminarProductos();
 }elseif($metodoElegido==3){
EliminarProveedores();
 }elseif($metodoElegido==4){
EliminarSugerencias();
 }elseif($metodoElegido==5){
EliminarVentas();
 }
	function EliminarUsuarios(){
	$Eliminacion=mysqli_query($conexion,"DELETE FROM usuarios WHERE IdCliente='$idgeneral'");
	}
	function EliminarProductos(){
	$Eliminacion=mysqli_query($conexion,"DELETE FROM productos WHERE IdProducto='$idgeneral'");
	}
	function EliminarProveedores(){
	$Eliminacion=mysqli_query($conexion,"DELETE FROM proveedores WHERE IdProveedor='$idgeneral'");
	}
	function EliminarSugerencias(){
	$Eliminacion=mysqli_query($conexion,"DELETE FROM sugerencias WHERE IdSugerencia='$idgeneral'");
	}
	function EliminarVentas(){
	$Eliminacion=mysqli_query($conexion,"DELETE FROM ventas WHERE IdVenta='$idgeneral'");
	}
	//$resultado=$conexion->conexion($consulta);
	
?>

<html background="black">
	<head>
		<title>Eliminar usuario</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($Eliminacion>0){
				?>
				
				<h1>Usuario Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="consultar.php">Regresar</a>
			
		</center>
	</body>
</html>