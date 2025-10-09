<?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="proyecto3"; 
        $conexion= new mysqli($servername, $username, $password, $dbname);
        session_start();

        $Titulo = $_POST['Titulo'];
        $Descripcion =$_POST['Descripcion'];
        $Nota=$_POST['Nota'];
        $FechadeEntrega=$_POST['FechadeEntrega'];
        $instrucciones=$_POST['Instrucciones'];
        $idClase=$_POST['ID'];
        $sql="SELECT * FROM Clases WHERE ID='$idClase' ";
                $resultado= $conexion->query ($sql);
                if($resultado ->num_rows >0){
                while ($fila=$resultado->fetch_assoc()){
                        $clases_ID=$idClase;
                        $clases_profesor=$fila['Profesor'];
                        $sql2="INSERT INTO Tarea (Titulo,Descripcion,Nota,Clases_ID,Clases_Profesor,Instrucciones,FechadeEntrega)VALUES('$Titulo','$Descripcion','$Nota','$clases_ID','$clases_profesor','$instrucciones','$FechadeEntrega')";
                        if($conexion->query($sql2)){
                                //define aque carpeta ira el archivo
                                $target_dir="../media/";
                                //recupera el tipo de archivo
                                $imageFileType= strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
                                //define el nombre del archivo T-[id de l clase]-[id de la tarea]
                                $newFileName= "T-".$clases_ID."-".$conexion->insert_id.".".$imageFileType;
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
                               header('Location:/grupo-3/Proyecto3.1/Profesor/Vertareaprofesor.php?IDtarea='. $conexion->insert_id);
                        }
                        }else{
                                echo"Error ". $sql . "<br>" . $conexion->connect_error;
                        }
                }
        }

?>