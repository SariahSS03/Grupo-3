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
   $CI=$_POST['CI'];
   $Rude=$_POST['Rude'];

   $conexion = mysqli_connect("localhost","root","","proyecto3");
   if(!$conexion){
      echo"error en la conexion".mysqli_error();
      die();   
   }
   $sql=" SELECT * FROM Cuenta WHERE User='$CI' AND Contrasena='$Rude'";
   $resultado=mysqli_query($conexion,$sql);
   if(!empty($resultado)&& mysqli_num_rows($resultado)>0){
      $fila= mysqli_fetch_assoc($resultado);
      $_SESSION['CI']=$fila['User'];
      $_SESSION['Rude']=$fila['contrasena'];
      $_SESSION['rol']=$fila['rol'];
      if($_SESSION['rol']==1 ){
         header('Location: inicioestudiante.php');
      }
      if($_SESSION['rol']==2 ){
         header('Location: inicioprofesor.php');
      }
   }else{
      header('Location: iniciarsesion.php');
   }
   ?>
</body>
</html>