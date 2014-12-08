<?php
    require_once "../lib/nusoap.php";
    
    $cliente = new nusoap_client("http://localhost:8080/localtest/serviciosWeb/servicio.php");
    
    $cliente = new nusoap_client("servicio.wsdl",true);
    
    $error = $cliente->getError();

    if ($error) {
        echo "<h2>Error:</h2>" . $error;
    }

    $result = $cliente->call("ConsultaDeLosMejoresCostos", array("generoIn" => "abc"));

    if($result == null){
    echo "Datos nulos!";
     }else{
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
            echo "<h2>Lista de productos con mejores costos</h2>";
            for($i=0; $i < count($result); $i++) { 
            
               $marca=$result[$i]->marca;
              $nombre=$result[$i]->nombre;
              $costo=$result[$i]->costo;
              $imagen=$result[$i]->imagen;
            echo "Marca: <strong>$marca</strong> - Nombre: <strong>$nombre</strong>, costo: <strong>$imagen</strong><br/>"
             }                        
        }
    }
  }
?>