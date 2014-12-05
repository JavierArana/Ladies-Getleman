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
          
         <div id="regProveedores" class="reg">
          <form id="formularioModificacion" method="POST" enctype="multipart/form-data" action="../procesar/modificar.php">
       <input type="hidden" name="tabla" value="proveedores">


       <?php
       $idgeneral=$_GET['ID'];
        echo
       "<input type='hidden' name='id' value='$idgeneral'>"
       ?>

       <?php


       require_once '../procesar/config.php';
       $conexion=mysqli_connect(config::$servidor,config::$usuario,config::$password,config::$baseDeDatos);
       if(mysqli_connect_errno($conexion)){
        die("no se pudo realizar la conexion a la base de datos");
       }
       $consulta=mysqli_query($conexion,"SELECT * FROM proveedores");
       while($fila=mysqli_fetch_array($consulta)){

        $nombre=$fila[1];
        $direccion=$fila[2];
        $telefono=$fila[3];
        $email=$fila[4];
        $tipoproducto=$fila[5];
        $cantidad=$fila[6];
       }
       echo "
               <p>Modificar Proveedor</p>
               <div class='cajausuario'>
                  Nombre: <br>
                  <input class='caja' type=text name='nombre' id='nombre' maxlength='40' placeholder='Nombre  Apellido Paterno  Apellido Materno' value='$nombre' onkeypress='return sololetrasconespacios(event)' onpaste='return false'><br><br>
                  Direccion: <br>
                  <input class'caja' type=text name='direccion' id='direccion' maxlength='' placeholder='Direccion' value='$direccion' onkeypress='return direccion(event)' onpaste='return false'><br><br>
                  Telefono: <br>
                  <input class='caja' type=text name='tel' id='tel' maxlength='150' placeholder'Telefono' value='$telefono' onkeypress='return solonumeros(event)' onpaste='return false'><br><br>
                  Email: <br>
                  <input class='caja' type=text name='email' id='email' maxlength='150' placeholder='ejemplo@example.com' value='$email' onkeypress='return email(event)' onpaste='return false'><br><br>
                  Tipo de Producto:<br>
                  <select name='tipoproducto' id='tipoproducto' value='tipoproducto'>
                     <option>Playera</option>
                     <option>Jeans</option>
                     <option>Pantalon</option>
                     <option>Camisas</option>
                     <option>Blusas</option>
                     <option>Vestidos</option>
                     <option>Faldas</option>
                     <option>Short</option>
                     <option>Calzado</option>
                     <option>Accesorios</option>
                  </select>
                  <br><br>
                  Cantidad:<br>
                  <input class='caja' type=text name='cantidad' id='cantidad' maxlength='' placeholder='cantidad' value='$cantidad' onkeypress='return solonumeros(event)' onpaste='return false'><br><br>
                  <section class='contenedorbtn'>
                  <button class='btnguardar'>Guardar</button>       
               </section>
               </div>"
               ?>
            </form>
         </div>
         <!--regProveedores-->
            
      </center>
   </body>
</html>
