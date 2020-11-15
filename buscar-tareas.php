<?php

include('conexion.php');

$buscar= $_POST['buscar'];

if(!empty($buscar)){

    $sql = "SELECT * FROM tareas WHERE  nombre LIKE '$buscar%'";

    $resultado = mysqli_query($conexion,$sql);
    if(!$resultado){
        die ("Error en la consulta ".mysqli_error($conexion));
    }
    
    $json = array();
    while($fila = mysqli_fetch_array($resultado)){
        $json[] = array(

            'nombre' => $fila['nombre'],
            'descripcion' => $fila['descripcion'],
            'id'=> $fila['id']

        );

        $jsonstring = json_encode($json);
        echo $jsonstring;

    }
}

?>