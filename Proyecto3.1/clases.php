<?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="proyecto3"; 
        
        $conexion= new mysqli($servername, $username, $password, $dbname);
        session_start();
        $nombre = $_POST['Nombre'];
        $codigo =$_POST['Codigo'];
        $profesor=$_SESSION['CI'];
        $sql="INSERT INTO Clases (Nombre,Codigo,Profesor)VALUES('$nombre','$codigo','$profesor')";
        if($conexion->query($sql)===TRUE){
        
                header('Location:aulaoriginal.php?ID='.$conexion->insert_id);
        }else{
        echo"Error ". $sql . "<br>" . $conexion->connect_error;
        }
        $conexion->close();
?>