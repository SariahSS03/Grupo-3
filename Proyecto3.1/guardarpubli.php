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

if ($res2 && mysqli_num_rows($res2) = 1) { $row2 = mysqli_fetch_assoc($res2);
    $nombre=$row2['apellidos']." ". $row2['nombres'];

}
$idClases =$_POST['id'];
 $sql ="INSERT INTO publicaciones (contenido, fechaC, nombre, clases_id) VALUES ('$contenido', '$fechaC', '$nombre', '$idClases')";
if (mysqli_query($conn, $sql))

$target_dir="../media/";
$imageFileType= strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));
$newFileName= "P-".$idClases."-".$conn->insert_id.".".$imageFileType;
$target_file= $target_dir. $newFileName;
$uploadOk = 1;

echo $target_file;
if (file_exists($target_file)){
    echo"lo sentimos ya subiste este archivo";
    $uploadOk= 0;
}
if ($uploadOk == 0){
    echo"ocurrio algun error.";

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
}

?>





































































