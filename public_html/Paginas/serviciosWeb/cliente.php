<?php
    require_once "../lib/nusoap.php";
    
    $cliente = new nusoap_client("http://localhost:8080/Paginas/serviciosWeb/servicio.php");
    
    //$cliente = new nusoap_client("servicio.wsdl",true);
    
    $error = $cliente->getError();
    if ($error) {
        echo "<h2>Error:</h2>" . $error;
    }
      
    $result = $cliente->call("ConsultaDeLosMejoresCostos", array("generoIn" => "caballero"));
      
if($result == null)
   echo "<br><br><br><center><h2>Datos nulos!</h2></center>";
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
            echo "<h2>Datos</h2>";
            for ($i=0; $i < count($result); $i++) { 
              $marca=$result[$i]->marca;
              $nombre=$result[$i]->nombre;
              $costo=$result[$i]->costo;
              $imagen=$result[$i]->imagen;
 
    echo "Id: <strong>$marca</strong> - nombre: <strong>$nombre</strong>, costo: <strong>$costo</strong><br/>";
  }
            }                        
        }
    }
  
?>