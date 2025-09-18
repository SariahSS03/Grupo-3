<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";

$conexion = new mysqli($servername, $username, $password, $dbname);
if($conexion->connect_error){
    echo"hubo un error";
}
 $nombres = $_POST['Nombres'];
 $apellidos =$_POST['Apellidos'];
 $telefono=$_POST['Telefono'];
 $curso=$_POST['Curso'];
 $fechadenacimiento =$_POST['FechadeNacimiento'];
 $direccion=$_POST['Direccion'];
$sql="UPDATE Informacion SET Nombres='$nombres',Apellidos='$apellidos',Curso='$curso',FechadeNacimiento='$fechadenacimiento',Direccion='$direccion'";
if($conexion->query($sql)){
      header('Location:informacion.php');
    }
 ?>