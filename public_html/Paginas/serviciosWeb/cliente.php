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
        <div id='servicio'>
            <h3>Promocion</h3>         
            <img src='../fotos/$imagen' width='30px' heigth='30px'>
            <br><br>
            <p><h4>Marca: $marca <br>Costo: $costo</h2></p>
        </div>
    
    <style>
          #servicio{
            clear:both;
            text-align:left;
            margin-left:0px;
            height:100px;
          }

          h3{
            color:rgb(51,255,0);
          }
          
          #servicio img{
            margin-left:0px;
            margin-top:2px;
            width:10em;
            height:10em;
            margin-right: 25px;

          }

          p{
            clear:both;
            float:left;
            margin-top:0px;
           margin-left:3px;
           
          }

          h4{
            font-size: 14px;
          }

         

    </style>

       ";
                                 
        }
    }
  }
?>