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
        <script type="text/javascript" src="../../JavaScript/OpenedCaballero/funcionesP.js"></script>
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
                        </section><br><br><br>
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
                    <nav><br>
                        <center>
                            <ul id="menu">
                                <li class="opcionmenu"><a href="../../Index.html">Home</a></li>
                                <li class="opcionmenu"><a href="Caballero.html">Caballero</a></li>
                                <li class="opcionmenu"><a href="../Dama/Dama.html">Dama</a></li>
                                <li class="opcionmenu"><a href="../Niño/Ninios.html">Niños</a></li>                    
                                <li class="opcionmenu"><a href="../Niña/Ninias.html">Niñas</a></li>                  
                            </ul>
                        </center>
                    </nav>
                </section>
                <section id="seccion3">
                    <form>
                        Usuario &emsp14;&emsp14;&emsp13;<input id="textbox1" type="text" placeholder="Nick"> <input id="boton" type="button" value="login">
                        <br>Password <input id="textbox2" type="password" placeholder="********" >&emsp13;<a id="registrar" href="../Registro.html">Registrarse</a>
                    </form>                    
                </section>

                <section id="seccionArticulos">

               <section class="contenedorbtn">
                  <input type="button" value="<"  class="bnt_sig_ant" />       
               </section>

                    <div>
                    	
                    


					<!-- 
                       <section  class="base">
                        <article>
                            <figure>
                                <img  src="../../Imagenes/Caballero/1.jpg" alt="Caballero/1" onclick="abrirImagen();" >
                                <figcaption>Marca:<br>Costo:$</figcaption>
                            </figure>
                        </article>
                       </section>
					-->



                    </div>

<section class="contenedorbtn">
                  <input type="button" value=">" class="bnt_sig_ant"/>    
               </section>




                    

                </section>

            </section>
            <aside>
                <p id="titulo">Ladies & Gentlemen</p><br>
                <img  id="logo" src="../../Imagenes/general.jpg" >
                <ul id="opcion">
                    <li class="articulosCaballero" id="playera" onclick="articuloSeleccionado();"><a href="Playera.html">Playera</a></li>                    
                    <li class="articulosCaballero" id="jeans" onclick="articuloSeleccionado();"><a href="Jeans.html">Jeans</a></li>
                    <li class="articulosCaballero" id="pantalon" onclick="articuloSeleccionado();"><a href="Pantalon.html">Pantalon</a></li>
                    <li class="articulosCaballero" id="camisas" onclick="articuloSeleccionado();"><a href="Camisa.html">Camisas</a></li>
                    <li class="articulosCaballero" id="calzado" onclick="articuloSeleccionado();"><a href="Calzado.html">Calzado</a></li>
                    <li class="articulosCaballero" id="accesorios" onclick="articuloSeleccionado();"><a href="Accesorios.html">Accesorios</a></li>	
                </ul>
                 <input type="search" name="busqueda" id="busqueda" placeholder="Buscar">  <input id="botonBuscar" type="submit" value="Buscar">
            </aside>
        </section>       
    </body>
</html>


