<?php
session_start();
    $direccion="localhost";
    $usuario="root";
    $contrasena="";
    $dbname="proyecto3"; 
    
    $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
    if($conexion->error){
        echo"Hubo un error al conectar a la base de datos";
    }if($_SESSION['rol']==2 ){
        header('Location:/grupo-3/Proyecto3.1/Profesor/TrabajodeClase.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .body-tareas-estudiante{
    margin:0px;
    display: grid;
    grid-template-columns: 13% 88%;
    grid-template-rows: 18% 18% auto auto auto;
    grid-template-areas: "principal principal"
                        "opciones mn"
                        "opciones Tareas";
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    background-color: #f8f8f8;                         
    }
        
    .tareasestudiantes{
        grid-area:Tareas;
        margin-top:20px;
    }
    .tarea-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        padding: 25px 16px;
        margin: 10px auto;
        width: 60% ;
        text-decoration: none;
        transition: background-color 0.2s ease;
    }

    .tarea-card a {
        color: inherit;
        text-decoration: none;
        display: block;
    }

    .tarea-contenido {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }

    .tarea-textos {
        flex: 1;
    }

    .tarea-titulo {
        font-size: 16px;
        margin: 0;
        font-weight: 500;
        color: #2c2c2c;
    }

    .tarea-fecha {
        font-size: 13px;
        color: #888;
        white-space: nowrap;
    }
    .titulo-seccion {
      font-size: 24px;
      font-weight: 500;
      margin-left:50px;
      margin-right:50px;
      margin-bottom: 20px;
      border-bottom: 1px solid #ddd;
      padding-bottom: 10px;
      color: #2c2c2c;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   }

</style>
</head>
<body class="body-tareas-estudiante">
<?php
   include("inicio1.php");  
?>
<nav class="mn">
<?php
    include("subestudiante.php"); 
?> 
</nav>
<div class="tareasestudiante">
    <h2 class="titulo-seccion">Trabajo de Clase</h2>
<?php
        $ID=$_GET['ID'];
        $sql1="SELECT*FROM tarea   WHERE Clases_ID='$ID' ORDER BY idTarea DESC";
        $resultado1 = $conexion->query($sql1);
        if ($resultado1->num_rows>0){
            while($fila1=$resultado1->fetch_assoc()){
                $Titulo = $fila1['Titulo'];
                $idTarea=$fila1['idTarea'];
                $fechadeentrega = $fila1['FechadeEntrega'];
?>
            <div class="tarea-card">
                <a href="../Estudiante/VerTarea.php?IDtarea=<?= $idTarea ?>">
                    <div class="tarea-contenido">
                        <div class="tarea-textos">
                            <h2 class="tarea-titulo"><?= $Titulo ?></h2>
                        </div>

                        <div class="tarea-fecha">
                            Publicado: <?=$fechadeentrega?>
                        </div>
                    </div>
                </a>
            </div>

    <?php
            }
        }
     ?>
</div>
    
</body>
</html>