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
      <script type="text/javascript" src="../../JavaScript/OpenedCaballero/funcionesCa.js"></script>
      <script type="text/javascript" src="../../JavaScript/validacionCampos.js"></script>
       <script type="text/javascript" src="../../JavaScript/lluvia.js"></script>
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
               <nav id="menu">
                  <br>
                  <center>
                     <ul >
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
               <td><a id="registrar" href="../Registro.php">Registrarse</a></td>
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
                        <img src="../../Imagenes/Caballero/Camisa/1.jpg" onclick="abrirImagen();">
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Caballero/Camisa/2.jpg" onclick="abrirImagen2();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Caballero/Camisa/3.jpg" onclick="abrirImagen3();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
               </section>
               <section id="cen">
                  <article>
                     <figure>
                        <img src="../../Imagenes/Caballero/Camisa/4.jpg" onclick="abrirImagen4();">
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Caballero/Camisa/5.jpg" onclick="abrirImagen5();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Caballero/Camisa/6.jpg" onclick="abrirImagen6();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
               </section>
               <section id="der">
                  <article>
                     <figure>
                        <img src="../../Imagenes/Caballero/Camisa/7.jpg" onclick="abrirImagen7();">
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Caballero/Camisa/8.jpg" onclick="abrirImagen8();"><br>
                        <figcaption>Marca:<br>Costo:$</figcaption>
                     </figure>
                  </article>
                  <article>
                     <figure>
                        <img src="../../Imagenes/Caballero/Camisa/9.jpg" onclick="abrirImagen9();"><br>
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
               <li class="articulosCaballero"><a href="Playera.php">Playera</a></li>
               <li class="articulosCaballero"><a href="Jeans.php">Jeans</a></li>
               <li class="articulosCaballero"><a href="Pantalon.php">Pantalon</a></li>
               <li class="articulosCaballero"><a href="Camisa.php" style="color:red; font-size:1.5em;">Camisas</a></li>
               <li class="articulosCaballero"><a href="Accesorios.php">Accesorios</a></li>
            </ul>
            <input type="search" name="busqueda" id="busqueda" placeholder="Buscar" onkeypress="return sololetrasconespacios(event)" onpaste="return false">  <input id="botonBuscar" type="submit" value="Buscar">
         </aside>
      </section>
   </body>
</html>
