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
         
         <div id="regUsuario" class="reg">
      <form id="formulario" method="post" enctype="multipart/form-data" action="../procesar/insertar.php">
      <input type="hidden" name="tabla" value="usuarios">
       <input type="hidden" name="pagina" value="../Admin/regusuario.php">
           <p id="titulous" >Nuevo Usuario</p>
           <section class=cajausuario>
                Nombre:<br>
                <input class="registro" type="text" name="nombre" id="nombre" maxlength="40" placeholder="Nombre   Apellido Paterno   Apellido Materno " onkeypress="return sololetrasconespacios(event)" onpaste="return false"/><br><br>
                Tipo de Usuario:
                 <select name="tipousuario">
                 <option selected="value">admin</option>
                 <option>cliente</option>
                 </select><br><br>
                Fecha de nacimiento:<br><input type="date" name="fecha" id="fecha"/>
                <br><br>
                Sexo:
                <select name="sexo">
                    <option selected="value">Masculino</option>
                    <option>Femenino</option>
                </select><br><br>
                Nickname:<br> <input class="registro" type=text name="nick" id="nick" maxlength="15" placeholder="Nick"  onkeypress="return usuario(event)" onpaste="return false"><br><br>
                Email: <br> <input class="registro" type="email" name="email" id="email" maxlength="150" placeholder="ejemplo@example.com" onkeypress="return email(event)" onpaste="return false"/><br><br>
                Contraseña:<br> <input class="registro" type="password" name="contra" id="contra" maxlength="250" placeholder="********"><br><br> 
                Telefono:<br>
                <input class="registro" type="tel" name="tel" id="tel" maxlength="15" placeholder="telefono" onkeypress="return solonumeros(event)" onpaste="return false">
           </section>
           <section class=cajausuario>
              Calle: <br><input class="registro" type=text name="calle" id="dir" maxlength="150" placeholder="Calle" onkeypress="return sololetrasconespacios(event)" onpaste="return false"> <br><br> 
              Num.ext: <br><input class="registro" type=text name="numext" id="numext" maxlength="150" placeholder="Num. Exterior" onkeypress="return solonumeros(event)" onpaste="return false"><br><br>
              Colonia: <br><input class="registro" type="text" name="col" id="colonia" maxlength="150" placeholder="Colonia" onkeypress="return sololetrasconespacios(event)" onpaste="return false"><br><br>
              Ciudad:<br> <input class="registro" type="text" name="ciudad" id="ciudad" maxlength="50" placeholder="ciudad" onkeypress="return sololetrasconespacios(event)" onpaste="return false"><br><br>
              Estado:
               <select name="estado">
                   <option>Aguascalientes</option>
                   <option>Baja California</option>
                   <option>Baja California Sur</option>
                   <option>Campeche</option>
                   <option>Chiapas</option>
                   <option>Chihuahua</option>
                   <option>Coahuila</option>
                   <option>Colima</option>
                   <option selected="value">Distrito Federal</option>
                   <option>Durango</option>
                   <option>Estado de México</option>
                   <option>Guanajuato</option>
                   <option>Guerrero</option>
                   <option>Hidalgo</option>
                   <option>Jalisco</option>
                   <option>Michoacán</option>
                   <option>Morelos</option>
                   <option>Nayarit</option>
                   <option>Nuevo León</option>
                   <option>Oaxaca</option>
                   <option>Puebla</option>
                   <option>Querétaro</option>
                   <option>Quintana Roo</option>
                   <option>San Luis Potosí</option>
                   <option>Sinaloa</option>
                   <option>Sonora</option>
                   <option>Tabasco</option>
                   <option>Tamaulipas</option>
                   <option>Tlaxcala</option>
                   <option>Veracruz</option>
                   <option>Yucatán</option>
                   <option>Zacatecas</option>
                </select>
                <br><br><br>
                <section id="contenedorbtnreg">
                <section class="contenedorbtn">
                 <button class="btnguardar" value="Registrar" id="botonreg">Registrar</button> 
                </section>
      
                </section>           
           </section>
        </form>         
         </div>
      </center>
      <?php
    if(isset($_GET['res'])){
    $resultado = $_GET['res'];  
    if($resultado==1){
    ?>
  <script type="text/javascript">
alert("El usuario se registro satisfactoriamente!! ");
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
