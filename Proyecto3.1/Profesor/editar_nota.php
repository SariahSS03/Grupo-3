<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";

$conexion = new mysqli($servername, $username, $password, $dbname);
if($conexion->connect_error){
    echo"hubo un error";
}
 $nota= $_POST['nota'];
 $ID_tarea =$_POST['ID_tarea'];
 $User=$_POST['CI_estudiante'];
$sql="UPDATE Cuenta_has_Tarea SET Nota='$nota' WHERE Cuenta_User='$User' AND Tarea_idTarea='$ID_tarea' ";
if($conexion->query($sql)){
      header('Location:/grupo-3/Proyecto3.1/Profesor/Vertareaprofesor.php?IDtarea='.$ID_tarea);
    }
 ?>