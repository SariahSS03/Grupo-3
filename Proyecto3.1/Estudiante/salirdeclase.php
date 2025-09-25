<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";
session_start();

$conexion = new mysqli($servername, $username, $password, $dbname);

$CI=$_GET['CI'];
$Clase_ID= $_GET['ID_Clase'];

$sql= "DELETE FROM clases_has_cuenta where Clases_ID = $Clase_ID AND Cuenta_User = $CI ";
if($conexion->query($sql)){
    
      header('Location:inicioestudiate.php');
 }

?>