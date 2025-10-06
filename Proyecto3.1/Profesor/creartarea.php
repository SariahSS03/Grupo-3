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
        header('Location:/grupo-3/Proyecto3.1/Estudiante/unirseaclase.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
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
      margin-bottom: 20px;
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
    /* Oculta el input real */
.attachments input[type="file"] {
  display: none;
}

/* Estilo para el botón de adjuntar */
.custom-file-button {
  display: inline-block;
  background-color: #f0f0f0;
  color: #131212ff;
  padding: 10px 16px;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 500;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.2s ease;
  box-shadow: 0 2px 4px rgba(0,0,0,0.15);
}

/* Efecto hover */
.custom-file-button:hover {
  background-color: #e0e0e0;
  transform: scale(1.03);
}

/* Puedes ajustar según tamaño o responsividad */
@media (max-width: 768px) {
  .body-crear-tarea {
    grid-template-columns: 1fr;
    grid-template-areas:
      "principal"
      "Tareas";
    padding: 10px;
  }

  .container {
    flex-direction: column;
    padding: 10px;
    gap: 10px;
  }

  .left, .right {
    padding: 15px;
  }

  header {
    flex-direction: column;
    align-items: flex-start;
    padding: 10px 15px;
  }

  header h2 {
    font-size: 18px;
  }

  input[type="text"],
  textarea,
  select,
  input[type="date"],
  input[type="number"] {
    font-size: 16px;
    padding: 12px;
  }

  .attachments {
    flex-direction: column;
    align-items: center;
    gap: 10px;
  }

  .custom-file-button {
    width: 100%;
    text-align: center;
    font-size: 16px;
    padding: 12px;
  }

  button.submit {
    width: 100%;
    padding: 12px;
    font-size: 16px;
  }
}


  </style>
</head>
<body class="body-crear-tarea">
  <?php
   include("inicio2.php");  
?>
</div>
  <?php
    $ID=$_GET['ID'];
  ?>
  <section class="areacreartarea">
  <header>
    <h2>Tarea</h2>
    <button class="submit" type="submit" form="formTarea">Crear tarea</button>
  </header>

  <form id="formTarea" action="Tarea.php" method="post">
  <input type="hidden" name="ID" value="<?= $ID ?>">
  <div class="container">

      <div class="left">
        <input type="text" name="Titulo" placeholder="Título">
        <textarea name="Descripcion" placeholder="Descripcion"></textarea>

        <h3>Adjuntar</h3>
        <div class="attachments">
          <input type="file" name="fileToUpload" id="fileToUpload">
          <label for="fileToUpload" class="custom-file-button">Adjuntar archivo</label>
        </div>

    
      <div class="right">

        <label for="puntos">Puntos</label>
        <input type="number" name="Nota" value="100">

        <label for="fecha">Fecha de entrega</label>
        <input type="date" name="FechadeEntrega">

        <label for="rubrica">Rúbrica</label>
        <input type="text"  name="Instrucciones" placeholder="Enlaces-Instrucciones">
      </div>
    </div>
  </form>
  </section>
  <script>
    $("#formTarea").validate({
        rules:{
            Titulo:{
                required:true,
                minlength:5,
                maxlength:45
            },
            Descripcion:{
                required:true,
                minlength:5,
                maxlength:300
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
                minlength:5,
                maxlength:300
            }
        },
        messages:{
            Titulo:{
                required:"este campo tiene que ser llenado",
                minlength:"El minimo es de 5 letras",
                maxlength:"El maximo es el 45 letras"
            },
            Descripcion:{
                required:"este campo tiene que ser llenado",
                minlength:"El minimo es de 5 letras",
                maxlength:"El maximo es el 300 letras"
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
                minlength:"El minimo es de 5 letras",
                maxlength:"El maximo es el 300 letras"
            }
        }
    });
</script>
</body>
</html>
