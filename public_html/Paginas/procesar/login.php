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
 $res=mysqli_query($conexion,"select tipousuario,nickname from usuarios where nickname='$nick' and contra=$contra");
 if($lector=mysqli_fetch_array($res)){
 	$_SESSION['inicio']='ok';
 	if($lector[0]=='cliente'){
 		$nombreusuario=$lector[1];
header('Location: ../../Index.php'.'?nickname='.$nombreusuario);
 	}else{
 		if($lector[0]=='admin'){
header("Location: ../Admin/admin.php ");
 		}
 	}
 	
 }else{
 		$resul=0;
 header('Location: ../../Index.php'.'?resul='.$resul);
 }
} 
 ?>