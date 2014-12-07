<?php
require_once 'config.php';
if(isset($_POST['pagina'])){
$paginaRetorno=$_POST['pagina'];

 session_start();
if(isset($_POST['sesion']) && isset($_POST['cerrarsesion'])){
	$sesion=$_POST['sesion'];
	$cerrarsesion=$_POST['cerrarsesion'];
	if($sesion==1)
		session_destroy();
	//header("Location: ../../Index.php");
	header('Location: '.$cerrarsesion);
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
header('Location: '.$paginaRetorno.'?nickname='.$nombreusuario);
 	}else{
 		if($lector[0]=='admin'){
 		$nombreusuario=$lector[1];
header('Location: ../Admin/admin.php'.'?nickname='.$nombreusuario);
 		} 
 	}
 	
 }else{
 		$resul=0;
 		header('Location: '.$paginaRetorno.'?resul='.$resul);
 //header('Location: ../../Index.php'.'?resul='.$resul);
 }
} 
}
 ?>