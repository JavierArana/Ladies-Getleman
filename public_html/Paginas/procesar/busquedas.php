
<?php 
require_once 'config.php';
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$paginaretorno=$_POST['ubicacion'];
$a=0;
$b=200;
$genero=$_POST['genero'];
$marca=$_POST['busqueda'];
if(isset($_POST['nombre'])){
	$nombre=$_POST['nombre'];
	$busqueda ="SELECT * FROM PRODUCTOS WHERE genero='$genero' and nombre='$nombre' and marca='$marca'";


}else{
$busqueda ="SELECT * FROM PRODUCTOS WHERE genero='$genero'  and marca='$marca'";
}


header('Location:'.$paginaretorno.'?consultabusqueda='.$busqueda)
?>


