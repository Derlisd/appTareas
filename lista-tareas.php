<?php

include('conexion.php');

$sql='SELECT * FROM tareas';
$respuesta = mysqli_query($conexion,$sql);

if(!$respuesta){

    die('Fallo en la consulta');
}
$json = array();
while($fila = mysqli_fetch_array($respuesta)){
    $json[] =  array(

        'nombre' => $fila['nombre'],
        'descripcion' => $fila['descripcion'],
        'id' => $fila['id']
    );
      
}

$jsonstring = json_encode($json);
echo $jsonstring;
?>