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
        <link rel="stylesheet" href="Estilos/estiloHome.css">
        <script type="text/javascript" src="JavaScript/validacionCampos.js"></script>
        <script  type="text/javascript" src="JavaScript/jquery-1.11.1.min.js"></script>
        <script  type="text/javascript" src="JavaScript/carrucel.js"></script>	
        <script type="text/javascript" src="JavaScript/lluvia.js"></script>

    </head>
    <body> 
        <section id="seccion1">
            <p id="titulo">Ladies & Gentlemen</p><br>
        </section>
        <section id="seccion2">
            <nav>
                <br>
                <ul id="menu">
                    <li class="opcionmenu"><a href="Index.php">Home</a></li>
                    <li class="opcionmenu"><a href="Paginas/Caballero/Caballero.php">Caballero</a></li>
                    <li class="opcionmenu"><a href="Paginas/Dama/Dama.php">Dama</a></li>
                    <li class="opcionmenu"><a href="Paginas/Ninio/Ninios.php">Niños</a></li>                    
                    <li class="opcionmenu"><a href="Paginas/Ninia/Ninias.php">Niñas</a></li>                    
                </ul>
            </nav>
        </section>
        <section id="seccion3">
            <form action="Paginas/procesar/login.php" method="post">
               <table  class="tabla">
             <tr>
               <td>Usuario</td>
               <td><input name="usuario" id="usuario" class="textbox" type="text" placeholder="Nick" onkeypress="return usuario(event)" onpaste="return false"/></td>
               <td><button>Entrar</td></button>
               
             </tr>
             <tr>
               <td >Password</td>
               <td ><input name="pass" id="pass" class="textbox" type="password" placeholder="*********"></td>
               <td><a id="registrar" href="Paginas/Registro.php">Registrarse</a></td>
             </tr>
           </table>
            </form>
        </section>
        <div>
            <center>
                <article id="carrucel">
                    <figure id="contenedor_imagenes">
                        
                        <img class="wall" alt="" width="850" height="450" src="Imagenes/Slider/home.jpg">
                        <img class="wall" alt="" width="850" height="450" src="Imagenes/Slider/4.jpg">
                        <img class="wall" alt="" src="Imagenes/Slider/2.png">
                        <img class="wall" alt="" src="Imagenes/Slider/3.png">
                        <img class="wall" alt="" src="Imagenes/Slider/4.png">
                        
                            
                        
                        <!--<img class="wall" alt="" src="hd/1.jpg">
                        <img class="wall" alt="" src="hd/2.jpg">
                        <img class="wall" alt="" src="hd/3.jpg">
                        <img class="wall" alt="" src="hd/4.jpg">
                        <img class="wall" alt="" src="hd/5.png">
                        <img class="wall" alt="" src="hd/6.jpg">
                        <img class="wall" alt="" src="hd/7.png">
                        <img class="wall" alt="" src="hd/8.jpg">
                        <img class="wall" alt="" src="hd/9.jpg">
                        <img class="wall" alt="" src="hd/10.png">
                        <img class="wall" alt="" src="hd/11.jpg">
                        <img class="wall" alt="" src="hd/12.jpg">
                        <img class="wall" alt="" src="hd/13.jpg">
                        <img class="wall" alt="" src="hd/b7.jpg"> -->
                    </figure>
                </article>  
            </center>                        
        </div>
    </body>
</html>
