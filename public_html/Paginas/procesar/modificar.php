<?php
require_once('config.php');

$idgeneral=$_POST['id'];
$nombretabla=$_POST['tabla'];

#-------------------------------------------------------usuarios---------------------------------------------------------------------------------------------------------------------------------------------------------------------------
if($nombretabla == 'usuarios'){
    $consulta="SELECT *FROM '$nombretabla' WHERE IdCliente=$idgeneral";
    $nombre=$_POST['nombre'];
    $tipousuario=$_POST['tipousuario'];
    $fecha=$_POST['fecha'];
    $sexo= $_POST['sexo'];
    $nick=$_POST['nick'];
    $email=$_POST['email'];
    $contra=$_POST['contra'];
    $tel=$_POST['tel'];
    $direccion=$_POST['calle'].' '.$_POST['numext'].' '.$_POST['col'].' '.$_POST['ciudad'].' '.$_POST['estado'];
    //Actualizacion
    $modificacion= "UPDATE '$nombretabla' SET nombre=$nombre',tipousuario='$tipousuario',fechanac='$fecha',sexo='$sexo', nickname='$nick',email='$email',contra='$contra',telefono='$tel', direccion='$direccion' WHERE IdCliente='$idgeneral'";
    header('Location:../Admin/usuario.php');
}
#--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

#----------------------------------------------------productos-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
if($nombretabla == 'productos'){
	 $marca = $_POST['marca'];
	 $nombre = $_POST['nombre'];
     $talla = $_POST['talla'];
	 $genero = $_POST['genero'];
	 $costo = $_POST['costo'];
	 $existencia = $_POST['existencia'];
			//imagen
	 $descripcion=$_POST['descripcion'];
	 //Actualizacion
     $modificacion= "UPDATE '$nombretabla' SET marca='$marca',nombre='$nombre',talla='$talla',genero='$genero',costo='$costo',existencia='$existencia',descripcion='$descripcion' WHERE IdProducto='$idgeneral";
     }
#----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
#------------------------------------------------Proveedores------------------------------------------------------------------------------------------------------------------------------------------------------
if($nombretabla == 'proveedores'){
     $nombre = $_POST['nombre'];
	 $direccion = $_POST['direccion'];
	 $tel = $_POST['tel'];
	 $email = $_POST['email'];
	 $tipoProducto = $_POST['tipoProducto'];
	 $cantidad = $_POST['cantidad'];
	 //Actualizacion
	 $modificacion="UPDATE '$nombretabla' SET nombre='$nombre',direccion='$direccion',telefono='$tel',email='$email',tipoProducto='$tipoProducto',cantidad='$cantidad' WHERE IdProveedor='idgeneral'";

}
#------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
#------------------------------------------------Sugerencias-------------------------------------------------------------------------------------------------------------------------------------------------------
if($nombretabla=='sugerencias'){

}
#------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
 $conexion=mysqli_connect(config::$servidor,config::$usuario,config::$password,config::$baseDeDatos);
 if(mysqli_connect_errno()){//Comprobacion de error en la conexion
	die("No se pudo realizar la conexion a la base de datos!");
}
mysql_query($conexion,$modificacion);

?>