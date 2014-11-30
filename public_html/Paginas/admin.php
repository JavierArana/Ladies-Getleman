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
               <li class="opcionmenu" onclick="abrirform('productos');"><a href="#">Productos</a></li>
               <li class="opcionmenu" onclick="abrirform('ventas');"><a href="#">Ventas</a></li>
               <li class="opcionmenu" onclick="abrirform('proveedores');"><a href="#">Proveedores</a></li>
               <li class="opcionmenu" onclick="abrirform('sugerencias');"><a href="#">Sugerencias</a></li>
               <li class="opcionmenu" onclick="abrirform('usuarios');"><a href="#">Usuarios</a></li>
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
         <div id="productos">
            <form>
               <p id="TituloMenu">Productos</p>
               <button onclick="abrirform('regProductos');">Nuevo</button>   
               <section class=" cont_form">
                  <table>
                     <thead>
                        <tr>
                           <th>ID_Producto</th>
                           <th>Marca</th>
                           <th>Nombre</th>
                           <th>Talla</th>
                           <th>Genero</th>
                           <th>Costo</th>
                           <th>Existencias</th>
                           <th>Imgen</th>
                           <th>Operaciones</th>
                        </tr>
                     </thead>
                     <tbody>
                     <!-- Contenido PHP-->
                     </tbody>
                  </table>
               </section>
            </form>
         </div>
         <!-- producto-->
         <div id="regProductos" class="reg">
            <form>
               <p>Nuevo Producto</p>
               <div class="cajausuario">
               

                  Marca: <br>
                  <input class="caja" type=text name="nick" id="" maxlength="" placeholder="" width="275"><br><br>
                  Nombre: <br>
                  <input class="caja" type=text name="nick" id="" maxlength="" placeholder=""><br><br>
                  Talla : 
                  <select>
                     <option>Chica</option>
                     <option selected="value">Mediana</option>
                     <option>Grande</option>
                  </select>
                  &emsp13; &emsp13; 
                  Genero:
                  <select>
                     <option selected="value">Caballero</option>
                     <option>Dama</option>
                     <option>Niño</option>
                     <option>Niña</option>
                  </select>
                  <br><br>
                  Costo:<br>
                  <input class="caja" type=text name="nick" id="" maxlength="" placeholder=""><br><br>
                  Existencias:<br>
                  <input class="caja" type=text name="nick" id="" maxlength="" placeholder=""><br><br>
                  
                  	Imagen:<br>
                  	<input class="caja" type="file" name="foto" accept="image/*">
                  	<br><br>
                  	Descripcion:<br>
                  	<textarea class ="descripcion" rows="3" cols="38" placeholder="Descripion del articulo"> </textarea>
					<section class="contenedorbtn">
                  <button class="btnguardar">Guardar</button>       
               </section>
                  
               </div>
            </form>
         </div>
         <!-- regProductos -->
         <div id="ventas">
            <form>
               <p>Ventas</p>
               
               <section class=" cont_form">
                  <table>
                     <thead>
                        <tr>
                           <th>ID_Venta</th>
                           <th>ID_Cliente</th>
                           <th>ID_Producto</th>
                           <th>Fecha</th>
                           <th>Costo/U</th>
                           <th>Cantidad</th>
                           <th>Costo_Total</th>
                           <th>Operaciones</th>
                        </tr>
                     </thead>
                     <tbody>
                     <!-- Contenido PHP-->
                     </tbody>
                  </table>
               </section>
            </form>
         </div>
         <!-- ventas-->
       
         <!-- regvVntas-->
         <div id="proveedores">
            <form>
               <p>Proveedores</p>
               <button onclick="abrirform('regProveedores');">Nuevo</button> 
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
                     <!-- Contenido PHP-->
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
         <!--regProveedores-->
         <div id="sugerencias">
            <form>
               <p>Sugerencias</p>
               <button onclick="abrirform('regSugerencia');">Nuevo</button> 
               <section class=" cont_form">
                  <table>
                     <thead>
                        <tr>
                           <th>ID_Sugerencia</th>
                           <th>ID_Cliente</th>
                           <th>ID_Producto</th>
                           <th>Suegerencia</th>
                           <th>Operaciones</th>
                     </thead>
                     <tbody>
                     <!-- Contenido PHP-->
                     </tbody>
                  </table>
               </section>
            </form>
         </div>
         <!--segerencias-->
         <div id="regSugerencia" class="reg">
            <form>
               <p>Nueva Suegerencia</p><br><br>
               <div class="cajausuario">
               Id Producto:<br>
               <select>
               
               	<option>1</option>
               	<option>2</option>
               	<option>3</option>
               </select>
               <br><br>
               Sugerencia:<br>
               <textarea class ="descripcion" rows="3" cols="38" placeholder="Descripion del articulo"> </textarea>	
               	<section class="contenedorbtn">
                  <button class="btnguardar">Guardar</button>       
               </section>
               </div>
               
            </form>
         </div>
         <!--regSugerencia-->
         <div id="usuarios">
            <form>
               <p>Usuarios</p>
               <button onclick="abrirform('regUsuario');">Nuevo</button> 
               <section class=" cont_form">
               <table>
                  <thead>
                     <tr>
                        <th>ID_Cliente</th>
                        <th>Nombre</th>
                        <th>Fecha_de_Nacimiento</th>
                        <th>Sexo</th>
                        <th>NickName</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Operaciones</th>
                     </tr>
                  </thead>
                  <tbody>
                  <!-- Contenido PHP-->
                  </tbody>
               </table>
         </div>
         <!--usuarios-->
         <div id="regUsuario" class="reg">
			<form >
           <p id="titulous" >Nuevo Usuario</p>
           <section class=cajausuario>
                Nombre:<br>
                <input class="registro" type="text" name="nombre" id="nombre" maxlength="40" placeholder="Nombre   Apellido Paterno   Apellido Materno " onkeypress="return sololetrasconespacios(event)" onpaste="return false"/><br><br>
                Fecha de nacimiento:<br><input type="date" id="fecha"/>
                <br><br>
                Sexo:
                <select name="Sexo">
                    <option selected="value">Masculino</option>
                    <option>Femenino</option>
                </select><br><br>
                Nickname:<br> <input class="registro" type=text name="nick" id="nick" maxlength="15" placeholder="Nick"  onkeypress="return usuario(event)" onpaste="return false"><br><br>
                Email: <br> <input class="registro" type="email" name="email" id="email" maxlength="150" placeholder="ejemplo@example.com" onkeypress="return correo(event)" onpaste="return false"/><br><br>
                Contraseña:<br> <input class="registro" type="password" name="contra" id="contra" maxlength="250" placeholder="********"><br><br> 
                Telefono:<br>
                <input class="registro" type="tel" name="tel" id="tel" maxlength="15" placeholder="telefono" onkeypress="return solonumeros(event)" onpaste="return false">
           </section>
           <section class=cajausuario>
               Calle: <br><input class="registro" type=text name="dir" id="dir" maxlength="150" placeholder="Calle" onkeypress="return sololetrasconespacios(event)" onpaste="return false"> <br><br> Num.ext: <br><input class="registro" type=text name="numero" id="numext" maxlength="150" placeholder="Num. Exterior" onkeypress="return solonumeros(event)" onpaste="return false"><br><br>
               Colonia: <br><input class="registro" type="text" name="col" id="colonia" maxlength="150" placeholder="Colonia" onkeypress="return sololetrasconespacios(event)" onpaste="return false"><br><br>
               Ciudad:<br> <input class="registro" type=text name="ciudad" id="ciudad" maxlength="50" placeholder="ciudad" onkeypress="return sololetrasconespacios(event)" onpaste="return false"><br><br>
               Estado:
               <select name="Estado">
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
               		<button class="btnguardar">Guardar</button>
               	</section>
				<br><br><br>
               		<a href="ConUsuario.php"><input type="button" value="CONSULTAR" id="botonreg" /> </a>
           	  	</section>           
           </section>
        </form>         
         </div>
      </center>
   </body>
</html>
