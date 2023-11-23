<?php
    require_once('php/metodos.php');
    $id_user= $_GET['id'];
    $metodos= new metodos();
    
    $conexion= $metodos->conectarBD();
    $query= "delete from post_fa where idpo=$id_user";
    mysqli_query($conexion[0],$query);
    header('Location: face.php');

?>