<?php
  $tipo=$_GET['servicio']; $ser;
  switch ($tipo) {
  	case 1:
  		$ser='Sistema de tierras';
  		break;
  	case 2:
  	     $ser='Líneas y distribución eléctrica';
  	     break;
  	case 3:
  	     $ser='Subestaciones eléctricas';
  	     break;
  	case 4:
  	     $ser='Servicio a transformadores';
  	     break;
  	case 5:
  	     $ser='Control eléctrico';
  	     break;
  	case 6:
  	     $ser='Instalaciones eléctricas industriales';
  	     break;
  	case 7:
  	     $ser='Energías alternas';
  	     break;
  	default:
  		  $ser=' ';
  		break;
  }
  setcookie("servicio",$ser,time() + 900);
  header('Location: contacto.php');
?>