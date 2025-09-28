<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";

$conexion = new mysqli($servername, $username, $password, $dbname);
if($conexion->connect_error){
    echo"hubo un error";
}
$Titulo = $_POST['Titulo'];
$Descripcion =$_POST['Descripcion'];
$Nota=$_POST['Nota'];
$FechadeEntrega=$_POST['FechadeEntrega'];
$instrucciones=$_POST['Instrucciones'];
$sql="UPDATE Tarea SET Titulo='$Titulo',Descripcion='$Descripcion',Nota='$Nota',FechadeEntrega='$FechadeEntrega',Instrucciones='$Instrucciones'";
if($conexion->query($sql)){
      header('Location:/grupo-3/Proyecto3.1/Profesor/TrabajodeClase.php');
    }
 ?>