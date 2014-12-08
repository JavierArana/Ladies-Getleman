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
  <input type="hidden" name="pagina" value="../Admin/regproductos.php">
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
                <td><img alt="config" width="25" src="../../Imagenes/config.png"></td> &emsp13; 
               <td> &emsp13; <button name="sesion" value="1">Cerrar Sesion</button></td>
               </tr>
               </table>
</form>

      <center>
        <div id="regProductos" class="reg">
              <form id="formulario" method="post" enctype="multipart/form-data" action="../procesar/insertar.php">
      <input type="hidden" name="tabla" value="productos">
       <input type="hidden" name="pagina" value="../Admin/regproductos.php">
               <p>Nuevo Producto</p>
               <div class="cajausuario">
                  Marca: <br>
                  <input class="caja" type=text name="marca" id="" maxlength="" placeholder="" width="275" onkeypress="return sololetrasconespacios(event)" onpaste="return false"/><br><br>
                  Prenda: <br>
                  <select name="nombre">
                     <option>Playera</option>
                     <option selected="value">Blusa</option>
                     <option>Jeans</option>
                     <option>Pantalon</option>
                     <option>Vestido</option>
                     <option>Camisa</option>
                     <option>Falda</option>
                     <option>Short</option>
                     <option>Accesorio</option>
                  </select>
                  <br><br>
                  Talla : 
                  <select name="talla">
                     <option>Chica</option>
                     <option selected="value">Mediana</option>
                     <option>Grande</option>
                     <option>Unitalla</option>
                  </select>
                  &emsp13; &emsp13; 
                  Genero:
                  <select name="genero">
                     <option selected="value">Caballero</option>
                     <option>Dama</option>
                     <option>Niño</option>
                     <option>Niña</option>
                  </select>
                  <br><br>
                  Costo:<br>
                  <input class="caja" type=text name="costo" id="" maxlength="" placeholder="" onkeypress="return decimales(event)" onpaste="return false"><br><br>
                  Existencias:<br>
                  <input class="caja" type=text name="existencia" id="" maxlength="" placeholder="" onkeypress="return solonumerso(event)" onpaste="return false"><br><br>
                  
                    Imagen:<br>
                    <input class="caja" type="file" name="foto" >
                    <br><br>
                    Descripcion:<br>
                    <textarea name="descripcion" class ="descripcion" rows="3" cols="38" placeholder="Descripion del articulo" onkeypress="return sololetrasconespacios(event)" onpaste="return false"></textarea>
          <section class="contenedorbtn">
          <button class="btnguardar" value="Guardar" id="botonreg">Guardar</button>      
               </section>
                  
               </div>
            </form>
         </div>     
      </center>
         <?php
    if(isset($_GET['res'])){
    $resultado = $_GET['res'];  
    if($resultado==1){
    ?>
  <script type="text/javascript">
alert("El producto se registro satisfactoriamente!! ");
  </script>
 <?php 
 }
 else{
 ?>
    <script type="text/javascript">
alert("Error de envio de datos... asegurese de llenar todos los campos!");
  </script>
 <?php
 }
    }
 ?> 
   </body>
</html>
