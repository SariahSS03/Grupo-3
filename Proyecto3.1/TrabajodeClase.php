<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
            margin:none;
            display: grid;
            grid-template-rows: 40% 30%;
            grid-template-columns: 16% 84% ;
            grid-template-areas: "principal principal"
                                " opciones Tareas";
                               
        }
    .Tareas{
            grid-area: Tareas;
        }
</style>
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
    <?php
           include("inicio2.php");  
    ?>
    <?php
        $ID=$_GET['ID'];
        $sql="SELECT*FROM Clases   WHERE ID='$ID'";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows>0){
            while($fila=$resultado->fetch_assoc()){
                $id=$fila['ID'];
            }
        }
            ?>
<div class="Tareas"> 
    <a href="creartarea.php?ID=<?=$id?>" id="a">Crear Tarea</a>
        <?php
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
     ?>
     
     <div id="Tarea1">
                        <h2><?=$Titulo?></h2>
                        <h2><?=$Descripcion?></h2>
                        <h2><?=$Tema?></h2>
                        <h2><?=$Nota?></h2>
                        <a href="editartarea.php">Editar</a>     
                </div>
    <?php
            }
        }
     ?>
</div>
    
</body>
</html>