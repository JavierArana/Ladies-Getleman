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
  <button name="sesion" value="1">Cerrar Sesion</button>
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



        echo
       " <div id='regProductos' class='reg'>
          
               <p>Modificar Producto</p>
               <div class='cajausuario'>
               

                  Marca: <br>
                  <input class='caja' type=text name='marca' id='marca' maxlength='150' placeholder='marca' width='275' value='$marca'><br><br>
                  Nombre: <br>
                  <input class='caja' type=text name='nombre' id='nombre' maxlength='' placeholder='nombre' value='$nombre'><br><br>
                  Talla : 
                  <select name='talla' id='talla' value='$talla'>
                     <option>Chica</option>
                     <option selected='value'>Mediana</option>
                     <option>Grande</option>
                  </select>
                  &emsp13; &emsp13; 
                  Genero:
                  <select name='genero' id='genero' value='$genero'>
                     <option selected='value';>Caballero</option>
                     <option>Dama</option>
                     <option>Niño</option>
                     <option>Niña</option>
                  </select>
                  <br><br>
                  Costo:<br>
                  <input class='caja' type=text name='costo' id='costo' maxlength='' placeholder='costo' value='$costo'><br><br>
                  Existencias:<br>
                  <input class='caja' type=text name='existencia' id='existencia' maxlength='' placeholder='existencia' value='$existencia'><br><br>
                  
                    Imagen:<br>
                    <input class='caja' type='file' name='foto' accept='image' value='$imagen'/>
                    <br><br>
                    Descripcion:<br>
                    <textarea name='descripcion' id='descripcion' class ='descripcion' rows='3' cols='38' placeholder='Descripion del articulo'>$descripcion</textarea>
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
