<?php
require_once 'config.php';
 session_start();
if(isset($_POST['sesion'])){
	$sesion=$_POST['sesion'];
	if($sesion==1)
		session_destroy();
	header("Location: ../../Index.php");
}

 if(isset($_POST['usuario']) && isset($_POST['pass'])){
 	$nick=$_POST['usuario'];
 	$pass=$_POST['pass'];
 	$contra="password('$pass')";
 $conexion = mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos );
 if(mysqli_connect_errno()){//Comprobacion de error en la conexion
	die("No se pudo realizar la conexion a la base de datos!");
}
 $res=mysqli_query($conexion,"select * from usuarios where nickname='$nick' and contra=$contra");
 if($lector=mysqli_fetch_array($res)){
 	//echo '<script>Alert("Datos correctos!")</script>';
 	$_SESSION['inicio']='ok';
 	header("Location: ../admin.php");
 }else{
 	echo "Datos incorrectos!";
 	//header("Location: ../../Index.php");
 }
} 
 ?>