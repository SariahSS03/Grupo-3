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
        header('Location:/grupo-3/Proyecto3.1/Estudiante/Vertarea.php');
    }
?>
<!DOCTYPE html> 
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabajo de los alumnos</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    .body-ver-tarea-profesor {
      display: grid;
      grid-template-rows: auto 10% auto;
      grid-template-columns: 16% 84%;
      grid-template-areas:
        "principal principal"
        "opciones header"
        "opciones formulario";
      font-family: 'Roboto', sans-serif;
      margin: 0;
      background: #f9f9f9;
      color: #202124;
    }

    header {
      background: white;
      border-bottom: 1px solid #ddd;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 100;
      grid-area: header;
    }

    .pestañas{
      background: none;
      border: none;
      cursor: pointer;
      padding: 8px;
      font-size: 14px;
    }

    .pestañas .activo {
      border-bottom: 2px solid #1a73e8;
      color: #1a73e8;
    }

    .cajaexterna {
      grid-area:formulario;
      display: grid;
      grid-template-columns: 60% 40%;
      gap: 20px;
      padding: 20px;
      margin-left:80px;
      margin-right:80px;
    }

    .cajainterna {
      background: white;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow-y: auto;
    }

    .titulo1 {
      font-size: 14px;
      margin: 0;
      padding: 12px 16px;
      border-bottom: 1px solid #eee;
      background: #f8f9fa;
    }

    .alumno {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid #eee;
      padding: 10px 16px;
      font-size: 14px;
      cursor: pointer;
    }

    .alumno:last-child {
      border-bottom: none;
    }

    .info {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .nota {
      color: #188038;
      font-weight: 500;
      font-size: 13px;
    }

    .contenido {
      padding: 20px;
    }

    .contenido h2 {
      margin: 0 0 15px;
      font-size: 18px;
      font-weight: 500;
    }

    .estadisticas {
      display: flex;
      gap: 30px;
      margin-bottom: 20px;
      font-size: 14px;
      color: #5f6368;
    }

    .estadisticas strong {
      display: block;
      font-size: 16px;
      color: #202124;
    }

    a {
      text-decoration: none;
      color: black;
    }

  </style>
</head>
<body class="body-ver-tarea-profesor">
  <?php
   include("inicio2.php");  
  ?>
  <header>
    <?php
    $ID_tarea=$_GET['IDtarea'];
        $sql1="SELECT*FROM   Tarea   WHERE idtarea='$ID_tarea' ";
        $resultado1= $conexion->query($sql1);
        if ($resultado1->num_rows>0){
            while($fila1=$resultado1->fetch_assoc()){
                $Titulo= $fila1['Titulo'];
                $Nota=$fila1['Nota'];
            }
        }
    ?>
    <div class="pestañas">
      <p class="activo" >Trabajo de los alumnos</p>
    </div>
  </header>

    <div class="cajaexterna">
      <div class="cajainterna">
        <h3 class="titulo1">Entregado</h3>
          <?php
          $ID_tarea=$_GET['IDtarea'];   
               $sql=" SELECT * FROM Cuenta_has_Tarea WHERE Tarea_idTarea='$ID_tarea' ";
               $resultado=$conexion->query($sql);
               if($resultado -> num_rows >0){
                  While($fila=$resultado ->fetch_assoc()){
                     $Cuenta_User=$fila['Cuenta_User'];
                     $fechadeEntrega=$fila['FechadeEntrega'];
                     $notaprofe=$fila['Nota'];
                     $entregado=$fila['Entregado'];
                     $sql2="SELECT*FROM Informacion WHERE CI='$Cuenta_User'";
                     $resultado2=$conexion->query ($sql2);
                     if ($resultado2->num_rows>0){
                           While($fila2=$resultado2->fetch_assoc()){
                              $Nombres=$fila2['Nombres'];
                              $Apellidos=$fila2['Apellidos'];
          ?>
            <div class="alumno">
            <a href="tareaestudiante.php?CI_estudiante=<?= $Cuenta_User?>&ID_tarea=<?=$ID_tarea?>">
            <div class="info">
              <span><?= $Nombres ?> <?= $Apellidos?></span>
            </div>
            </a>
            <span class="nota"><?= $notaprofe?>/<?= $Nota?></span>
            </div>
    </div>

      <div class="cajainterna contenido">
        <h2><?= $Titulo?></h2>
        <div class="estadisticas">
          <?php
          $sql3=" SELECT COUNT(*) AS total FROM Cuenta_has_Tarea WHERE Tarea_idTarea='$ID_tarea' AND Entregado='$entregado' ";
          $resultado3 = $conexion->query($sql3);
          if ($resultado3) {
            $fila3 = $resultado3->fetch_assoc();
            $total_entregados = $fila3['total'];
          }
          ?>
          <div><strong><?=$total_entregados?></strong> Entregadas</div>
          <?php
          $sql4=" SELECT COUNT(*) AS totaltareas FROM Cuenta_has_Tarea WHERE Tarea_idTarea='$ID_tarea' ";
          $resultado4 = $conexion->query($sql4);
          if ($resultado4) {
            $fila4 = $resultado4->fetch_assoc();
            $total_asignadas = $fila4['totaltareas'];
          }
          ?>
          <div><strong><?=$total_asignadas?></strong> Asignadas</div>
        </div>
      </div>
 <?php
            }
          }
        }
      }
      ?>
    </div>
</body>
</html>
