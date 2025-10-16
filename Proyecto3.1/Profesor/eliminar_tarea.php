<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";
session_start();

$conexion = new mysqli($servername, $username, $password, $dbname);
$ID_clase=$_GET['IDclase']; 
$ID_tarea= $_GET['IDtarea'];
$sql2= "DELETE FROM Cuenta_has_Tarea WHERE Tarea_idTarea = '$ID_tarea'";
$sql3="DELETE FROM Tarea WHERE idTarea='$ID_tarea' AND Clases_ID='$ID_clase' ";
if ($conexion->query($sql2)){
    if($conexion->query($sql3)){
      header('Location:/grupo-3/Proyecto3.1/Profesor/TrabajodeClase.php?ID='.$ID_clase);
 }
}else{
   header('Location:/grupo-3/Proyecto3.1/Profesor/TrabajodeClase.php?ID='.$ID_clase);
 }

?>