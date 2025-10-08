<?php
session_start();
  $direccion="localhost";
  $usuario="root";
  $contrasena="";
  $dbname="proyecto3"; 

  $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear tarea</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    .body-crear-tarea{
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
        $id_tarea=$_GET['IDtarea'];
        $sql2=" SELECT * FROM Tarea WHERE idTarea='$id_tarea' ";
            $resultado=mysqli_query($conexion,$sql2);
            if(!empty($resultado)&& mysqli_num_rows($resultado)>0){
                $fila= mysqli_fetch_assoc($resultado);
                $titulo=$fila['Titulo'];
                $descripcion=$fila['Descripcion'];
                $nota=$fila['Nota'];
                $FehcadeEntrega=$fila['FechadeEntrega'];
                $instrucciones =$fila['Instrucciones'];
                $id_clase =$fila['Clases_ID'];
            }
        ?>
<body class="body-crear-tarea">
  <?php
   include("inicio2.php");  
?>
</div>
  <section class="areacreartarea">
  <header>
    <h2>Tarea</h2>
    <button class="submit" type="submit" form="formTarea">Crear tarea</button>
  </header>

  <form id="formTarea" action="editar_datos_tarea?ID_tarea=<?=$id_tarea?>$?ID_clase=<?=$id_clase?>" method="post" enctype="multipart/form-data">
  <div class="container">

      <div class="left">
        <input type="text" name="Titulo" placeholder="Título" value='<?= $titulo?>'>
        <textarea name="Descripcion" placeholder="Descripcion" value='<?= $descripcion?>'></textarea>

        <h3>Adjuntar</h3>
        <div class="attachments">
          <input type="file" name="fileToUpload" id="fileToUpload">
      </div>

    
      <div class="right">

        <label for="puntos">Puntos</label>
        <input type="number" name="Nota" value='<?= $nota?>'>

        <label for="fecha">Fecha de entrega</label>
        <input type="date" name="FechadeEntrega" value='<?= $FehcadeEntrega?>'>

        <label for="rubrica">Rúbrica</label>
        <input type="text"  name="Instrucciones" placeholder="Enlaces-Instrucciones" value='<?= $instrucciones?>'>
      </div>
    </div>
  </form>
  </section>
  <script>
    $("#formtarea").validate({
        rules:{
            Titulo:{
                required:true,
                minlenght:5,
                maxlenght:45
            },
            Descricion:{
                required:true,
                minlenght:5,
                maxlenght:300
            },
            Nota:{
                required:true,
                number:true
            },
            FechadeEntrega:{ 
                required:true
            },
            Instrucciones:{
                required:true,
                minlenght:5,
                maxlenght:300
            }
        },
        messages:{
            Titulo:{
                required:"este campo tiene que ser llenado",
                minlenght:"El minimo es de 5 letras",
                maxlenght:"El maximo es el 45 letras"
            },
            Descricion:{
                required:"este campo tiene que ser llenado",
                minlenght:"El minimo es de 5 letras",
                maxlenght:"El maximo es el 300 letras"
            },
            Nota:{
                required:"este campo tiene que ser llenado solo numeros ",
                number:"el campo solo tiene que llenado con numeros"
            },
            FechadeEntrega:{
                required:"este campo tiene que ser llenado solo numeros "
            },
            Instrucciones:{
                required:"este campo tiene que ser llenado",
                minlenght:"El minimo es de 5 letras",
                maxlenght:"El maximo es el 300 letras"
            }
        }
    });
</script>
</body>
</html>
