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
      <title>Ladies & Gentlemen </title>
   </head>
   <body>
      <section id="previa" >
         <section id="contenedorPrevia">
            <section id="contenedorImg">
               <img id="imgfull" src="">
               <section class="contenedorbtn" name="anterior">
                  <input type="button" value="<"  id="anterior" class="bnt_sig_ant" />       
               </section>
               <section class="contenedorbtn" name="siguiente">
                  <input type="button" value=">" id ="siguiente" class="bnt_sig_ant"/>    
               </section>
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
                  <img src="../../Imagenes/s.png" id="comprar">
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
               <form>
                    <table  class="tabla">
             <tr>
               <td>Usuario</td>
               <td><input class="textbox" type="text" placeholder="Nick" onkeypress="return usuario(event)" onpaste="return false"/></td>
               <td> <input id="boton" type="button" value="login"></td>
             </tr>
             <tr>
               <td >Password</td>
               <td ><input class="textbox" type="password" placeholder="*********"></td>
               <td><a id="registrar" href="Paginas/Registro.html">Registrarse</a></td>
             </tr>
           </table>
               </form>
            </section>
            <section id="seccionArticulos">
               <section class="contenedorbtn">
                  <input type="button" value="<"  class="bnt_sig_ant" />        
               </section>
               <section id="izq">
                  <article>
                     <figure>
                        <img src="../../Imagenes/Dama/Faldas/1.jpg" onclick="abrirImagen();">
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Dama/Faldas/2.jpg" onclick="abrirImagen();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Dama/Faldas/3.jpg" onclick="abrirImagen();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
               </section>
               <section id="cen">
                  <article>
                     <figure>
                        <img src="../../Imagenes/Dama/Faldas/4.jpg" onclick="abrirImagen();">
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Dama/Faldas/5.jpg" onclick="abrirImagen();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Dama/Faldas/6.jpg" onclick="abrirImagen();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
               </section>
               <section id="der">
                  <article>
                     <figure>
                        <img src="../../Imagenes/Dama/Faldas/7.jpg" onclick="abrirImagen();">
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Dama/Faldas/8.jpg" onclick="abrirImagen();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Dama/Faldas/9.jpg"><br>
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
               <li class="articulosCaballero"><a href="Dama-Blusas.php">Blusas</a></li>
               <li class="articulosCaballero"><a href="Dama-Jeans.php">Jeans</a></li>
               <li class="articulosCaballero"><a href="Dama-Pantalon.php">Pantalon</a></li>
               <li class="articulosCaballero"><a href="Dama-Vestidos.php">Vestidos</a></li>
               <li class="articulosCaballero"><a href="Dama-Calzado.php">Calzado</a></li>
               <li class="articulosCaballero"><a href="Dama-Faldas.php" style="color:red; font-size:1.5em;">Faldas</a></li>
               <li class="articulosCaballero"><a href="Dama-Short.php">Short</a></li>
               <li class="articulosCaballero"><a href="Dama-Accesorios.php">Accesorios</a></li>
            </ul>
             <input type="search" name="busqueda" id="busqueda" placeholder="Buscar" onkeypress="return sololetrasconespacios(event)" onpaste="return false"> <input id="botonBuscar" type="submit" value="Buscar">
         </aside>
      </section>
   </body>
</html>
