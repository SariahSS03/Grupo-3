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
            //define aque carpeta ira el archivo
         $target_dir="media/";
         //recupera el tipo de archivo
         $imageFileType= strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
         //define el nombre del archivo P-[id de l clase]-[id de la publicacion]
         $newFileName= "P-".$clases_ID."-".$conexion->insert_id.".".$imageFileType;
         //ruta completa de carpeta+nombre donde se guardara el archivo
         $target_file= $target_dir. $newFileName;  
         //variable que funcionara como bandera si el valor es 1 se puede subir, si es 0 algo paso
         $uploadOk = 1;
         echo $target_file;

         //verificar si el archivo existe
         if (file_exists($target_file)){
            echo"lo sentimos ya subiste este archivo";
            $uploadOk= 0;
         }


         //valida el tamaño
         if ($_FILES["fileToUpload"]["size"]> 50000000){
            echo "lo sentimos, tu archivo es muy grande";
            $uploadOk = 0;
            }

         // subir archivo
         if ($uploadOk == 0){
            echo"ocurrio algun error";
         }else{
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
               echo"no se pudo subir tu archivo";
            }
             header("Location: aulaoriginal.php?ID=$clases_ID");
         }
      }else{
      if($conexion->error){
               echo"Hubo un error al publicar en anuncio";
         }
      }
 }
}
 $conexion->close();
?>