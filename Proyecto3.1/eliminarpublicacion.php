<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";
 
$conexion = new mysqli($servername, $username, $password, $dbname);
session_start();
$CI=$_SESSION['CI'];
$ID_publicacion= $_GET['ID_publicacion'];
$sql1="SELECT*FROM Publicaciones WHERE id='$ID_publicacion'";
$resultado=mysqli_query($conexion,$sql1);
if(!empty($resultado)&& mysqli_num_rows($resultado)>0){
    $fila= mysqli_fetch_assoc($resultado);
    $ID_clase=$fila['Clases_ID'];
    $ID_publicacion=$fila['id'];
    $sql= "DELETE FROM Publicaciones WHERE id = '$ID_publicacion'";
    if($conexion->query($sql)){
            header("Location:aulaoriginal.php?ID=".$ID_clase);
    }else{
        echo"Error al salir de la clase: " . $conexion->error; 
    }
 }
?>