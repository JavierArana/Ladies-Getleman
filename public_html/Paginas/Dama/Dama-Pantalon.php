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
      <link rel="stylesheet" href="../../Estilos/estilo.css">
      <link rel="stylesheet" href="../../Estilos/articulos.css">
      <script type="text/javascript" src="../../JavaScript/validacionCampos.js"></script>
      <script type="text/javascript" src="../../JavaScript/funciones.js"></script>
       <script type="text/javascript" src="../../JavaScript/lluvia.js"></script>
      <title>Ladies & Gentlemen </title>
   </head>
   <body>
      <section id="previa" >
         <section id="contenedorPrevia">
            <section id="contenedorImg">
               <img id="imgfull" src="">
               
            </section>
            <section id="contenedorArt">
               <article class="descripcionArt">
                  <section class="contenedorbtn">
                     <input type="button" value="X"  id="btncerrar" class="bnt_sig_ant" onclick="cerrarImg();" /> 
                  </section>
                  <br><br><br>
                  <p id="texto">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <select name="talla">
                     <option>Chica</option>
                     <option selected="value">Mediana</option>
                     <option>Grande</option>
                  </select>
                 <a href="../Compra.php"><img src="../../Imagenes/s.png" id="comprar"></a>
               </article>
            </section>
         </section>
      </section>
      <section id="cajaPrincipal">
         <section id="contenido">
            <section id="seccion2">
               <nav>
                  <br>
                  <center>
                     <ul id="menu">
                        <li class="opcionmenu"><a href="../../Index.php">Home</a></li>
                        <li class="opcionmenu"><a href="../Caballero/Caballero.php">Caballero</a></li>
                        <li class="opcionmenu"><a href="../Dama/Dama.php">Dama</a></li>
                        <li class="opcionmenu"><a href="../Ninio/Ninios.php">Niños</a></li>
                        <li class="opcionmenu"><a href="../Ninia/Ninias.php">Niñas</a></li>
                     </ul>
                  </center>
               </nav>
            </section>
            <section id="seccion3">
            <?php
  session_start();
  if(!isset($_SESSION['inicio'])){
  ?>  
            <form action="../procesar/login.php" method="post">
<input type="hidden" name="pagina" value="../Dama/Dama-Pantalon.php">
               <table  class="tabla">
             <tr>
               <td>Usuario</td>&emsp13;
               <td><input name="usuario" id="usuario" class="textbox" type="text" placeholder="Nick" onkeypress="return usuario(event)" onpaste="return false"/></td>
               &emsp13;<td><button>Entrar</td></button>
               
             </tr> 
             <tr>
               <td >Password</td>
               <td ><input name="pass" id="pass" class="textbox" type="password" placeholder="*********"></td>
               <td><a id="registrar" href="../Registro.php">Registrarse</a></td>
             </tr>
           </table>
            </form>  
        <?php 
}else{
        ?>
<form action="../procesar/login.php" method="post">
<input type="hidden" name="pagina" value="../Dama/Dama-Pantalon.php">
<input type="hidden" name="cerrarsesion" value="../Dama/Dama-Pantalon.php">
 <table  class="tabla">
             <tr>
               <td>Bienvenido:</td>
               <td><img class="login" alt="usuario" src="../../Imagenes/usuario.png"></td>
    <?php
    session_name();
    $nickname=$_SESSION['usuario'];
    $idusuario=$_SESSION['id'];
    echo "<td>$nickname</td>"; ?>
                <td><a href="../Usuario.php"><img id="login" alt="config" src="../../Imagenes/config.png"></a></td> &emsp13; 
               <td> &emsp13; <button name="sesion" value="1">Cerrar Sesion</button></td>
               </tr>
               </table>
</form>
<?php
}
?>
        </section>
            <section id="seccionArticulos">
               <section class="contenedorbtn">
                  <input type="button" value="<"  class="bnt_sig_ant" />        
               </section>
               <div>
     <?php 
  require_once '../procesar/config.php';
 $conexion =  mysqli_connect(config::$servidor, config::$usuario, config::$password, config::$baseDeDatos);
//$a=1;
//$b=9;
//$consulta = mysqli_query($conexion, "select * from productos where nombre='Accesorio' and genero='Dama' limit $a,$b");
$consulta = mysqli_query($conexion, "select * from productos where nombre='Pantalon' and genero='Dama'");
while($fila = mysqli_fetch_array($consulta)){
echo "
<section  class='base'>
  <article>
      <figure>
          <img  src='../fotos/$fila[7]' alt='producto/1' onclick='abrirImagen();'/>
          <figcaption>Marca: $fila[1] <br>Costo: $ $fila[5]</figcaption>
       </figure>
  </article>
</section>
";
}
mysqli_close($conexion);
mysqli_free_result($consulta);
                      ?>               
               </div>
               <section class="contenedorbtn">
                  <input type="button" value=">" class="bnt_sig_ant"/>    
               </section>
            </section>
         </section>
         <aside>
            <p id="titulo">Ladies & Gentlemen</p>
            <br>
            <img  id="logo" src="../../Imagenes/general.jpg" >
            <ul id="opcion">
               <li class="articulosCaballero"><a href="Dama-Blusas.php">Blusas</a></li>
               <li class="articulosCaballero"><a href="Dama-Jeans.php">Jeans</a></li>
               <li class="articulosCaballero"><a href="Dama-Pantalon.php" style="color:red; font-size:1.5em;">Pantalon</a></li>
               <li class="articulosCaballero"><a href="Dama-Vestidos.php">Vestidos</a></li>
               <li class="articulosCaballero"><a href="Dama-Faldas.php">Faldas</a></li>
               <li class="articulosCaballero"><a href="Dama-Short.php">Short</a></li>
               <li class="articulosCaballero"><a href="Dama-Accesorios.php">Accesorios</a></li>
            </ul>
             <input type="search" name="busqueda" id="busqueda" placeholder="Buscar" onkeypress="return sololetrasconespacios(event)" onpaste="return false"> <input id="botonBuscar" type="submit" value="Buscar">
         </aside>
      </section>
            <?php 
if(isset($_GET['resul'])){
    $resul=$_GET['resul'];
    if($resul==0){
echo "<script type='text/javascript'>
alert('El usuario y/o password son incorrectos!!');
  </script>";
}}?> 
   </body>
</html>
