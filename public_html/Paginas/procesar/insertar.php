<?php 
$sql = 'insert into ';
$paginaRetorno = '';
$resultadoRetorno = 0;

if(isset($_POST['tabla'])){

	$tabla = $_POST['tabla'];

	$sql = $sql.$tabla.' values(';


//------------------------------------TABLA USUARIOS ----------------------------------
	if($tabla == 'usuarios'){
		if(isset($_POST['nombre']) && isset($_POST['fecha']) && isset($_POST['sexo']) && isset($_POST['nick']) && isset($_POST['email'])
		 && isset($_POST['contra'])  && isset($_POST['tel'])  && isset($_POST['calle']) && isset($_POST['numext']) && isset($_POST['col'])
		 && isset($_POST['ciudad']) && isset($_POST['estado'])){

			$nombre = $_POST['nombre'];
			$fecha = $_POST['fecha'];
			$sexo = $_POST['sexo'];
			$nick = $_POST['nick'];
			$email = $_POST['email'];
			$contra = $_POST['contra'];
			$tel = $_POST['tel'];
			$direccion=($_POST['calle'].' '.$_POST['numext'].' '.$_POST['col'].' '.$_POST['ciudad'].' '.$_POST['estado']);
			//$direccion=$_POST['calle']+$_POST['numext']+$_POST['col']+$_POST['ciudad']+$_POST['estado'];
			//$direccion = $_POST['calle'.'numext'.'col'.'ciudad'.'estado'];
			$sql = $sql."'0','$nombre','$fecha','$sexo','$nick','$email',password('$contra'),'$tel','$direccion')";				

		$paginaRetorno = 'Registro.php';
			//$paginaRetorno = $archivo;
		}else{
			die('Error en datos: ERROR 0xU');	
		}

	}else
//-------------------------------------TABLA  PRODUCTOS------------------------------------	
	if($tabla == 'usuarios'){
		if(isset($_POST['nick']) && isset($_POST['pass']) && isset($_FILES['foto'])){


$extensionArchivo  =  substr($_FILES['foto']['name'], strrpos($_FILES['foto']['name'],'.'));

			$nick = $_POST['nick'];
			$pass = $_POST['pass'];
			$archivo =$nick.$extensionArchivo;
			$sql = $sql."'$nick',password('$pass'),'$archivo')";
		     move_uploaded_file($_FILES['foto']['tmp_name'],'../fotos/'.$archivo);
				

		$paginaRetorno = 'regUsuario.php';
			//$paginaRetorno = $archivo;
		}else{
			die('Error en datos: ERROR 0xU');	
		}

	}else

	if($tabla == 'examenes'){
//if(FALSE)
if(isset($_POST['Id']) && isset($_POST['Nick'])
	&& isset($_POST['Unidad']) && isset($_POST['Estado'])
	&& isset($_POST['FechaInicio']) && isset($_POST['FechaCierre']))
{
	$id= $_POST['Id'];
	$nick= $_POST['Nick'];
	$unidad= $_POST['Unidad'];
	$estado= $_POST['Estado'];
	$fechaInicio= $_POST['FechaInicio'];
	$fechaCierre= $_POST['FechaCierre'];	
$sql = $sql."'$id','$nick',$unidad,'$estado','$fechaInicio','$fechaCierre')";

$paginaRetorno = 'regExamenes.php';
}else{
	die('Error en datos: ERROR 0xE');
}
	}
//----------------------------TABLA PROVEEDORES ---------------------------------------------
if($tabla == 'examenes'){
//if(FALSE)
if(isset($_POST['Id']) && isset($_POST['Nick'])
	&& isset($_POST['Unidad']) && isset($_POST['Estado'])
	&& isset($_POST['FechaInicio']) && isset($_POST['FechaCierre']))
{
	$id= $_POST['Id'];
	$nick= $_POST['Nick'];
	$unidad= $_POST['Unidad'];
	$estado= $_POST['Estado'];
	$fechaInicio= $_POST['FechaInicio'];
	$fechaCierre= $_POST['FechaCierre'];	
$sql = $sql."'$id','$nick',$unidad,'$estado','$fechaInicio','$fechaCierre')";

$paginaRetorno = 'regExamenes.php';
}else{
	die('Error en datos: ERROR 0xE');
}
	}


//----------------------------TABLA SUGERENCIAS ---------------------------------------------
if($tabla == 'examenes'){
//if(FALSE)
if(isset($_POST['Id']) && isset($_POST['Nick'])
	&& isset($_POST['Unidad']) && isset($_POST['Estado'])
	&& isset($_POST['FechaInicio']) && isset($_POST['FechaCierre']))
{
	$id= $_POST['Id'];
	$nick= $_POST['Nick'];
	$unidad= $_POST['Unidad'];
	$estado= $_POST['Estado'];
	$fechaInicio= $_POST['FechaInicio'];
	$fechaCierre= $_POST['FechaCierre'];	
$sql = $sql."'$id','$nick',$unidad,'$estado','$fechaInicio','$fechaCierre')";

$paginaRetorno = 'regExamenes.php';
}else{
	die('Error en datos: ERROR 0xE');
}
	}

//----------------------------TABLA VENTAS---------------------------------------------
if($tabla == 'examenes'){
//if(FALSE)
if(isset($_POST['Id']) && isset($_POST['Nick'])
	&& isset($_POST['Unidad']) && isset($_POST['Estado'])
	&& isset($_POST['FechaInicio']) && isset($_POST['FechaCierre']))
{
	$id= $_POST['Id'];
	$nick= $_POST['Nick'];
	$unidad= $_POST['Unidad'];
	$estado= $_POST['Estado'];
	$fechaInicio= $_POST['FechaInicio'];
	$fechaCierre= $_POST['FechaCierre'];	
$sql = $sql."'$id','$nick',$unidad,'$estado','$fechaInicio','$fechaCierre')";

$paginaRetorno = 'regExamenes.php';
}else{
	die('Error en datos: ERROR 0xE');
}
	}



//SINO......

}else{
//ERROR POR NO ESPECIFICAR LA TABLA
die('La operacion no puede ser realizada: ERROR 0xT');	
}

require_once 'config.php';

$conexion = mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos );
$resultadoRetorno = 1;
$res  = mysqli_query($conexion, $sql) or $resultadoRetorno=0;

header('Location: ../'.$paginaRetorno.'?res='.$resultadoRetorno);

?>