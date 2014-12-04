
<?php 
require_once 'config.php';
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
if(isset($_GET['ID']) and isset($_GET['me'])){
 $idgeneral=$_GET['ID'];
 $tabla=$_GET['me'];

 if($tabla==1){
 	$Eliminacion=mysqli_query($conexion,"DELETE FROM usuarios WHERE IdCliente='$idgeneral'");
header('Location:../Admin/usuario.php');
 }

  if($tabla==2){
 	$Eliminacion=mysqli_query($conexion,"DELETE FROM productos WHERE IdProducto='$idgeneral'");
 	header('Location:../Admin/productos.php');
 }

 if($tabla==3){
 $Eliminacion=mysqli_query($conexion,"DELETE FROM proveedores WHERE IdProveedor='$idgeneral'");
 header('Location:../Admin/proveedores.php');
 }

 if($tabla==4){
 	$Eliminacion=mysqli_query($conexion,"DELETE FROM sugerencias WHERE IdSugerencia='$idgeneral'");
 	header('Location:../Admin/sugerencias.php');
 }

 if($tabla==5){
 	$Eliminacion=mysqli_query($conexion,"DELETE FROM ventas WHERE IdVenta='$idgeneral'");
 	header('Location:../Admin/ventas.php');
 }

 



	
	function RecargarProductos(){
	
	}
	function RecargarProveedores(){
	
	}
	function RecargarSugerencias(){
	
	}
	function EliminarVentas(){
	
	}

	}else{
		die('La operacion no puede ser realizada, Ya no Existen elementos registrados en: ERROR 0xT');	
	}
?>
