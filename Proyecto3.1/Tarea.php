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
        $FechadeEntrega=$_POST['FechadeEntrega'];
        $ID=$_POST['ID_Tarea'];
        
        $sql="SELECT*FROM Clases WHERE ID='$ID'";
                $resultado= $conexion->query ($sql);
                if($resultado ->num_rows >0){
                while ($fila=$resultado->fetch_assoc()){
                        $clases_ID=$ID;
                        $clases_profesor=$fila['Profesor'];
                        $sql2="INSERT INTO tarea (Titulo,Descripcion,Tema,Nota,Clases_ID,Clases_Profesor)VALUES('$Titulo','$Descripcion','$Tema','$Nota','$clases_ID','$clases_profesor')";
                        if($conexion->query($sql2)===TRUE){
                                header('Location:TrabajodeClase.php?ID='.$clases_ID);
                        }else{
                                echo"Error ". $sql . "<br>" . $conexion->connect_error;
                        }
                }
                }
?>