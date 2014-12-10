<?php
 require_once 'config.php';
 $conexion = mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos );
 if(mysqli_connect_errno()){//Comprobacion de error en la conexion
    die("No se pudo realizar la conexion a la base de datos!");
}else{

 $resultadoRetorno = 0;
$idgeneral=$_POST['id'];
$nombretabla=$_POST['tabla'];
$modificacion='update ';
$modificacion=$modificacion.'$nombretabla';
$modificacion=$modificacion.' set ';

#-------------------------------------------------------usuarios---------------------------------------------------------------------------------------------------------------------------------------------------------------------------
if($nombretabla == 'usuarios'){
    if(isset($_POST['nombre']) && isset($_POST['tipousuario']) && isset($_POST['fecha']) && isset($_POST['sexo']) && isset($_POST['nick']) && isset($_POST['email'])
         && isset($_POST['contra'])  && isset($_POST['tel'])   && isset($_POST['direccion'])){

    $nombre=$_POST['nombre'];
    $tipousuario=$_POST['tipousuario'];
    $fecha=$_POST['fecha'];
    $sexo= $_POST['sexo'];
    $nick=$_POST['nick'];
    $email=$_POST['email'];

    $contra=$_POST['contra'];
    

    $tel=$_POST['tel'];
    $direccion=$_POST['direccion'];
    //Actualizacion
    $modificacion= "UPDATE $nombretabla SET nombre='$nombre',tipousuario='$tipousuario',fechanac='$fecha',sexo='$sexo', nickname='$nick',email='$email',contra=password('$contra'),telefono='$tel', direccion='$direccion' WHERE IdCliente='$idgeneral'";
    //$sql="UPDATE '$nombretabla' SET nombre=''$nombre''";
    echo "UPDATE $nombretabla SET nombre='$nombre',fechanac='$fecha',sexo='$sexo', nickname='$nick',email='$email',contra='$contra',telefono='$tel', direccion='$direccion' WHERE IdCliente='$idgeneral'";

}else{
    die('Error en datos: no se envio la informacion correcta'); 
            mysqli_close($conexion);

}
header('Location:../Admin/usuario.php');
}
#--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

#----------------------------------------------------productos-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
if($nombretabla == 'productos'){
    if(isset($_POST['marca']) && isset($_POST['nombre']) && isset($_POST['talla']) && isset($_POST['genero']) && isset($_POST['costo']) && isset($_POST['existencia'])
     && isset($_POST['descripcion'])){




	 $marca = $_POST['marca'];
	 $nombre = $_POST['nombre'];
     $talla = $_POST['talla'];
	 $genero = $_POST['genero'];
	 $costo = $_POST['costo'];
	 $existencia = $_POST['existencia'];
			//imagen
	 $descripcion=$_POST['descripcion'];
	 //Actualizacion
     $modificacion= "UPDATE $nombretabla SET marca='$marca',nombre='$nombre',talla='$talla',genero='$genero',costo='$costo',existencia='$existencia',descripcion='$descripcion' WHERE IdProducto='$idgeneral'";
     }else{
        die('Error en datos: no se envio la informacion correcta');
        mysql_close($conexion);
     }
     header('Location:../Admin/productos.php');
 }
#----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
#------------------------------------------------Proveedores------------------------------------------------------------------------------------------------------------------------------------------------------
if($nombretabla == 'proveedores'){
    if(isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['direccion']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['tipoproducto']) 
        && isset($_POST['cantidad'])){

     $nombre = $_POST['nombre'];
	 $direccion = $_POST['direccion'];
	 $tel = $_POST['tel'];
	 $email = $_POST['email'];
	 $tipoproducto = $_POST['tipoproducto'];
	 $cantidad = $_POST['cantidad'];
	 //Actualizacion
	 $modificacion="UPDATE $nombretabla SET nombre='$nombre',direccion='$direccion',telefono='$tel',email='$email',tipoproducto='$tipoproducto',cantidad='$cantidad' WHERE IdProveedor='$idgeneral'";
     }else{
        die('Error en datos: no se envio la informacion correcta');
        mysql_close($conexion);
     }
     //echo "UPDATE $nombretabla SET nombre='$nombre',direccion='$direccion',telefono='$tel',email='$email',tipoproducto='$tipoproducto',cantidad='$cantidad' WHERE IdProveedor='$idgeneral'";
    header('Location:../Admin/proveedores.php');
}
#------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
#------------------------------------------------Sugerencias-------------------------------------------------------------------------------------------------------------------------------------------------------
if($nombretabla=='sugerencias'){
if(isset($_POST['sugerencia'])){

$descripcion=$_POST['sugerencia'];
 $modificacion="UPDATE $nombretabla SET sugerencia='$descripcion' WHERE IdSugerencia='$idgeneral'";
}else{
    die('Error en datos: no se envio la informacion correcta');
    mysql_close($conexion);
}
header('Location:../Admin/sugerencias.php');
}
#------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
#------------------------------------------------------Ventas------------------------------------------------------------------------------------------------------------
if($nombretabla=='ventas'){
if(isset($_POST['fechaventa']) && isset($_POST['costouni']) && isset($_POST['cantidad']) && isset($_POST['costototal'])){

$fechaventa=$_POST['fechaventa'];
$costouni=$_POST['costouni'];
$cantidad=$_POST['cantidad'];
$costototal=$_POST['costototal'];
$modificacion="UPDATE $nombretabla SET fechaventa='$fechaventa',costouni='$costouni',cantidad='$cantidad',costototal='$costototal' WHERE IdVenta='$idgeneral'";
}else{
    die('Error en datos: no se envio la informacion correcta');
    mysql_close($conexion);
}
header('Location:../Admin/ventas.php');
}
#----------------------------------------------------------------------------------------------------------------------------------------------------------------------
#------------------------------------------usuarioadmin-------------------------------------------------------------------------------------------------------------

