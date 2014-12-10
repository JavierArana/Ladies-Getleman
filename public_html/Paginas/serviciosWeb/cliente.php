<?php
    require_once "../lib/nusoap.php";
    
    //$cliente = new nusoap_client("http://localhost:8080/localtest/serviciosWeb/servicio.php");
    
    $cliente = new nusoap_client("../serviciosweb/servicio.wsdl",true);
    
    $error = $cliente->getError();
    if ($error) {
        echo "<h2>Error:</h2>" . $error;
    }
      
    $result = $cliente->call("getDatos");
  
           $imagen=$result[0];
           $nombre=$result[1];
           $marca=$result[2];
           $costo=$result[3];
      
      
if($result == null){
   echo "Datos nulos!";

}
else{
    if ($cliente->fault) {
        echo "<h2>Fault: Error en el servicio</h2>";
        print_r($result);        
    }
    else {
        $error = $cliente->getError();
        if ($error) {
            echo "<h2>Error:</h2>" . $error;
        }
        else {
            echo "
            <center>
            <h2>Promociones de Articulos !</h2>
            <br>
           
           <p><img src='../fotos/$imagen.jpg' whidth='50px' heigth='50px'></p>
           <br><br>
          <p><h2>$nombre</h2></p>
          <p><h2>Marca: $marca</h2></p>
          <p><h2>a solo $ $costo</h2></p>
          </center>
       ";
                                 
        }
    }
  }
?>