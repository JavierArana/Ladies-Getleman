<?php 
require_once 'config.php';
class consultar{
public function consultarUsuarios(){
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = mysqli_query($conexion, "select * from usuarios");

while($fila = mysqli_fetch_array($consulta)){
	static $identificador= 1;
echo "<tr>
		<td>$fila[0]</td>
		<td>$fila[1]</td>
		<td>$fila[2]</td>  
		<td>$fila[3]</td> 
		<td>$fila[4]</td>
		<td>$fila[5]</td>
		<td>$fila[6]</td>
		<td>$fila[7]</td>
		<td>$fila[8]</td>
		<td>$fila[9]</td> 
        <td>
	   
		<a href='../procesar/eliminar.php?ID=$fila[0] &me=1'><img class='imagen' src='../../img/usuario_Borrar.png' ></a>
       
		<a href='modusuario.php?ID=$fila[0]&me=1'><img class='imagen' src='../../img/usuario_editar.png'></a>
		</td>	
	</tr>";

}
mysqli_close($conexion);
mysqli_free_result($consulta);
}


#----------------------------------------------consulta de productos------------------------------------------
public function consultarProductos(){
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = mysqli_query($conexion, "select * from productos");

while($fila = mysqli_fetch_array($consulta)){
	static $identificador= 2;
echo "<tr>
		<td>$fila[0]</td>
		<td>$fila[1]</td>
		<td>$fila[2]</td>
		<td>$fila[3]</td>
		<td>$fila[4]</td>
		<td>$fila[5]</td>
		<td>$fila[6]</td>
		<td>$fila[7]</td>
		<td>$fila[8]</td>
		
		
        <td>
			<a href='../procesar/eliminar.php?ID=$fila[0] &me=2'><img class='imagen' src='../../img/usuario_Borrar.png' ></a>
       
		<a href='modproductos.php?ID=$fila[0]&me=1'><img class='imagen' src='../../img/usuario_editar.png'></a>
		</td>	
	</tr>";


}



mysqli_close($conexion);
mysqli_free_result($consulta);
}

#------------------------------------------------------------------------------------------------------------







#----------------------------------------------consulta de proveedores-----------------------
public function consultarProveedores(){
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = mysqli_query($conexion, "select * from proveedores");

while($fila = mysqli_fetch_array($consulta)){
echo "<tr>
		<td>$fila[0]</td>
		<td>$fila[1]</td>
		<td>$fila[2]</td>
		<td>$fila[3]</td>
		<td>$fila[4]</td>
		<td>$fila[5]</td>
		<td>$fila[6]</td>
	
		
        <td>
		<a href='../procesar/eliminar.php?ID=$fila[0] &me=3'><img class='imagen' src='../../img/usuario_Borrar.png' ></a>
       
		<a href='modproveedores.php?ID=$fila[0]&me=1'><img class='imagen' src='../../img/usuario_editar.png'></a>
		</td>	
	</tr>";


}



mysqli_close($conexion);
mysqli_free_result($consulta);
}


#----------------------------------------------------------------------------------------


#------------------------consulta de sugerencias--------------------------

public function consultarSugerencias(){
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = mysqli_query($conexion, "select * from sugerencias");

while($fila = mysqli_fetch_array($consulta)){
echo "<tr>
		<td>$fila[0]</td>
		<td>$fila[1]</td>
		<td>$fila[2]</td>
		<td>$fila[3]</td>
		
	
		
        <td>
			<a href='../procesar/eliminar.php?ID=$fila[0] &me=4'><img class='imagen' src='../../img/usuario_Borrar.png' ></a>
       
		<a href='modsugerencia.php?ID=$fila[0]&me=1'><img class='imagen' src='../../img/usuario_editar.png'></a>
		</td>	
	</tr>";


}



mysqli_close($conexion);
mysqli_free_result($consulta);
}




#------------------------------------------------------------------------

#------------------------------------consulta de ventas----------------------
public function consultarVentas(){
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = mysqli_query($conexion, "select * from ventas");

while($fila = mysqli_fetch_array($consulta)){
echo "<tr>
		<td>$fila[0]</td>
		<td>$fila[1]</td>
		<td>$fila[2]</td>
		<td>$fila[3]</td>
		<td>$fila[4]</td>
		<td>$fila[5]</td>
		<td>$fila[6]</td>
		
	
		
        <td>
		<a href='../procesar/eliminar.php?ID=$fila[0] &me=5'><img class='imagen' src='../../img/usuario_Borrar.png' ></a>
       
		<a href='modventas.php?ID=$fila[0]&me=1'><img class='imagen' src='../../img/usuario_editar.png'></a>
		</td>	
	</tr>";


}



mysqli_close($conexion);
mysqli_free_result($consulta);
}


function eliminar(){
	$IdCliente=$_GET['IdCliente'];
	
	$query="DELETE FROM usuarios WHERE IdCliente='$IdCliente'";
	
	$resultado=$mysqli->query($query);
}

#---------------------------------------------------------------------
public function consultarArticulos(){
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$a=1;
$b=9;
$consulta = mysqli_query($conexion, "select * from  productos limit '$a','b'");
while($fila = mysqli_fetch_array($consulta)){
echo "
<section  class='base'>
	<article>
    	<figure>
        	<img  src='../fotos/$fila[7]' alt='Caballero/1' onclick='abrirImagen();'/>
        	<figcaption>Marca: $fila[1] <br>Costo: $ $fila[5]</figcaption>
   		 </figure>
	</article>
</section>
";

}
mysqli_close($conexion);
mysqli_free_result($consulta);


}

#---------------------------------------------------------------------
public function consultarArticuloDesc(){
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);

$consulta = mysqli_query($conexion, "select * from  productos where IdProducto=$idproducto");
while($fila = mysqli_fetch_array($consulta)){
	session_start();
 	$_SESSION['idproducto']=$fila['0'];
echo "
<section  class='base'>
	<article>
    	<figure>
        	<img  src='../fotos/$fila[7]' alt='Caballero/1' onclick='abrirImagen();'/>
        	<figcaption>Marca: $fila[1] <br>Costo: $ $fila[5]</figcaption>
   		 </figure>
	</article>
</section>
";

}
mysqli_close($conexion);
mysqli_free_result($consulta);


}

}
?>