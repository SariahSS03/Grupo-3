<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";

 $conexion = new mysqli($servername, $username, $password, $dbname);
 if($conexion->connect_error);{
    die ("Conexion fallida: " . $conexion->connect_error);
 }
   
$sql=" SELECT * FROM Informacion ";
   $resultado=$conexion->query($sql);
   if($resultado -> num_rows >0){
      While($fila=$resultado ->fetch_assoc()){
         echo 
         $fila ['Nombres']. "<br>".
         $fila ['Apellidos']. "<br>".
         $CIpersona=$fila['CI'];
         echo "<a href='informacion.php?id=$CIpersona'> <button>mostrar</button></a> ";
      }
      }
   ?>
</body>
</html>