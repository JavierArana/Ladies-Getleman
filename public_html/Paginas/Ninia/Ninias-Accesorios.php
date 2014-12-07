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
<input type="hidden" name="pagina" value="../Ninia/Ninias-Accesorios.php">
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
<input type="hidden" name="pagina" value="../Ninia/Ninias-Accesorios.php">
<input type="hidden" name="cerrarsesion" value="../Ninia/Ninias-Accesorios.php">
 <table  class="tabla">
             <tr>
               <td>Bienvenido:</td>
               <td><img class="login" alt="usuario" src="../../Imagenes/usuario.png"></td>
    <?php
    if(isset($_GET['nickname'])){
    $nickname = $_GET['nickname']; 
    echo "<td>$nickname</td>"; } ?>
                <td><img id="login" alt="config" src="../../Imagenes/config.png"></td> &emsp13; 
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
               <section id="izq">
                  <article>
                     <figure>
                        <img src="../../Imagenes/Ninia/Accesorios/1.jpg" onclick="abrirImagen();">
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Ninia/Accesorios/2.jpg" onclick="abrirImagen();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Ninia/Accesorios/3.jpg" onclick="abrirImagen();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
               </section>
               <section id="cen">
                  <article>
                     <figure>
                        <img src="../../Imagenes/Ninia/Accesorios/4.jpg" onclick="abrirImagen();">
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Ninia/Accesorios/5.jpg" onclick="abrirImagen();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Ninia/Accesorios/6.jpg" onclick="abrirImagen();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
               </section>
               <section id="der">
                  <article>
                     <figure>
                        <img src="../../Imagenes/Ninia/Accesorios/7.jpg" onclick="abrirImagen();">
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Ninia/Accesorios/8.jpg" onclick="abrirImagen();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Ninia/Accesorios/9.jpg" onclick="abrirImagen();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
               </section>
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
               <li class="articulosCaballero"><a href="Ninias-Blusas.php">Blusas</a></li>
               <li class="articulosCaballero"><a href="Ninias-Jeans.php">Jeans</a></li>
               <li class="articulosCaballero"><a href="Ninias-Pantalon.php">Pantalon</a></li>
               <li class="articulosCaballero"><a href="Ninias-Vestidos.php">Vestidos</a></li>
               <li class="articulosCaballero"><a href="Ninias-Faldas.php">Faldas</a></li>
               <li class="articulosCaballero"><a href="Ninias-Short.php">Short</a></li>
               <li class="articulosCaballero"><a href="Ninias-Accesorios.php" style="color:red; font-size:1.5em;">Accesorios</a></li>
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

