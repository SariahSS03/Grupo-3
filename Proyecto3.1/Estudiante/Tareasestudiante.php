<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
            margin:none;
            display: grid;
            grid-template-rows: auto auto auto auto auto;
            grid-template-columns: auto auto ;
            grid-template-areas: "principal principal"
                              " opciones mn"
                                " opciones Tareas";
                               
        }
    .Tareas{
            grid-area: Tareas;
        }
</style>
</head>
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
        $ID=$_GET['ID'];
        if($_SESSION['rol']==2 ){
            header('Location: TrabajodeClase.php?ID='.$ID);
        }
?>

<body>
<?php
   include("inicio1.php");  
?>
<div class="mn">
<?php
    include("subestudiante.php"); 
?> 
</div>
<?php
        $ID=$_GET['ID'];
        $sql1="SELECT*FROM tarea   WHERE Clases_ID='$ID'";
        $resultado1 = $conexion->query($sql1);
        if ($resultado1->num_rows>0){
            while($fila1=$resultado1->fetch_assoc()){
                $Titulo = $fila1['Titulo'];
                $idTarea=$fila1['idTarea'];
?>
            <div id="Tarea1">
                <a href="VerTarea.php?IDtarea=<?=$idTarea?> & IDclase=<?=$ID?>">
                <h2><?=$Titulo?></h2>
                </a>     
            </div>
    <?php
            }
        }
     ?>
</div>
    
</body>
</html>