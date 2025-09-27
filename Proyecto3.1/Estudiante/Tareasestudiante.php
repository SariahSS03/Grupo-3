<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .body-tareas-estudiante{
            margin:none;
            display: grid;
            grid-template-rows: auto auto auto auto auto;
            grid-template-columns: auto auto ;
            grid-template-areas: "principal principal"
                                "opciones mn"
                                "opciones Tareas";
                               
        }
    .tarea-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        padding: 12px 16px;
        margin: 10px auto;
        max-width: 700px;
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
?>

<body class="body-tareas-estudiante">
<?php
   include("inicio1.php");  
?>
<div class="mn">
<?php
    include("subestudiante.php"); 
?> 
</div>
<div class="tareasestudiante">
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