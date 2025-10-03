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
   $stmt=$conexion->prepare($sql);
   $stmt->bind_param("ii",$CI,$Rude);
   $stmt->executive();
   $resultado=$stmt->get_result();
   if(!empty($resultado)&& mysqli_num_rows($resultado)>0){
      $fila= mysqli_fetch_assoc($resultado);
      $_SESSION['CI']=$fila['User'];
      $_SESSION['Rude']=$fila['contrasena'];
      $_SESSION['rol']=$fila['rol'];
      $_SESSION['Bloqueado']=$fila['Bloqueado'];
      if($_SESSION['Bloqueado']=='Bloqueado' ){
         header('Location:/grupo-3/Proyecto3.1/Estudiante/iniciarsesion.php');
        }else{
         if($_SESSION['rol']==1 ){
            header('Location:/grupo-3/Proyecto3.1/Estudiante/inicioestudiante.php');
            }
            if($_SESSION['rol']==2 ){
               header('Location: /grupo-3/Proyecto3.1/Profesor/inicioprofesor.php');
            }
            if($_SESSION['rol']==3 ){
               header('Location:/grupo-3/Proyecto3.1/Administrador/Administrador.php');
            }
         }
      }else{
            header('Location:/grupo-3/Proyecto3.1/Estudiante/iniciarsesion.php');
      } 
      
      
   ?>
</body>
</html>