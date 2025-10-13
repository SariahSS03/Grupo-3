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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
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
<body>
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
</body>
</html>