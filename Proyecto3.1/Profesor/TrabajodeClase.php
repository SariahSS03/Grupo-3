<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
            display: grid;
            grid-template-rows:auto auto auto auto auto;
            grid-template-columns: 16% 84% ;
            grid-template-areas: "principal principal"
                              " opciones mn"
                                " opciones Tareas"
                                " opciones tareascreadas";
            margin: 0px;
        }
    .Tareas{
            grid-area: Tareas;
    }
    .tareascreadas{
            grid-area: tareascreadas;
    }
        #Tarea1{
            background-color: #f0f0f0;
            border-bottom:solid black 5px;
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
        if($_SESSION['rol']==1 ){
            header('Location: Tareasestudiante.php?ID='.$ID);
        }
        ?>
<body>
<?php
   include("inicio2.php");  
?>
<div class="mn">
<?php
    include("subprofesor.php"); 
?> 
</div>
<?php
        $ID=$_GET['ID'];
        $sql1="SELECT*FROM Clases   WHERE ID='$ID'";
        $resultado1 = $conexion->query($sql1);
        if ($resultado1->num_rows>0){
            while($fila1=$resultado1->fetch_assoc()){
                $id=$fila1['ID'];
            }
        }
?>

<div class="Tareas"> 
    <a href="creartarea.php?ID=<?=$id?>" id="a">Crear Tarea</a>
</div>
<div class="tareascreadas">
        <?php
            $ID=$_GET['ID'];
            $sql2="SELECT*FROM tarea   WHERE Clases_ID='$ID'";
            $resultado2 = $conexion->query($sql2);
            if ($resultado2->num_rows>0){
                while($fila2=$resultado2->fetch_assoc()){
                    $idTarea=$fila2['idTarea'];
                    $Titulo=$fila2['Titulo'];
                    $Descripcion=$fila2['Descripcion'];
                    $Tema=$fila2['Tema'];
                    $Nota=$fila2['Nota'];
        ?>
     
            <div id="Tarea1">
                <a href="Vertarea.php?IDtarea=<?= $idTarea ?> & IDclase=<?=$ID?>"><h2><?=$Titulo?></h2></a>
                <a href="editartarea.php?IDtarea=<?= $idTarea?>">Editar</a>     
            </div>
    <?php
            }
        }
     ?>
</div>
    
</body>
</html>