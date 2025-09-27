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
    .body-ver-tarea {
    margin: 0px;
    display: grid;
      grid-template-columns: 16% 84% ;
      grid-template-rows: auto auto auto auto auto;
      grid-template-areas:"principal principal"
                          "opciones tarea";
      font-family: 'Roboto', sans-serif;
      background: #f1f3f4;
    }

    .main-container {
      display: flex;
      max-width: 1200px;
      margin: auto;
      grid-area:tarea;
      justify-content:center; 
       align-items:center;
    }

    .left-section {
      flex: 3;
      background: white;
      padding: 25px;
      border-radius: 8px;
      margin-right: 20px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    }

    .right-section {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .box {
      background: white;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    }

    h1 {
      font-size: 22px;
      margin: 0 0 10px 0;
    }

    .meta {
      color: #5f6368;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .points-date {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      border-bottom: 1px solid #ddd;
      padding-bottom: 10px;
      font-weight: bold;
    }

    .instructions {
      margin-bottom: 30px;
      font-size: 16px;
    }

    .comments {
      font-size: 14px;
      border-top: 1px solid #ddd;
      padding-top: 15px;
    }

    .comments a {
      color: #1a73e8;
      text-decoration: none;
    }

    .your-work {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .your-work .status {
      color: red;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .your-work button,
    .your-work .add-create {
      background-color: #1a73e8;
      color: white;
      border: none;
      padding: 10px 16px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .add-create {
      width: 100%;
      text-align: center;
    }

    .private-comments a {
      color: #1a73e8;
      text-decoration: none;
      font-size: 14px;
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
<body class="body-ver-tarea">
    <?php
      include("../Estudiante/inicio1.php");  
    ?>
    <div class="main-container">
        <?php
        $ID=$_GET['IDtarea'];
        $sql1="SELECT*FROM tarea   WHERE idTarea='$ID'";
        $resultado1 = $conexion->query($sql1);
        if ($resultado1->num_rows>0){
            while($fila1=$resultado1->fetch_assoc()){
                $Titulo =$fila1['Titulo'];
                $Descripcion =$fila1['Descripcion'];
                $Nota =$fila1['Nota'];
                $Tema=$fila1['Tema'];
                $FechadeEntrega=$fila1['FechadeEntrega'];
                $Instrucciones =$fila1['Instrucciones'];
            }
        }
        ?>

            <!-- Left Section -->
            <div class="left-section">
            <h1><?=$Titulo?></h1>
            <div class="meta"><?=$Descripcion?></div>

            <div class="points-date">
                <div><?=$Nota?> / <?=$Nota?></div>
                <!--<div><?=$FechadeEntrega?></div>-->
            </div>

            <div class="instructions">
                <strong><?=$Instrucciones?></strong>
            </div>

            </div>

            <!-- Right Section -->
            <div class="right-section">
            <div class="box your-work">
                <div class="status">Sin entregar</div>
                <button onclick="window.location.href='/grupo-3/Proyecto3.1/Estudiante/formentregar.php'" class="add-create">+ Añadir o crear</button>
                <a>Marcar como completado</a>
            </div>
            </div>
    </div>
</body>
</html>