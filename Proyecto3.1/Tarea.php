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
        $idTarea=$_POST['idTarea'];
        $ID=$_GET['ID'];
        $sql="SELECT*FROM Clases WHERE ID='$ID'";
                $resultado= $conexion->query ($sql);
                if($resultado ->num_rows >0){
                while ($fila=$resultado->fetch_assoc()){
                        $clases_ID=$ID;
                        $sql2="INSERT INTO Tarea (Titulo,Descripcion,Tema,Nota)VALUES('$Titulo','$Descripcion','$Tema','$Nota')";
                        if($conexion->query($sql2)===TRUE){
                                header('Location:TrabajodeClase.php?id='.$clases_ID.'&idTarea='.$idTarea);
                        }else{
                                echo"Error ". $sql . "<br>" . $conexion->connect_error;
                        }
                }
                }
?>