if($nombretabla == 'usuarioactivoadmin'){
    if(isset($_POST['nombre']) && isset($_POST['tipousuario']) && isset($_POST['fecha']) && isset($_POST['sexo']) && isset($_POST['nick']) && isset($_POST['email'])
         && isset($_POST['contra'])  && isset($_POST['tel'])   && isset($_POST['direccion'])){

    $nombre=$_POST['nombre'];
    $tipousuario=$_POST['tipousuario'];
    $fecha=$_POST['fecha'];
    $sexo= $_POST['sexo'];
    $nick=$_POST['nick'];
    $email=$_POST['email'];

    $contra=$_POST['contra'];
    

    $tel=$_POST['tel'];
    $direccion=$_POST['direccion'];
    //Actualizacion
    $modificacion= "UPDATE usuarios SET nombre='$nombre',tipousuario='$tipousuario',fechanac='$fecha',sexo='$sexo', nickname='$nick',email='$email',contra=password('$contra'),telefono='$tel', direccion='$direccion' WHERE IdCliente='$idgeneral'";
    //$sql="UPDATE '$nombretabla' SET nombre=''$nombre''";
    echo "UPDATE $nombretabla SET nombre='$nombre',fechanac='$fecha',sexo='$sexo', nickname='$nick',email='$email',contra='$contra',telefono='$tel', direccion='$direccion' WHERE IdCliente='$idgeneral'";
$resultadoRetorno=1;
}else{
    die('Error en datos: no se envio la informacion correcta'); 
            mysqli_close($conexion);
            $resultadoRetorno=0;

}


 header('Location:../UsuarioAdmin.php?res='.$resultadoRetorno);
}

#-------------------------------------------Usuariocliente-------------------------------------------------------------------------------------------------------------


if($nombretabla == 'usuarioactivo'){
    if(isset($_POST['nombre']) &&  isset($_POST['fecha']) && isset($_POST['sexo']) && isset($_POST['nick']) && isset($_POST['email'])
         && isset($_POST['contra'])  && isset($_POST['tel'])   && isset($_POST['direccion'])){

    $nombre=$_POST['nombre'];
    $tipousuario=$_POST['tipousuario'];
    $fecha=$_POST['fecha'];
    $sexo= $_POST['sexo'];
    $nick=$_POST['nick'];
    $email=$_POST['email'];

    $contra=$_POST['contra'];
    

    $tel=$_POST['tel'];
    $direccion=$_POST['direccion'];
    //Actualizacion
    $modificacion= "UPDATE usuarios SET nombre='$nombre',fechanac='$fecha',sexo='$sexo', nickname='$nick',email='$email',contra=password('$contra'),telefono='$tel', direccion='$direccion' WHERE IdCliente='$idgeneral'";
    //$sql="UPDATE '$nombretabla' SET nombre=''$nombre''";
    

}else{
    die('Error en datos: no se envio la informacion correcta'); 
            mysqli_close($conexion);

}
$resultadoRetorno = 1;
 mysqli_query($conexion, $modificacion);

 header('Location:../UsuarioAdmin.php?res='.$resultadoRetorno);
}
#-------------------------------------------------------------------------------------------------------------------------------------------------------------



 mysqli_query($conexion, $modificacion);

}

?>