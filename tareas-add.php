<?php
include('conexion.php');

if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO tareas(nombre,descripcion)values('$nombre', '$descripcion')";

    $resultado = mysqli_query($conexion,$sql);
    if(!$resultado){
        die('error en la insercion');
    }
    echo " Los datos se insertaron correctamente !!!";
   }