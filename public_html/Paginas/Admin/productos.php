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
               <li class="opcionmenu"><a href="proveedores.php">Proveedores</a></li>
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
  <input type="hidden" name="pagina" value="../Admin/productos.php">
  <input type="hidden" name="cerrarsesion" value="../../Index.php">
<table  class="tabla">
             <tr>
               <td>Bienvenido:</td>
               <td><img alt="usuario" width="25" src="../../Imagenes/usuario.png"></td>
    <?php
   session_name();
    $nickname=$_SESSION['usuario'];
    $idusuario=$_SESSION['id'];
    echo "<td>$nickname</td>"; ?>
                <td><a href="modusuario.php"><img alt="config" width="25" src="../../Imagenes/config.png"></a></td> &emsp13; 
               <td> &emsp13; <button name="sesion" value="1">Cerrar Sesion</button></td>
               </tr>
               </table>
</form>

      <center>
        <div id="productos">
            <form>
               <p id="TituloMenu">Productos</p>
               <a href="regproductos.php"><input type="button" value="Nuevo producto" class="boton" /> </a>
               <section class=" cont_form">
                  <table>
                     <thead>
                        <tr>
                           <th>ID_Producto</th>
                           <th>Marca</th>
                           <th>Prenda</th>
                           <th>Talla</th>
                           <th>Genero</th>
                           <th>Costo</th>
                           <th>Existencias</th>
                           <th>Imgen</th>
                           <th>Descripcion</th>
                           <th>Operaciones</th>
                        </tr>
                     </thead>
                     <tbody>
                     
                     <?php
                     require_once '../procesar/consultar.php';
                    $con = new consultar();
                    $con->consultarProductos();
                    ?>  
                     
                  

                     
                     
                                         
                     </tbody>
                  </table>
               </section>
            </form>
         </div>

                  
      </center>
   </body>
</html>
