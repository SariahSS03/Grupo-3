<?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="proyecto3"; 
        
        $conexion= new mysqli($servername, $username, $password, $dbname);
        session_start();
        $Titulo = $_POST['Titulo'];
        $Descripcion =$_POST['Descripcion'];
        $Tema=$_POST['Tema'];
        $Nota=$_POST['Nota'];
        $sql="INSERT INTO Tarea (Titulo,Descripcion,Tema,Nota)VALUES('$Titulo','$Descripcion','$Tema','$Nota')";
        if($conexion->query($sql)===TRUE){

        header('Location:TrbajodeClase.php?id='.$conexion->last_id);
        }else{
        echo"Error ". $sql . "<br>" . $conexion->connect_error;
        }
        $conexion->close();
?>