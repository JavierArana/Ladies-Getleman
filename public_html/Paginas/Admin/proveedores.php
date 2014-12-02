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
               <li class="opcionmenu" onclick="abrirform('productos');"><a href="productos.php">Productos</a></li>
               <li class="opcionmenu" onclick="abrirform('ventas');"><a href="ventas.php">Ventas</a></li>
               <li class="opcionmenu" onclick="abrirform('proveedores');"><a href="proveedores.php">Proveedores</a></li>
               <li class="opcionmenu" onclick="abrirform('sugerencias');"><a href="sugerencias.php">Sugerencias</a></li>
               <li class="opcionmenu" onclick="abrirform('usuarios');"><a href="usuario.php">Usuarios</a></li>
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
      <center>
           <div id="proveedores">
            <form>
               <p>Proveedores</p>
               <a href="regproveedores.php"><input type="button" value="Nuevo proveedor" class="boton" /> </a>
               <section class=" cont_form">
                  <table>
                     <thead>
                        <tr>
                           <th>ID_Proveedor</th>
                           <th>Nombre</th>
                           <th>Direccion</th>
                           <th>Telefono</th>
                           <th>Email</th>
                           <th>Producto</th>
                           <th>Cantidad</th>
                           <th>Operaciones</th>
                        </tr>
                     </thead>
                     <tbody>
                 
                      <?php 

                     require_once 'procesar/consultar.php';
                     $con = new consultar();
                     $con->consultarProveedores();
                     ?>
                   
                     
                     </tbody>
                  </table>
               </section>
            </form>
         </div>
         <!-- proveedores-->
         <div id="regProveedores" class="reg">
            <form>
               <p>Nuevo Proveedor</p>
               <div class="cajausuario">
                  Nombre: <br>
                  <input class="caja" type=text name="nick" id="nombre" maxlength="40" placeholder="Nombre  Apellido Paterno  Apellido Materno"><br><br>
                  Direccion: <br>
                  <input class"caja" type=text name="nick" id="" maxlength="" placeholder="Direccion"><br><br>
                  Telefono: <br>
                  <input class="caja" type=text name="nick" id="tel" maxlength"15" placeholder"Telefono"><br><br>
                  Email: <br>
                  <input class="caja" type=text name="nick" id="email" maxlength="150" placeholder="ejemplo@example.com"><br><br>
                  Tipo de Producto:<br>
                  <select>
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
                  <input class="caja" type=text name="nick" id="" maxlength="" placeholder="Ejemplo 3"><br><br>
                  <section class="contenedorbtn">
                  <button class="btnguardar">Guardar</button>       
               </section>
               </div>
            </form>
         </div>
         
      </center>
   </body>
</html>
