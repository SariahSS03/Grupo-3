<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";

$conexion = new mysqli($servername, $username, $password, $dbname);
if($conexion->connect_error){
    echo"hubo un error";
}
$ID_tarea=$_GET['ID_tarea'];
$ID_clase=$_GET['ID_clase'];
$Titulo = $_POST['Titulo'];
$Descripcion =$_POST['Descripcion'];
$Nota=$_POST['Nota'];
$FechadeEntrega=$_POST['FechadeEntrega'];
$instrucciones=$_POST['Instrucciones'];
$sql="UPDATE Tarea WHERE idTarea=$ID_tarea SET Titulo='$Titulo',Descripcion='$Descripcion',Nota='$Nota',FechadeEntrega='$FechadeEntrega',Instrucciones='$Instrucciones'";
if($conexion->query($sql)){
      header('Location:../Profesor/TrabajodeClase.php?ID='.$ID_clase);
    }
 ?>