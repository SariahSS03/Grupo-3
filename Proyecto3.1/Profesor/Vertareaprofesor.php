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
      grid-template-rows: auto auto auto auto auto;
      grid-template-columns: 16% 84% ;
      grid-template-areas: "principal principal"
                          " opciones header"
                          " opciones formulario";
      font-family: 'Roboto', sans-serif;
      margin: 0;
      background: #f9f9f9;
      color: #202124;
    }
    #formAlumnos{
      grid-area:formulario;
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
      grid-area:header;
    }
    .pestañas p {
      background: none;
      border: none;
      font-weight: 500;
      cursor: pointer;
      padding: 8px;
      font-size: 14px;
    }
    .pestañas p.activo {
      border-bottom: 2px solid #1a73e8;
      color: #1a73e8;
    }
    .acciones {
      display: flex;
      gap: 10px;
      align-items: center;
    }
    .acciones p {
      padding: 6px 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background: white;
      cursor: pointer;
      font-size: 14px;
    }
    .cajaexterna {
      display: grid;
      grid-template-columns: 280px 1fr;
      gap: 20px;
      padding: 20px;
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
    .opcion {
      margin-bottom: 20px;
      font-size: 14px;
    }
    .tarjetas {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
      gap: 15px;
    }
    .tarjeta {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 10px;
      background: #fff;
      font-size: 14px;
    }
    .miniatura {
      width: 100%;
      height: 100px;
      background: #f1f3f4;
      border-radius: 4px;
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #999;
      font-size: 12px;
    }
    .tarjeta small {
      color: #5f6368;
      display: block;
      margin-top: 4px;
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
      <a class="activo" >Trabajo de los alumnos</a>
    </div>
    <div class="acciones">
      <p type="submit" form="formAlumnos">Enviar</p>
    </div>
  </header>

  <form id="formAlumnos" action="procesar_entregas.php" method="POST">
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
                     $sql2="SELECT*FROM Informacion WHERE CI='$Cuenta_User'";
                     $resultado2=$conexion->query ($sql2);
                     if ($resultado2->num_rows>0){
                           While($fila2=$resultado2->fetch_assoc()){
                              $Nombres=$fila2['Nombres'];
                              $Apellidos=$fila2['Apellidos'];
          ?>
            <div class="alumno">
            <div class="info">
              <span><?= $Nombres ?> <?= $Apellidos?></span>
            </div>
            <span class="nota">0/<?= $Nota?></span>
            </div>
          <?php
            }
          }
        }
      }
      ?>
    </div>

      <div class="cajainterna contenido">
        <h2><?= $Titulo?></h2>
        <div class="estadisticas">
          <div><strong>34</strong> Entregadas</div>
          <div><strong>3</strong> Asignadas</div>
          <div><strong>1</strong> Evaluada</div>
        </div>
        <div class="opcion">
          <label><input type="checkbox" checked> Acepta entregas</label>
        </div>
        <div class="tarjetas">
          <div class="tarjeta">
            <div class="miniatura">Miniatura</div>
            <div>Nombre1</div>
            <small>3 archivos adjuntos</small>
          </div>
          <div class="tarjeta">
            <div class="miniatura">Miniatura</div>
            <div>Nombre2</div>
            <small>2 archivos adjuntos</small>
          </div>
          <div class="tarjeta">
            <div class="miniatura">Miniatura</div>
            <div>Nombre3</div>
            <small>1 archivo adjunto</small>
          </div>
        </div>
      </div>

    </div>
  </form>
</body>
</html>
