<!DOCTYPE html> 
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html> 
    <head>
        <title>Compras</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../Estilos/estilo.css">
        <script type="text/javascript" src="../JavaScript/validacionCampos.js"></script>
        <script type="text/javascript" src="../JavaScript/lluvia.js"></script>
        <style type="text/css">
        
        #compra{
        	width: 50%;
        	margin-top: 15%;
        	
        	float: left;
        	
        }
         #compraArt	 {
        
        	
        	height: 50%;
        	margin-top: 8%;
        	margin-left: 0px;
        }
        #btncomprar{
        	background-color: black;
        	color: white;
        }
        cite{
        	font-size: 13px;
        }
       
        #contCompra{
        	float: left;
        }
        #compra td input{
        	width: 158px;
        }

        div table td{
        	padding: 2px;
        }


        </style>
    </head>
       <body>
        <section id="cajaPrincipal">
            <section id="contenido">
                <section id="seccion2">
                    <nav><br>
                        <center>
                            <ul id="menu">
                                <li class="opcionmenu"><a href="../Index.php">Home</a></li>
                                <li class="opcionmenu"><a href="Caballero/Caballero.php">Caballero</a></li>
                                <li class="opcionmenu"><a href="Dama/Dama.php">Dama</a></li>
                                <li class="opcionmenu"><a href="Ninio/Ninios.php">Niños</a></li>                    
                                <li class="opcionmenu"><a href="Ninia/Ninias.php">Niñas</a></li>                    
                            </ul>
                        </center>
                    </nav>
                </section>
                 <section id="seccion3">
            <?php
  session_start();
  if(!isset($_SESSION['inicio'])){
  ?>  
            <form action="../procesar/login.php" method="post">
<input type="hidden" name="pagina" value="../Caballero/Camisa.php">
               <table  class="tabla">
             <tr>
               <td>Usuario</td>&emsp13;
               <td><input name="usuario" id="usuario" class="textbox" type="text" placeholder="Nick" onkeypress="return usuario(event)" onpaste="return false"/></td>
               &emsp13;<td><button>Entrar</td></button>
               
             </tr> 
             <tr>
               <td >Password</td>
               <td ><input name="pass" id="pass" class="textbox" type="password" placeholder="*********"></td>
               <td><a id="registrar" href="../Registro.php">Registrarse</a></td>
             </tr>
           </table>
            </form>  
        <?php 
}else{
        ?>
<form action="../procesar/login.php" method="post">
<input type="hidden" name="pagina" value="../Caballero/Camisa.php">
<input type="hidden" name="cerrarsesion" value="../Caballero/Camisa.php">
 <table  class="tabla">
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
<?php
}
?>
</section>
                 
                <div id="contCompra">
                	<form id="compra">
                		<table>
                			<thead>                				
                			</thead>
                			<tbody>
                				<tr>
                					<td>Numero de targeta:</td>
                					<td><input type="text"></td>
                				</tr>
                				<tr>
                					<td>Valida hasta:</td>
                					<td>
                						<select>
                							<option>Enero</option>
                							<option>Febrero</option>
                							<option>Marzo</option>
                							<option>Abril</option>
                							<option>Mayo</option>
                							<option>Junio</option>
                							<option>Julio</option>
                							<option>Agosto</option>
                							<option>Septiembre</option>
                							<option>Octubre</option>
                							<option>Noviembre</option>
                							<option>Diciembre</option>
                   						</select>
                   						/
                   						<select>
                   							
                   							<option>2014</option>
                   							<option>2015</option>
                   							<option>2016</option>
                   							<option>2017</option>
                   							<option>2018</option>
                   							<option>2019</option>
                   							<option>2020</option>
                   							<option>2021</option>
                   							<option>2022</option>
                   							<option>2023</option>
                   							<option>2024</option>
                   						</select>
                					</td>
                						
                				</tr>


                				<tr>
                					<td>Nombre y Apellido<br>impreso en targeta:</td>
                					<td>
                						<input type="text">
                					</td>
                				</tr>
                					
                				<tr>
                					<td>Codigo</td>
                					<td>
                						<input type="text">
                						<br>
                						<cite>Ultimos 3 digitos en el dorso:</cite>
                					</td>
                				</tr>
                				<tr>
                					<td><button id="btncomprar">Comprar</button></td>
                				</tr>
                			</tbody>
                		</table>
                	</form>
                	
                	<aside id="compraArt">
                		Estas comprando:
                		<img  id="logo"  width="200" height="200" src="../Imagenes/general.jpg" >
                		<br>
                		Descripcion
 
                </aside>
                </div>
                
                
                
             
            </section>
            <aside>
                <p id="titulo">Ladies & Gentlemen</p><br>
                <img  id="logo" src="../Imagenes/general.jpg" >
               
                <br><br>
            </aside>
        </section> 
        
    </body>
</html>                                