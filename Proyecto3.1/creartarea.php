<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear tarea</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    body{
            margin:none;
            display: grid;
            grid-template-rows: auto auto auto auto auto;
            grid-template-columns: 16% 84% ;
            grid-template-areas: "principal principal"
                                " opciones Tareas";
      font-family: 'Roboto', sans-serif;
      margin: 0;
      background: #f9f9f9;
    }
    .areacreartarea{
      grid-area: Tareas;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 25px;
      border-bottom: 1px solid #ddd;
      background: white;
    }
    header h2 {
      margin: 0;
      font-weight: 500;
    }
    .container {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 20px;
      padding: 20px;
    }
    .left, .right {
      background: white;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
    }
    input[type="text"], textarea, select, input[type="date"], input[type="number"] {
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 6px;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      font-size: 14px;
    }
    textarea {
      resize: vertical;
      min-height: 80px;
    }
    .attachments {
      display: flex;
      justify-content: space-around;
      margin-top: 20px;
    }
    .attachments button {
      border: none;
      background: none;
      cursor: pointer;
      text-align: center;
    }
    .attachments img {
      width: 30px;
      display: block;
      margin: auto;
    }
    button.submit {
      background: #1a73e8;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 500;
    }
    button.submit:hover {
      background: #1558b0;
    }
  </style>
</head>
  <?php
        $direccion="localhost";
        $usuario="root";
        $contrasena="";
        $dbname="proyecto3"; 
        session_start();
        
        $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
        if($conexion->error){
            echo"Hubo un error al conectar a la base de datos";
        }
        ?>
<body>
  <?php
   include("inicio2.php");  
?>
</div>
  <?php
        $ID=$_GET['ID'];
        $sql1="SELECT*FROM Clases   WHERE ID='$ID'";
        $resultado1 = $conexion->query($sql1);
        if ($resultado1->num_rows>0){
            while($fila1=$resultado1->fetch_assoc()){
                $id_tareaclase=$fila1['ID'];
            }
        }
        ?>
  <section class="areacreartarea">
  <header>
    <h2>Tarea</h2>
    <button class="submit" type="submit" form="formTarea">Crear tarea</button>
  </header>

  <form id="formTarea" action="Tarea.php?IDclase=<?= $id_tareaclase ?>" method="post" enctype="multipart/form-data">
  <div class="container">

      <div class="left">
        <input type="text" id="titulo" name="Titulo" placeholder="Título *" required>
        <textarea id="instrucciones" name="Descripcion" placeholder="Instrucciones (opcional)"></textarea>

        <h3>Adjuntar</h3>
        <div class="attachments">
          <button type="button"><img src="https://cdn-icons-png.flaticon.com/512/5968/5968517.png"><span>Drive</span></button>
          <button type="button"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png"><span>YouTube</span></button>
          <button type="button"><img src="https://cdn-icons-png.flaticon.com/512/992/992651.png"><span>Crear</span></button>
          <button type="file" onclick="document.getElementById('archivo').click()"><img src="https://cdn-icons-png.flaticon.com/512/724/724933.png"><span>Subir</span></button>
          <button type="button"><img src="https://cdn-icons-png.flaticon.com/512/25/25694.png"><span>Enlace</span></button>
        </div>
        <input type="file" id="archivo" name="archivo" style="display:none;">
      </div>

    
      <div class="right">

        <label for="puntos">Puntos</label>
        <input type="number" id="puntos" name="Nota" value="100">

        <label for="fecha">Fecha de entrega</label>
        <input type="date" id="fecha" name="FechadeEntrega">

        <label for="rubrica">Rúbrica</label>
        <input type="text" id="rubrica" name="rubrica" placeholder="Enlace o descripción">
      </div>
    </div>
  </form>
  </section>
</body>
</html>
