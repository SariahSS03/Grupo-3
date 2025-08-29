<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $direccion="localhost";
        $usuario="root";
        $contrasena="";
        $dbname="proyecto3"; 
        
        $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
        if($conexion->error){
            echo"Hubo un error al conectar a la base de datos";
        }
        session_start();
        if($_SESSION['rol']==1 ){
            header('Location: Tareasestudiante.php');
        }
        ?>
        <a href="creartarea.php" id="a">Crear Tarea</a>
        <?php
        session_start();
        $User=$_SESSION['CI'];
        $ID=$_GET['ID'];
        $sql="SELECT*FROM Tarea   WHERE idTarea='$ID'";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows>0){
            while($fila=$resultado->fetch_assoc()){
                $Titulo = $fila['Titulo'];
                $Descripcion =$fila['Descripcion'];
                $Tema=$fila['Tema'];
                $Nota=$fila['Nota'];
            }
        }
     ?>
     <div>
        
    </div>
    
</body>
</html>