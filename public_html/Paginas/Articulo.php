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
        <script type="text/javascript" src"../JavaScript/funciones.js"></script>
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
       $descripcion=$_GET['descripcion'];
       $paginar=$_GET['pagina'];
       ?>
		<section id="previa" >
            <section id="contenedorPrevia">
                <section id="contenedorImg">
              
                    <?php
                    echo
                   " <img id='imgfull' src='fotos/$direccion'>";

                     ?>
                </section>
                <section id="contenedorArt">
                    <article class="descripcionArt">
                        <section class="contenedorbtn">
                        <?php echo
                           "<a href='$paginar'> <input type='button' value='X'  id='btncerrar' class='bnt_sig_ant'  /> ";
                           ?>
                        </section><br><br><br>
                       <?php
                        echo
                        "<p id='texto'>
                            $descripcion
                        </p>"; ?>
                        <select name="talla">
                            <option>Chica</option>
                            <option selected="value">Mediana</option>
                            <option>Grande</option>
                        </select>
                        <?php
                        session_start();
                     if(isset($_SESSION['inicio'])){
                             echo "<a href='Comprar.php'><img src='../Imagenes/s.png' id='comprar'></a>  ";   
                            }
                      
                            ?>
                    </article>
                </section>
            </section>
        </section>
        
    </body>
</html>                                
