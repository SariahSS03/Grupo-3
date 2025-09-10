<?php
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";

$conexion = new mysqli($servername, $username, $password, $dbname);
if($conexion->connect_error){
    echo"hubo un error";
}
$CI= $_SESSION['CI'];
date_default_timezone_set('America/La_Paz');
$fechaC =date("Y-m-d H:i:s");

$sq12 ="SELECT*FROM informacion WHERE CI= '$CI' LIMIT 1";
$res2 = mysqli_query($conn, $sql2);

if ($res2 && mysqli_num_rows($res2) = 1) { 
    $row2 = mysqli_fetch_assoc($res2);
    $nombre=$row2['apellidos']." ".$row2['nombres'];

}
$idClases =$_POST['id'];

//2
 $sql ="INSERT INTO publicaciones (contenido, fechaC, nombre, clases_id) VALUES ('$contenido', '$fechaC', '$nombre', '$idClases')";
 //3
if (mysqli_query($conn, $sql)){
//4
    //define aque carpeta ira el archivo
$target_dir="../media/";
//recupera el tipo de archivo
$imageFileType= strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
//define el nombre del archivo P-[id de l clase]-[id de la publicacion]
$newFileName= "P-".$idClases."-".$conn->insert_id.".".$imageFileType;
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
if ($_FILES["filetoUpload"]["size"]> 50000000){
     echo "lo sentimos, tu archivo es muy grande";
     $uploadOk = 0;
     }

// subir archivo
if ($uploadOk == 0){
    echo"ocurrio algun error";
}else{
    if (move_upload_files($_FILES["filetoupload"]["tmp_name"], $target_file)){
        echo"no se pudo subir tu archivo";

    }
}
header("Location:../clase/tablon.php?id=$idClases");
}else





    /*echo"ocurrio algun error.";

    }else{
        if(move_uploaded_file($_FILES["fileToUpload"]["tap_name"], $target_file)){
        echo "The file". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " se subio.";
        }else{
    echo" no se pudo subir su archivo."
}
}
header("Location: ../clase/tablon.php?id=$idClases");
} else {
    echo"error: ". mysqli_error($conn)
}*/

?>





































































