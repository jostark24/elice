<?php
 class metodos{
     
      private $db="elice";
     
      function conectarBD(){
        $conexion= mysqli_connect("localhost","josue","")or die ("no se contecto a la base de datos");
        $base= mysqli_select_db($conexion,$this->db);
          
        $conec = array();
        $conec[0]= $conexion;
        $conec[1]= $base;
        
        return $conec;
    }
 }
?>