<?php

include('conexion.php');

$id = $_POST['id'];

$sql= "select * from tareas where id = $id";

$resultado = mysqli_query($conexion,$sql);

if(!$resultado){

    die('Fallo en la consulta');
}

$json = array();

while($fila=mysqli_fetch_array($resultado)){ 

    $json[] = array(
            'nombre'=> $fila['nombre'],
            'descripcion' => $fila['descripcion'],
            'id' => $fila['id']

        );

    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}

?>