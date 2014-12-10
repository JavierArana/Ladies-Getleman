<!DOCTYPE html> 
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html> 
    <head>
        <title>Compras</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../Estilos/estilo.css">
        <link rel="stylesheet" href="../Estilos/articulos.css">
        <script type="text/javascript" src="../JavaScript/validacionCampos.js"></script>
        <script type="text/javascript" src="../JavaScript/lluvia.js"></script>
        	<style type="text/css">
        	#previa{
        		display: block;
        	}
        	</style>
    </head>
       <body>
       <?php
       $direccion=$_GET['direccion'];
       ?>
		<section id="previa" >
            <section id="contenedorPrevia">
                <section id="contenedorImg">
                <?php
                echo "$direccion";
                ?>
                    <?php
                    echo
                   " <img id='imgfull' src='fotos/$direccion'>";

                     ?>
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
                        <?php
                        session_start();
                         if(isset($_POST['sesion'])){
                             echo "<a href='Comprar.php'><img src='../Imagenes/s.png' id='comprar'></a>  ";   
                            }else{

                                
                            }
                      
                            ?>
                    </article>
                </section>
            </section>
        </section>
        
    </body>
</html>                                
