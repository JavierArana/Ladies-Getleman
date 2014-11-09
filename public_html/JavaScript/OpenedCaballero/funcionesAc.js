/*

Validar sólo números 
Esta función nos permite identificar a través de la propiedad event.keyCode la tecla digitada.

*/


function ValidaSoloNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
}

/*

 permite digitar sólo texto, letras mayúsculas (del 65 al 90) y minúsculas (del 97 al 122) 

*/
function txNombres() {
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}

/*
permite digitar sólo texto, letras mayúsculas (del 65 al 90) y minúsculas (del 97 al 122) 
*/
function Texot() {
	alert("fghdfghdfg");
 if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122))
  event.returnValue = false;
}

function abrirImagen(){
            document.getElementById("previa").style.display="block";
            
            document.getElementById('imgfull').src = "../../Imagenes/Caballero/Accesorios/1.jpg";
          //  document.getElementById('imgfull').src = document.getElementsByTagName('imgful').src;
        } 
        function abrirImagen2(){
            document.getElementById("previa").style.display="block";
            
          
           document.getElementById('imgfull').src = "../../Imagenes/Caballero/Accesorios/2.jpg";
         //document.getElementById('imgfull').src = document.getElementsByTagName('imgful').src;
        } 
        function abrirImagen3(){
            document.getElementById("previa").style.display="block";
            
           
           document.getElementById('imgfull').src = "../../Imagenes/Caballero/Accesorios/3.jpg";
         //document.getElementById('imgfull').src = document.getElementsByTagName('imgful').src;
        } 
        function abrirImagen4(){
            document.getElementById("previa").style.display="block";
            
           
           document.getElementById('imgfull').src = "../../Imagenes/Caballero/Accesorios/4.jpg";
         //document.getElementById('imgfull').src = document.getElementsByTagName('imgful').src;
        } 
          function abrirImagen5(){
            document.getElementById("previa").style.display="block";
            
           
           document.getElementById('imgfull').src = "../../Imagenes/Caballero/Accesorios/5.jpg";
         //document.getElementById('imgfull').src = document.getElementsByTagName('imgful').src;
        } 
          function abrirImagen6(){
            document.getElementById("previa").style.display="block";
            
           
           document.getElementById('imgfull').src = "../../Imagenes/Caballero/Accesorios/6.jpg";
         //document.getElementById('imgfull').src = document.getElementsByTagName('imgful').src;
        } 
          function abrirImagen7(){
            document.getElementById("previa").style.display="block";
            
           
           document.getElementById('imgfull').src = "../../Imagenes/Caballero/Accesorios/7.jpg";
         //document.getElementById('imgfull').src = document.getElementsByTagName('imgful').src;
        } 
          function abrirImagen8(){
            document.getElementById("previa").style.display="block";
            
           
           document.getElementById('imgfull').src = "../../Imagenes/Caballero/Accesorios/8.jpg";
         //document.getElementById('imgfull').src = document.getElementsByTagName('imgful').src;
        } 
           function abrirImagen9(){
            document.getElementById("previa").style.display="block";
            
           
           document.getElementById('imgfull').src = "../../Imagenes/Caballero/Accesorios/9.jpg";
         //document.getElementById('imgfull').src = document.getElementsByTagName('imgful').src;
        } 

        function cerrarImg(){
             document.getElementById("previa").style.display="none";
        }     

        function abrirform(){
           document.getElementById("productos").style.display="block";
        }
