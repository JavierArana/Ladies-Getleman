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
 $res=mysqli_query($conexion,"select tipousuario,nickname,IdCliente from usuarios where nickname='$nick' and contra=$contra");
 if($lector=mysqli_fetch_array($res)){
 	session_start();
 	$_SESSION['inicio']='ok';
 	$nickname=$lector[1];
 	$idusuario=$lector[2];
 	$_SESSION['id']=$idusuario;
 	$_SESSION['usuario'] = $nickname;  
 	if($lector[0]=='cliente'){
 		
header('Location: '.$paginaRetorno);
 	}else{
 		if($lector[0]=='admin'){
header('Location: ../Admin/admin.php');
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