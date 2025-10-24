<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";

 $conexion = new mysqli($servername, $username, $password, $dbname);
 $nombres = $_POST['Nombres'];
 $apellidos =$_POST['Apellidos'];
 $telefono=$_POST['Telefono'];
 $curso=$_POST['Curso'];
 $fechadenacimiento =$_POST['Fechadenacimiento'];
 $direccion=$_POST['Direccion'];
 $RUDE=$_POST['Rude'];
 $CI=$_POST['CI'];
 
 $sql="INSERT INTO Informacion  (Nombres,Apellidos,Telefono,Curso,FechadeNacimiento,Direccion,Rude,CI) 
        VALUES('$nombres','$apellidos','$telefono','$curso','$fechadenacimiento','$direccion','$RUDE','$CI')";
 $sql2="INSERT INTO Cuenta (User,Contrasena,rol)VALUES('$CI','$RUDE','1')";
 if($conexion->query($sql)){
    if($conexion->query($sql2)){
      header('Location:/grupo-3/Proyecto3.1/Estudiante/mostrardatos.php');
    }
 }else{
   header('Location:/grupo-3/Proyecto3.1/Estudiante/registro.php');
 }
 $conexion->close();
?>
