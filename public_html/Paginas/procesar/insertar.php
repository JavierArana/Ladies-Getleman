<?php 
 $sql = 'insert into ';
 $paginaRetorno = '';
 $resultadoRetorno = 0;
 if(isset($_POST['tabla'])){

 	$tabla = $_POST['tabla'];
	$sql = $sql.$tabla.' values('; 
 
 
//------------------------------------TABLA USUARIOS ----------------------------------
	if($tabla == 'usuarios'){
		if(isset($_POST['nombre']) && isset($_POST['tipousuario']) && isset($_POST['fecha']) && isset($_POST['sexo']) && isset($_POST['nick']) && isset($_POST['email'])
		 && isset($_POST['contra'])  && isset($_POST['tel'])  && isset($_POST['calle']) && isset($_POST['numext']) && isset($_POST['col'])
		 && isset($_POST['ciudad']) && isset($_POST['estado']) && isset($_POST['pagina'])){
			$tipousuario=$_POST['tipousuario'];
			$nombre = $_POST['nombre'];
			$fecha = $_POST['fecha'];
			$sexo = $_POST['sexo'];
			$nick = $_POST['nick'];
			$email = $_POST['email'];
			$contra = $_POST['contra'];
			$tel = $_POST['tel'];
			$direccion=$_POST['calle'].' '.$_POST['numext'].' '.$_POST['col'].' '.$_POST['ciudad'].' '.$_POST['estado'];
			$pagina=$_POST['pagina'];
			//$direccion=$_POST['calle']+$_POST['numext']+$_POST['col']+$_POST['ciudad']+$_POST['estado'];
			//$direccion = $_POST['calle'.'numext'.'col'.'ciudad'.'estado'];
			$sql = $sql."'0','$nombre','$tipousuario','$fecha','$sexo','$nick','$email',password('$contra'),'$tel','$direccion')";	
			mysqli_close($conexion);			

		$paginaRetorno = $pagina;
			//$paginaRetorno = $archivo;
		}else{
			die('Error en datos: no se envio la informacion correcta');	
			mysqli_close($conexion);
		}

	}else
//-------------------------------------TABLA  PRODUCTOS------------------------------------	
	if($tabla == 'productos'){
		if(isset($_POST['marca']) && isset($_POST['nombre']) && isset($_POST['talla']) && isset($_POST['genero']) && isset($_POST['costo']) 
			&& isset($_POST['existencia']) && isset($_FILES['foto']) && isset($_POST['descripcion']) && isset($_POST['pagina'])){

 $extensionArchivo  =  substr($_FILES['foto']['name'], strrpos($_FILES['foto']['name'],'.'));
			$marca = $_POST['marca'];
			$nombre = $_POST['nombre'];
			$talla = $_POST['talla'];
			$genero = $_POST['genero'];
			$costo = $_POST['costo'];
			$existencia = $_POST['existencia'];
			 require_once 'config.php';
			$conexion = mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos );
			$consulta = mysqli_query($conexion, "select * from productos order by IdProducto desc LIMIT 1");
			if($fila = mysqli_fetch_array($consulta)){
				$nfoto=$fila[0]+1;
			}else{
				$nfoto=1;
			}
			$archivo =$nombre.$nfoto.$extensionArchivo;
			$descripcion=$_POST['descripcion'];
			$pagina=$_POST['pagina'];
			$sql = $sql."'0','$marca','$nombre','$talla','$genero','$costo','$existencia','$archivo','$descripcion')";
		     move_uploaded_file($_FILES['foto']['tmp_name'],'../fotos/'.$archivo);
		$paginaRetorno = $pagina;
		mysqli_close($conexion);
		}else{
			die('Error en datos: no se envio la informacion correcta'); 
			mysqli_close($conexion);	
		}

	}else
//----------------------------TABLA PROVEEDORES ---------------------------------------------
 if($tabla == 'proveedores'){
 if(isset($_POST['nombre']) && isset($_POST['direccion']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['tipoproducto'])
		 && isset($_POST['cantidad']) && isset($_POST['pagina'])){
 			$pagina=$_POST['pagina'];
			$nombre = $_POST['nombre'];
			$direccion = $_POST['direccion'];
			$tel = $_POST['tel'];
			$email = $_POST['email'];
			$tipoproducto = $_POST['tipoproducto'];
			$cantidad = $_POST['cantidad'];
			$sql = $sql."'0','$nombre','$direccion','$tel','$email','$tipoproducto','$cantidad')";	
			$paginaRetorno = $pagina;
		mysqli_close($conexion);
		}else{
			die('Error en datos: no se envio la informacion correcta'); 
			mysqli_close($conexion);	
		}


	}else
//----------------------------TABLA SUGERENCIAS ---------------------------------------------
 if($tabla == 'sugerencias'){

 	 session_start();
 	$idcliente=$_SESSION['id'];
 	 $idproducto=$_SESSION['idproducto'];


 if(isset($_POST['sugerencia']) && isset($_POST['idproducto'])&& isset($_POST['pagina'])){
    $pagina=$_POST['pagina'];
	$sugerencia= $_POST['sugerencia'];
	$idproducto=$_POST['idproducto'];	
 $sql = $sql."'0','$idcliente','$idproducto','$sugerencia')";
 $paginaRetorno = $pagina;
mysqli_close($conexion);
		}else{
			die('Error en datos: no se envio la informacion correcta'); 
			mysqli_close($conexion);	
		}
	}else
//----------------------------TABLA VENTAS---------------------------------------------
 if($tabla == 'examenes'){
 
 if(isset($_POST['Id']) && isset($_POST['Nick'])
	&& isset($_POST['Unidad']) && isset($_POST['Estado'])
	&& isset($_POST['FechaInicio']) && isset($_POST['FechaCierre'])){
	$id= $_POST['Id'];
	$nick= $_POST['Nick'];
	$unidad= $_POST['Unidad'];
	$estado= $_POST['Estado'];
	$fechaInicio= $_POST['FechaInicio'];
	$fechaCierre= $_POST['FechaCierre'];	
 $sql = $sql."'$id','$nick',$unidad,'$estado','$fechaInicio','$fechaCierre')";
mysqli_close($conexion);
 $paginaRetorno = 'regExamenes.php';
 }else{
	die('Error en datos: ERROR 0xE');
	mysqli_close($conexion);
 }
	}
 
 

 //SINO......
 }else{
 //ERROR POR NO ESPECIFICAR LA TABLA
 die('La operacion no puede ser realizada: ERROR 0xT');	
 }

 require_once 'config.php';

 $conexion = mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos );
 if(mysqli_connect_errno()){//Comprobacion de error en la conexion
	die("No se pudo realizar la conexion a la base de datos!");
}
 $resultadoRetorno = 1;
 $res  = mysqli_query($conexion, $sql) or $resultadoRetorno=0;

 header('Location: '.$paginaRetorno.'?res='.$resultadoRetorno);

?>