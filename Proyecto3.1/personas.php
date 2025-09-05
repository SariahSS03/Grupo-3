<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";


 $conexion = new mysqli($servername, $username, $password, $dbname);
 if($conexion->connect_error){
    die ("Conexion fallida: " . $conexion->connect_error);
 }
session_start();
$ID=$_GET['ID'];   
$sql=" SELECT * FROM clases_has_cuenta WHERE Clases_ID='$ID' ";
$resultado=$conexion->query($sql);
if($resultado -> num_rows >0){
   While($fila=$resultado ->fetch_assoc()){
      $Cuenta_User=$fila['Cuenta_User'];
      $sql2="SELECT*FROM Informacion WHERE CI='$Cuenta_User'";
      $resultado2=$conexion->query ($sql2);
      if ($resultado2->num_rows>0){
             While($fila2=$resultado2->fetch_assoc()){
                $Nombres=$fila2['Nombres'];
                $Apellidos=$fila2['Apellidos'];
                $Direccion=$fila2['Direccion'];
                $Fecha=$fila2['Fechadenacimiento'];
                $Celular=$fila2['Telefono'];
                $Curso=$fila2['Curso'];
                $Rude=$fila2['Rude'];
                ?>
               <h1>Te damos la bienvenida <?=$Nombres?> <?=$Apellidos?></h1> 
         <?php
         }
      }
   }
}
   ?>
   
</body>
</html>