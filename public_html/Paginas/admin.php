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
      <link rel="stylesheet" href="../Estilos/estiloHome.css">
      <script type="text/javascript" src="../JavaScript/lluvia.js"></script>
      <link rel="stylesheet" href="../Estilos/estiloAdmin.css">
      <script  type="text/javascript" src="../JavaScript/funciones.js"></script>   
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
               <li class="opcionmenu" onclick="abrirform('productos');"><a href="Admin/productos.php">Productos</a></li>
               <li class="opcionmenu" onclick="abrirform('ventas');"><a href="Admin/ventas.php">Ventas</a></li>
               <li class="opcionmenu" onclick="abrirform('proveedores');"><a href="Admin/proveedores.php">Proveedores</a></li>
               <li class="opcionmenu" onclick="abrirform('sugerencias');"><a href="Admin/sugerencias.php">Sugerencias</a></li>
               <li class="opcionmenu" onclick="abrirform('usuarios');"><a href="Admin/usuario.php">Usuarios</a></li>
            </ul>
         </nav>
      </section>
      <?php
  session_start();
  if(!isset($_SESSION['inicio'])){
header("Location: ../Index.php");
  }
  ?>  
  <form action="procesar/login.php" method="post">
  <button name="sesion" value="1">Cerrar Sesion</button>
</form>


  </body>
</html>
