<?php 

include('conexion.php');

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = " DELETE FROM tareas where id = $id";

    $resultado = mysqli_query($conexion,$sql);

    if(!$resultado){

        echo ' Error en la eliminacion'. mysqli_error($conexion);
    }

    echo 'Tarea eliminada';

}
?>