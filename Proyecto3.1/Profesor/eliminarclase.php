<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";
session_start();

$conexion = new mysqli($servername, $username, $password, $dbname);
$CI=$_SESSION['CI']; 
$Clase_ID= $_GET['ID_Clase'];
$sql2= "DELETE FROM clases_has_cuenta WHERE Clases_ID = $Clase_ID AND Cuenta_User = $CI ";

$sql4="DELETE FROM Tarea WHERE Clases_ID=$Clase_ID ";
$sql5="DELETE FROM Publicaciones WHERE Clases_ID=$Clase_ID ";
$sql3="DELETE FROM Clases WHERE ID=$Clase_ID ";
if ($conexion->query($sql2)){
    if($conexion->query($sql3)){
      if($conexion->query($sql4)){
        if($conexion->query($sql5)){
       header('Location:/grupo-3/Proyecto3.1/Profesor/inicioprofesor.php');
 }
}
}

}else{
   header('Location:/grupo-3/Proyecto3.1/Profesor/inicioprofesor.php');
 }
 
?>