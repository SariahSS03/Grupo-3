<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";
session_start();

$conexion = new mysqli($servername, $username, $password, $dbname);

$CI=$_SESSION['CI'];
$Clase_ID= $_GET['ID_Clase'];

$sql= "DELETE FROM clases_has_cuenta WHERE Clases_ID = $Clase_ID AND Cuenta_User = $CI ";
if($conexion->query($sql)){
      if($_SESSION['rol']==1 ){
            header('Location:/grupo-3/Proyecto3.1/Estudiante/inicioestudiante.php');
            }
            if($_SESSION['rol']==2 ){
               header('Location: /grupo-3/Proyecto3.1/Profesor/inicioprofesor.php');
            }
            if($_SESSION['rol']==3 ){
               header('Location:/grupo-3/Proyecto3.1/Administrador/Administrador.php');
            }
 }else{
    echo"Error al salir de la clase: " . $conexion->error; }

?>