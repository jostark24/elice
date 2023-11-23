<?php 
$nom= $_POST['nom'];
$destinatario = "josumereyes@outlook.com"; 
$asunto = $_POST['asunto']; 
$cuerpo = 'Mensaje'.$_POST['mensaje'].' RFC: '.$_POST['rfc'].' correo: '.$_POST['mail'].' Empresa: '.$_POST['empresa'].'  tel:'.$_POST['tel'].' nombre: '.$_POST['nom'].'  domicilio: '.$_POST['domi']; 

$request=mail($destinatario,$asunto,$cuerpo);
if($request){
	header('Location: index.php#color-nav-2');
}else{
	header('Location: index.php?ok=0');
}
?>