<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";

 $conexion = new mysqli($servername, $username, $password, $dbname);
$Texto = $_POST['Publicaciones'];
date_default_timezone_set('America/La_Paz');
$today = date("Y-m-d H:i:s"); 
session_start();   
$ID=$_POST['ID'];
$sql="SELECT*FROM Clases WHERE ID='$ID'";
   $resultado= $conexion->query ($sql);
   if($resultado ->num_rows >0){
      while ($fila=$resultado->fetch_assoc()){
         $clases_ID=$ID;
         $Informacion_CI=$_SESSION['CI'];
         $clases_Profesor=$fila['Profesor'];
         $sql2="INSERT INTO Publicaciones (Texto, FechaCreacion, Informacion_CI, Clases_ID, Clases_Profesor) VALUES ('$Texto', '$today', '$Informacion_CI',  '$clases_ID',  '$clases_Profesor')";
         if ($conexion->query ($sql2)===TRUE){
             header("Location: aulaoriginal.php?ID=$clases_ID");
         }
      } 
      }else{
   if($conexion->error){
            echo"Hubo un error al publicar en anuncio";
        }
 }
 $conexion->close();
?>