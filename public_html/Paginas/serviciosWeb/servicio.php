<?php




    require_once "../lib/nusoap.php";
      
    

        function getDatos($parametro1) {
          $datos =  array();
        if ($parametro1 == "abc") {
         $datos[] = "Dato 1";
          $datos[] = "Dato 8";
         $datos[] = "Dato 3";
         $datos[] = "Dato999";
            //return join(",", $datos);
        return $datos;
        }
        else {
        return null;
        }
    }



    function ConsultaDeLosMejoresCostos($generoIn){
    	
       
    	$arreglo = array(); //arreglo para guardar los datos
    	

    	// Conectamos y seleccionamos la base de datos 
        /* require_once '../procesar/config.php'
    	$conexion =  mysqli_connect("127.0.0.1","root","root","boutique");
    	$consulta = ;
    	$consulta = mysqli_query($conexion,$consulta);*/
    	$link = mysql_connect("127.0.0.1","root","root") or die("Error: ".mysql_error()); 
       $ddbb = mysql_select_db("boutique") or die("Error: ".mysql_error());

// Realizar una consulta MySQL 
      $query = "SELECT marca, nombre,costo,imagen FROM productos WHERE genero='$generoIn' ORDER BY costo ASC LIMIT 5"; 
       $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

        
        while ($fila= mysql_fetch_array($result)){
          $marca=$fila['marca'];   
          $prenda=$fila['nombre']; 
          $costo=$fila['costo'];
          $imagen=$fila['imagen'];
 
        //cada registro de información se introduce en un arreglo asociativo
        $arreglo[] = array('marca'=>$marca, 'nombre'=>$nombre, 'costo'=>$costo, 'imagen'=>$imagen);
        }  
        return $arreglo;
        }
        
#----------------------------------------------FIN DE LA FUNCION---------------------------------------------------------------------------------
            $server = new soap_server();
            $server->configureWSDL("Servicio web de Prendas con los mejores costos!", "urn:datos");
//DEFINICION DE TIPOS EN NUESTRO SERVICIO WEB
        //configurar la estructura de los datos, 
//este arreglo es de tipo asociativo y contiene el nombre y tipo de dato.
$server->wsdl->addComplexType(
         'Estructura',
         'complexType',
         'struct',
         'all',
         '',
         array(
         'marca' => array('name' => 'marca', 'type' => 'xsd:string'),
         'nombre'=>array('name' => 'nombre', 'type' => 'xsd:string'),
         'costo'=>array('name' => 'costo', 'type' => 'xsd:string'),
         'imagen'=>array('name'=>'imagen', 'type'=> 'xsd:string')
          )
          );
 
//configurar arreglo de la estructura
$server->wsdl->addComplexType(
      'ArregloDeEstructuras',
      'complexType',
      'array',
      'sequence',
      '',
      array(),
      array(
        array('ref' => 'SOAP-ENC:arrayType',
          'wsdl:arrayType' => 'tns:Estructura[]'
        )
      ),'tns:Estructura');
 


    
      

    //$server->register("getDatos");

    
      //DEFINICION DEL METODO DEL SERVICIO WEB
    $server->register(
    	"ConsultaDeLosMejoresCostos", //nombre del metodo
        array("generoIn" => "xsd:string"), //parametros de entrada
        array("return" => "tns:ArregloDeEstructuras"),//parametros de salida
        "urn:datos", //nombre del workspace
        "urn:datos#ConsultaDeLosMejoresCostos", //accion del soap
        "rpc",  //estilo
        "encoded", // uso
        "Servicio web de prendas con los mejores costos!" //documentacion
        );


      if (isset($HTTP_RAW_POST_DATA)) { 
      $input = $HTTP_RAW_POST_DATA; 
       }else{ 
      $input = implode("\r\n", file('php://input')); 
       }
 
      $server->service($input);
       ?>