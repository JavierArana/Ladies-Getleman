<!DOCTYPE html>
<!--
   To change this license header, choose License Headers in Project Properties.
   To change this template file, choose Tools | Templates
   and open the template in the editor.
   -->
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width">
      <title>Ladies & Gentlemen </title>
      <link rel="stylesheet" href="../Estilos/estiloHome.css">
      <link rel="stylesheet" href="../../Estilos/estiloHome.css">
      <script type="text/javascript" src="../../JavaScript/lluvia.js"></script>
      <link rel="stylesheet" href="../../Estilos/estiloAdmin.css">
      <script type="text/javascript" src="../../JavaScript/validacionCampos.js"></script>
      <script  type="text/javascript" src="../../JavaScript/funciones.js"></script>   
   </head> 
   <body>
      <section id="seccion1">
         <p id="titulo">Ladies & Gentlemen</p>
         <br>
      </section>
      <section id="seccion2">
         <nav>
            <br>
            <ul id="menu">
               <li class="opcionmenu" ><a href="productos.php">Productos</a></li>
               <li class="opcionmenu" ><a href="ventas.php">Ventas</a></li>
               <li class="opcionmenu" ><a href="proveedores.php">Proveedores</a></li>
               <li class="opcionmenu" ><a href="sugerencias.php">Sugerencias</a></li>
               <li class="opcionmenu" ><a href="usuario.php">Usuarios</a></li>
            </ul>
         </nav>
      </section>
      <?php
  session_start();
  if(!isset($_SESSION['inicio'])){
header("Location: ../../Index.php");
  }
  ?>  
  <form action="../procesar/login.php" method="post">
  <input type="hidden" name="pagina" value="../Admin/regsugerencia.php">
  <input type="hidden" name="cerrarsesion" value="../../Index.php">
 <table  class="tabla">
             <tr>
               <td>Bienvenido:</td>
               <td><img alt="usuario" width="25" src="../../Imagenes/usuario.png"></td>
    <?php
  session_name();
    $nickname=$_SESSION['usuario'];
    $idusuario=$_SESSION['id'];
    echo "<td>$nickname</td>"; ?>
                    <td><a href="modusuario.php"><img alt="config" width="25" src="../../Imagenes/config.png"></a></td> &emsp13; 
               <td> &emsp13; <button name="sesion" value="1">Cerrar Sesion</button></td>
               </tr>
               </table>
</form>

      <center>         
         <div id="regSugerencia" class="reg">
      <form id="formulario" method="post" enctype="multipart/form-data" action="../procesar/insertar.php">
      <input type="hidden" name="tabla" value="sugerencias">
       <input type="hidden" name="pagina" value="../Admin/regsugerencia.php">
               <p>Nueva Sugerencia</p><br><br>
               <div class="cajausuario">
               Id Producto:<br>
               <select name='idproducto' >
               <?php 
require_once '../procesar/config.php';
 $conexion = mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos );
 if(mysqli_connect_errno()){//Comprobacion de error en la conexion
  die("No se pudo realizar la conexion a la base de datos!");
}

$consulta = mysqli_query($conexion, "select * from productos");

while($fila = mysqli_fetch_array($consulta)){
  $idpro=$fila[0];

echo "
                <option>$idpro</option>
                <br>
               
";
} ?>
               </select>
               <br><br>
              
               Sugerencia:<br>
               <textarea class ="descripcion" name="sugerencia" rows="3" cols="38" placeholder="Descripion del articulo" onkeypress="return sololetrasconespacios(event)" onpaste="return false"> </textarea> 
                <section class="contenedorbtn">
                  <button class="btnguardar">Guardar</button>       
               </section>
               </div>
               
            </form>
         </div>
      </center>
        <?php
    if(isset($_GET['res'])){
    $resultado = $_GET['res'];  
    if($resultado==1){
    ?>
  <script type="text/javascript">
alert("La sugerencia se registro satisfactoriamente!! ");
  </script>
 <?php 
 }
 else{
 ?>
    <script type="text/javascript">
alert("Error de envio de datos... asegurese de llenar todos los campos!");
  </script>
 <?php
 }
    }
 ?> 
   </body>
</html>
