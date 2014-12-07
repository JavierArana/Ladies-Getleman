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
  <input type="hidden" name="pagina" value="../Admin/regproveedores.php">
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
          
         <div id="regProveedores" class="reg">
            <form>
               <p>Nuevo Proveedor</p>
               <div class="cajausuario">
                  Nombre: <br>
                  <input class="caja" type=text name="nick" id="nombre" maxlength="40" placeholder="Nombre  Apellido Paterno  Apellido Materno" onkeypress="return sololetrasconespacios(event)" onpaste="return false"><br><br>
                  Direccion: <br>
                  <input class"caja" type=text name="nick" id="" maxlength="" placeholder="Direccion" onkeypress="return direccion(event)" onpaste="return false"><br><br>
                  Telefono: <br>
                  <input class="caja" type=text name="nick" id="tel" maxlength"15" placeholder"Telefono" onkeypress="return solonumeros(event)" onpaste="return false"><br><br>
                  Email: <br>
                  <input class="caja" type=text name="nick" id="email" maxlength="150" placeholder="ejemplo@example.com" onkeypress="return email(event)" onpaste="return false"><br><br>
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
                  <input class="caja" type=text name="nick" id="" maxlength="" placeholder="Ejemplo 3" onkeypress="return solonumeros(event)" onpaste="return false"><br><br>
                  <section class="contenedorbtn">
                  <button class="btnguardar">Guardar</button>       
               </section>
               </div>
            </form>
         </div>
         <!--regProveedores-->
            
      </center>
   </body>
</html>
