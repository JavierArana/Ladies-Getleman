<?php
    require_once "../lib/nusoap.php";
    require_once "../procesar/config.php";
      


        function getDatos($parametro1) {

         $conexion= mysqli_connect(config::$servidor,config::$usuario,config::$password,config::$baseDeDatos);
         $consulta="SELECT imagen,nombre,marca,costo FROM productos ORDER BY costo ASC LIMIT 1";
         $result=mysqli_query($conexion,$consulta);

          $datos =  array();
         
        while($arreglo=mysqli_fetch_array($result)) {
        
         $datos[0]=$arreglo[0];
         $datos[1]=$arreglo[1];
         $datos[2]=$arreglo[2];
         $datos[3]=$arreglo[3];
         }
       
        mysqli_close($conexion);
        mysqli_free_result($result);

         return $datos;

    }


    
      
    $server = new soap_server();
    //$server->register("getDatos");

    $server->configureWSDL("Servicio web de Prendas con los mejores costos!", "urn:datos");
      
    $server->register("getDatos",
        array("parametro1" => "xsd:string"),
        array("return" => "xsd:Array"),
        "urn:datos",
        "urn:datos#getDatos",
        "rpc",
        "encoded",
        "Servicio web de prendas con los mejores costos!");


if (isset($HTTP_RAW_POST_DATA)) { 
  $input = $HTTP_RAW_POST_DATA; 
}else{ 
  $input = implode("\r\n", file('php://input')); 
}
 
$server->service($input);
?>