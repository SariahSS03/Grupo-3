<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<?php
session_start();
    $codigo =$_POST['Codigo'];

   $conexion = mysqli_connect("localhost","root","","proyecto3");
   if(!$conexion){
      echo"error en la conexion".mysqli_error();
      die();   
   }

   $sql=" SELECT * FROM Clases WHERE Codigo='$codigo'";
   $resultado= $conexion->query ($sql);
   if($resultado ->num_rows >0){
      while ($fila=$resultado->fetch_assoc()){
         $clase_ID=$fila['ID'];
         $Cuenta_User=$_SESSION['CI'];
         $sql2="INSERT INTO Clases_has_Cuenta (Clases_ID, Cuenta_User) VALUES ('$clase_ID', '$Cuenta_User' )";
         if ($conexion->query ($sql2)===TRUE){
             header("Location:/grupo-3/Proyecto3.1/aulaoriginal.php?ID=$clase_ID");
         }
      }
      
      }else{
      header('Location:/grupo-3/Proyecto3.1/Estudiante/unirseaclase.php');
      }
?>
</body>
</html>