<?php
include('conexion.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE tareas set nombre = '$nombre' ,descripcion = '$descripcion' where id = $id";

$respuesta = mysqli_query($conexion,$sql);

if(!$respuesta){

    die('La consulta dio un error'.mysqli_error($conexion));
}
echo ' Modificacion exitosa';

?>