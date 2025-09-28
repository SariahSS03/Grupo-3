<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";
session_start();

$conexion = new mysqli($servername, $username, $password, $dbname);

$Clase_ID= $_GET['ID_clase'];
$CI_estudiante $_GET['CI_estudiante'];

$sql= "DELETE FROM clases_has_cuenta where Clases_ID = $Clase_ID AND Cuenta_User = $CI_estudiante ";
if($conexion->query($sql)){
      header('Location:/grupo-3/Proyecto3.1/Profesor/Personasprofesor.php');
 }
?>