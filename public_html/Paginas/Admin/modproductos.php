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
  <input type="hidden" name="pagina" value="../Admin/modproductos.php">
  <input type="hidden" name="cerrarsesion" value="../../Index.php">
 <table  class="tabla">
             <tr>
               <td>Bienvenido:</td>
               <td><img alt="usuario" width="25" src="../../Imagenes/usuario.png"></td>
    <?php
    if(isset($_GET['nickname'])){
    $nickname = $_GET['nickname']; 
    echo "<td>$nickname</td>"; } ?>
                <td><img alt="config" width="25" src="../../Imagenes/config.png"></td> &emsp13; 
               <td> &emsp13; <button name="sesion" value="1">Cerrar Sesion</button></td>
               </tr>
               </table>
</form>

      <center>
        <form id='formularioModificacion' method='POST' enctype='multipart/form-data' action='../procesar/modificar.php'>
       <input type='hidden' name="tabla" value="productos">
      <?php 
        $idgeneral=$_GET['ID'];
        echo
       "<input type='hidden' name='id' value='$idgeneral'>"
       ?>
      <?php
       require_once '../procesar/config.php';
       $conexion=mysqli_connect(config::$servidor,config::$usuario,config::$password,config::$baseDeDatos);
       if(mysqli_connect_errno()){//Comprobacion de error en la conexion
       die("No se pudo realizar la conexion a la base de datos!");
       }
       $consulta=mysqli_query($conexion, "SELECT * FROM productos");
       while($fila = mysqli_fetch_array($consulta)){
        $marca=$fila[1];
        $nombre=$fila[2];
        $talla=$fila[3];
        $genero=$fila[4];
        $costo=$fila[5];
        $existencia=$fila[6];
        $imagen=$fila[7];
        $descripcion=$fila[8];
       
       }

?>
<?php
        echo
       " <div id='regProductos' class='reg'>
          
               <p>Modificar Producto</p>
               <div class='cajausuario'>
               
 
                  Marca: <br>
                  <input class='caja' type=text name='marca' id='marca' maxlength='150' placeholder='marca' width='275' value='$marca' onkeypress='return sololetrasconespacios(event)' onpaste='return false'><br><br>
                   Prenda: <br>"
                   ?>
                   <?php

                   $opcion1='';
                   $opcion2='';
                   $opcion3='';
                   $opcion4='';
                   $opcion5='';
                   $opcion6='';
                   $opcion7='';
                   $opcion8='';
                   $opcion9='';
                   

                    if($nombre=='Playera'){$opcion1='selected';}
                    if($nombre=='Blusa'){$opcion2='selected';}
                    if($nombre=='Jeans'){$opcion3='selected';}
                    if($nombre=='Pantalon'){$opcion4='selected';}
                    if($nombre=='Vestido'){$opcion5='selected';}
                    if($nombre=='Camisa'){$opcion6='selected';}
                    if($nombre=='Falda'){$opcion7='selected';}
                     if($nombre=='Short'){$opcion8='selected';}
                     if($nombre=='Accesorio'){$opcion9='selected';}
                   ?>
                   <?php
                 echo  "<select name='nombre' id='nombre' value='$nombre'>
                     <option $opcion1>Playera</option>
                     <option $opcion2>Blusa</option>
                     <option $opcion3>Jeans</option>
                     <option $opcion4>Pantalon</option>
                     <option $opcion5>Vestido</option>
                     <option $opcion6>Camisa</option>
                     <option $opcion7>Falda</option>
                     <option $opcion8>Short</option>
                     <option $opcion9>Accesorio</option>
                  </select><br><br>"

                    ?>
                    <?php
                    $opcion10='';
                    $opcion11='';
                    $opcion12='';
                    if($talla=='Chica'){$opcion10='selected';}
                    if($talla=='Mediana'){$opcion11='selected';}
                    if($talla=='Grande'){$opcion12='selected';}

                    ?>

                    <?php

                  echo "Talla : 
                  <select name='talla' id='talla' value='$talla'>
                     <option $opcion10>Chica</option>
                     <option $opcion11>Mediana</option>
                     <option $opcion12>Grande</option>
                  </select>
                  &emsp13; &emsp13; "
                  ?>
                  <?php
                   $opcion13='';
                    $opcion14='';
                    $opcion15='';
                    if($genero=='Dama'){$opcion13='selected';}
                    if($genero=='Niño'){$opcion14='selected';}
                    if($genero=='Niña'){$opcion15='selected';}


                  ?>
                   <?php
                   echo
                 " Genero:
                  <select name='genero' id='genero' value='$genero'>
                     <option selected='value';>Caballero</option>
                     <option $opcion13>Dama</option>
                     <option $opcion14>Niño</option>
                     <option $opcion15>Niña</option>
                  </select>
                  <br><br>
                  Costo:<br>
                  <input class='caja' type=text name='costo' id='costo' maxlength='' placeholder='costo' value='$costo' onkeypress='return decimales(event)' onpaste='return false'><br><br>
                  Existencias:<br>
                  <input class='caja' type=text name='existencia' id='existencia' maxlength='' placeholder='existencia' value='$existencia' onkeypress='return solonumeros(event)' onpaste='return false'><br><br>
                  
                    Imagen:<br>
                    <input class='caja' type='file' name='foto' accept='image' value='$imagen'/>
                    <br><br>
                    Descripcion:<br>
                    <textarea name='descripcion' id='descripcion' class ='descripcion' rows='3' cols='38' placeholder='Descripion del articulo' onkeypress='return sololetrasconespacios(event)' onpaste='return false'>$descripcion</textarea>
                    <section class='contenedorbtn'>
                  <button class='btnguardar'>Guardar</button>       
               </section>
                  
               </div>"
               ?>
            </form>
         </div>

                  
      </center>
   </body>
</html>
