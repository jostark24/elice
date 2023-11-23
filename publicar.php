<?php
require_once('php/metodos.php');
$metodos= new metodos();
$conexion= $metodos->conectarBD();
  if(isset($_POST['frame'])){
  	  $postear= $_POST['frame'];
      $queryInsert="INSERT INTO post_fa (iframe,estatus) VALUES ('$postear',1)";
      $request= mysqli_query($conexion[0],$queryInsert);
      if($request){
      	header('Location: face.php?ok=1');
      }else{
      	header('Location: face.php?ok=2');
      }
  }
?>