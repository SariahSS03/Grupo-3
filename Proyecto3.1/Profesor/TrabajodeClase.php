<?php
  session_start();
    $direccion="localhost";
    $usuario="root";
    $contrasena="";
    $dbname="proyecto3"; 
    
    $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
    if($conexion->error){
        echo"Hubo un error al conectar a la base de datos";
    }
     if($_SESSION['rol']==1 ){
        header('Location:/grupo-3/Proyecto3.1/Estudiante/Tareasestudiante.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .body-trabajo-clase{
        display: grid;
        grid-template-rows:auto 18% auto auto auto;
        grid-template-columns: 13% 88% ;
        grid-template-areas: "principal principal"
                            " opciones mn"
                            " opciones Tareas"
                            " opciones tareascreadas";
        margin: 0px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .tareascreadas{
        grid-area:tareascreadas;
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
    .Tareas {
        grid-area: Tareas;
        display: flex;
        align-items: center;
        gap: 10px; /* Espacio entre imagen y enlace */
        padding: 10px 15px;
        background-color: #f9f9f9;
        border-radius: 8px;
        border: 1px solid #ddd;
        width: 150px; /* Se ajusta al contenido */
        height: 30px;
        margin-top:20px;
        margin-left:20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .crear-tarea-link {
        text-decoration: none;
        color: #2c3e50;
        font-size: 16px;
        transition: color 0.2s ease;
    }

    .crear-tarea-link:hover {
        color: #2980b9;
    }
    .editar-tarea-btn {
        display: inline-block;
        margin-top: 10px;
        padding: 6px 12px;
        font-size: 14px;
        color: white;
        background-color: #3498db;
        border: none;
        border-radius: 6px;
        text-align: center;
        transition: background-color 0.2s ease;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        width: fit-content;
    }

    .editar-tarea-btn:hover {
        background-color: #2980b9;
        text-decoration: none;
        color: white;
    }
    .mn {
      background-color: #010636;
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 12px;
      grid-area: mn;
    }

    .mn a {
      text-decoration: none;
      color: white;
      font-size: 15px;
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
<body class="body-trabajo-clase">
<?php
   include("inicio2.php");  
?>
<nav class="mn">
<?php
    include("subprofesor.php"); 
?> 
</nav>

<div class="Tareas">
    <?php
    $ID=$_GET['ID'];
    ?>
    <img id="in" src="/grupo-3/Proyecto3.1/Imagenes/pencil.png" alt="Crear" width="27" height="27">
    <a href="../Profesor/creartarea.php?ID=<?= $ID ?>" class="crear-tarea-link">Crear Tarea</a>
</div>

<div class="tareascreadas">
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
                <a href="../Profesor/Vertareaprofesor.php?IDtarea=<?= $idTarea ?>">
                    <div class="tarea-contenido">
                        <div class="tarea-textos">
                            <h2 class="tarea-titulo"><?= $Titulo ?></h2>
                        </div>

                        <div class="tarea-fecha">
                            Publicado: <?=$fechadeentrega?>
                        </div>
                    </div>
                </a>
                <a href="../Profesor/editartarea.php?IDtarea=<?= $idTarea ?>" class="editar-tarea-btn">Editar tarea</a>
        </div>
    <?php
            }
        }
     ?>
</div>
    
</body>
</html>