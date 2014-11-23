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
      <style type="text/css">
         div{
         width: 50%;
         height: 450px;
         border:solid white 1px;
         margin-top: 2%;
         //background: red;
         }
         form p {
         width: 100%;
         float: left;
         background-color: white;
         color: black;
         margin-top: 0px;
         font-size: 20px;
         }	
         .cont_form{
         clear: both;
         margin-left: 2%;
         }
         form{
         text-align: left;
         }
         .caja{
         width: 275px;
         }

         #productos{
         	display: none;
         }

         #ventas{
         	display: none;
         }

         #usuarios{
         	display: none;
         }

         #proveedores{
         	display: none;
         }

         #sugerencias{
         	display: none;
         }



      </style>
       <script type="text/javascript">
        function abrirform(formulario){
           document.getElementById("productos").style.display="none";
           document.getElementById("ventas").style.display="none";
           document.getElementById("proveedores").style.display="none";
           document.getElementById("sugerencias").style.display="none";
           document.getElementById("usuarios").style.display="none";
           document.getElementById(formulario).style.display="block";
        }
    </script>
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
      <center>
         <div id="productos">
            <form>
               <p id="TituloMenu">Productos</p>
               <section class=" cont_form">
                  <br>
                  Marca: <br>
                  <input class="caja" type=text name="nick" id="" maxlength="" placeholder=""><br><br>
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
               </section>
            </form>
         </div>
         <!-- producto-->
         <div id="ventas">
            <form>
               <p>Ventas</p>
               <section class=" cont_form">
                  <button>Agregar</button>
                  <button>Consultar</button>        			
               </section>
            </form>
         </div>
         <div id="proveedores">
            <form>
               <p>Proveedores</p>
               <section class=" cont_form">
               <br>
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
                </section>
            </form>
         </div>
         <div id="sugerencias">
            <form>
               <p>Sugerencias</p>
               <section class=" cont_form">
               </section>
            </form>
         </div>
         <div id="usuarios">
            <form>
               <p>Usuarios</p>
               <section class=" cont_form">
               
             <style type="text/css">
                     	.cajausuario{
                     		 float: left;
                     		 margin-left: 5%;

                     	}

                     	.cajausuario input{
                     		width: 250px;

                     	}



               		</style>

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
                                    <input type="button" value="Registrar" id="botonreg" />  
                                </section>
                            <br>
                            <a href="ConUsuario.php"><input type="button" value="CONSULTAR" id="botonreg" /> 
               			</section>
               
                            
                            
                        
                    </div>
                </section>
            </section>
            
        </section>       
               </section>
            </form>
         </div>
      </center>
   </body>
</html>
