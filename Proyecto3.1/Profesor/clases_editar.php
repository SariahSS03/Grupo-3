<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";

$conexion = new mysqli($servername, $username, $password, $dbname);
if($conexion->connect_error){
    echo"hubo un error";
}
 session_start();
$nombre = $_POST['Nombre'];
$codigo =$_POST['Codigo'];
$color=$_POST['color'];
$inicial=$_POST['Inicial'];
$curso=$_POST['Curso'];
$profesor=$_SESSION['CI'];
$id_clase= $_GET['id_clase'];
$sql="UPDATE Clases  SET Nombre='$nombre',Codigo='$codigo',Color='$color',Inicial='$inicial',Curso='$curso' WHERE ID=$id_clase ";
echo $sql;
if($conexion->query($sql)){
      header('Location:/grupo-3/Proyecto3.1/Profesor/inicioprofesor.php');
    }
 ?>