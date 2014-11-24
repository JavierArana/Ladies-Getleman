<center background="#000">
<?php 
require_once 'config.php';
class consultar{



public function consultarUsuarios(){
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$consulta = mysqli_query($conexion, "select * from usuarios");

while($fila = mysqli_fetch_array($consulta)){
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
		<img class='imagen' src='../img/usuario_Borrar.png'  name='Elim' onclick='eliminar()'>
		<img class='imagen' src='../img/usuario_editar.png'>
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
echo "<tr>
		<td>$fila[0]</td>
		<td>$fila[1]</td>
		<td>$fila[2]</td>
		<td>$fila[3]</td>
		<td>$fila[4]</td>
		<td>$fila[5]</td>
		<td>$fila[6]</td>
		<td>$fila[7]</td>
		
		
        <td>
		<img class='imagen' src='../img/usuario_Borrar.png'  name='Elim' onclick='eliminar()'>
		<img class='imagen' src='../img/usuario_editar.png'>
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
		<img class='imagen' src='../img/usuario_Borrar.png'  name='Elim' onclick='eliminar()'>
		<img class='imagen' src='../img/usuario_editar.png'>
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
		<img class='imagen' src='../img/usuario_Borrar.png'  name='Elim' onclick='eliminar()'>
		<img class='imagen' src='../img/usuario_editar.png'>
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
		<img class='imagen' src='../img/usuario_Borrar.png'  name='Elim' onclick='eliminar()'>
		<img class='imagen' src='../img/usuario_editar.png'>
		</td>	
	</tr>";


}



mysqli_close($conexion);
mysqli_free_result($consulta);
}

public function consultarLogin($nick,$pass){
$res = false;
$conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
$comandoSQL = sprintf("select * from usuarios where idnick=%s and password=%s", 
mysqli_real_escape_string($nick),mysqli_real_escape_string($pass)
	);
$consulta = mysqli_query($conexion, $comandoSQL);

if($fila = mysqli_fetch_array($consulta)){
$res = true;
}

mysqli_close($conexion);
mysqli_free_result($consulta);

return $res;
}
function eliminar(){
	$IdCliente=$_GET['IdCliente'];
	
	$query="DELETE FROM usuarios WHERE IdCliente='$IdCliente'";
	
	$resultado=$mysqli->query($query);
}

#---------------------------------------------------------------------




}
?>
</center>