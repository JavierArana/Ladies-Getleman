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
  <input type="hidden" name="pagina" value="../Admin/modusuario.php">
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
         <?php
         require_once '../procesar/config.php';
         $conexion=mysqli_connect(config::$servidor,config::$usuario,config::$password,config::$baseDeDatos);
          if(mysqli_connect_errno()){//Comprobacion de error en la conexion
          die("No se pudo realizar la conexion a la base de datos!");
          }
          mysqli_close($conexion);
         ?>

      <div id="regUsuario" class="reg">
      <form id="formularioModificacion" method="POST" enctype="multipart/form-data" action="../procesar/modificar.php">
       <input type="hidden" name="tabla" value="usuarios">
       <!-- Incrustar id del usuario marcado para modificar en los procesos-->
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
       $consulta=mysqli_query($conexion, "SELECT * FROM usuarios");
       while($fila = mysqli_fetch_array($consulta)){
        $nombre=$fila[1];
        $tipousuario=$fila[2];
        $fechanac=$fila[3];
        $sexo=$fila[4];
        $nickname=$fila[5];
        $email=$fila[6];
        $contra=$fila[7];
        $telefono=$fila[8];
        $direccion=$fila[9];
       }
       echo

           "<p id='titulous' >Modificar Usuario</p>
           <section class=cajausuario>
                Nombre:<br>
                <input class='registro' type='text' name='nombre' id='nombre' maxlength='40' placeholder='Nombre   Apellido Paterno   Apellido Materno ' value='$nombre' onkeypress='return sololetrasconespacios(event)' onpaste='return false'/><br><br>"
                              ?>
                              <?php
                
                ?>
                <?php
                 if($tipousuario=='admin'){
                     $opcion3='selected';
                     $opcion4='';
                    }
                    
                    if($tipousuario=='cliente'){
                     $opcion4='selected';
                     $opcion3='';
                    }
                    ?>
                <?php
                 echo "Tipo de Usuario:
                 <select name='tipousuario' id='tipousuario' value='$tipousuario'>
                 <option $opcion3>admin</option>
                 <option $opcion4>cliente</option>
                 </select><br><br>

                Fecha de nacimiento:<br><input type='date' id='fecha' name='fecha' value='$fechanac' />
                <br><br>"
                ?>
                <?php

               
                    if($sexo=='Masculino'){
                     $opcion1='selected';
                     $opcion2='';
                    }
                    
                    if($sexo=='Femenino'){
                     $opcion2='selected';
                     $opcion1='';
                    }
                     
                    ?>
                   
                  <?php 
                  echo " <select name='sexo' id='sexo' value='$sexo'>
                         <option $opcion1>Masculino</option>
                         <option $opcion2>Femenino</option>
                         </select><br><br>



                Nickname:<br> <input class='registro' type=text name='nick' id='nick' maxlength='15' placeholder='Nick'  onkeypress='return usuario(event)' onpaste='return false' value='$nickname'><br><br>
                Email: <br> <input class='registro' type='email' name='email' id='email' maxlength='150' placeholder='ejemplo@example.com' onkeypress='return correo(event)' onpaste='return false' value='$email'/><br><br>
                Contraseña:<br> <input class='registro' type='password' name='contra' id='contra' maxlength='250' placeholder='********' value='$contra'><br><br> 
                Telefono:<br>
                <input class='registro' type='tel' name='tel' id='tel' maxlength='15' placeholder='telefono' onkeypress='return solonumeros(event)' onpaste='return false' value='$telefono'>
           </section>
           <section class=cajausuario>
              
              <br>
              direccion:<br> <textarea name='direccion' id='direccion' class ='descripcion' rows='5' cols='20' placeholder='Descripion del articulo' onkeypress='return direccion(event)' onpaste='return false'>$direccion </textarea>
                <br><br><br>
                <section id='contenedorbtnreg'>
                <section class='contenedorbtn'>
                  <button class='btnguardar'>Guardar Cambios</button>
                </section>
       
                </section>           
           </section>"
           ?>
        </form>         
         </div>
        
      </center>
   </body>
</html>
