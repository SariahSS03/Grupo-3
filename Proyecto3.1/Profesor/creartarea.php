<?php
session_start();
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
<body class="body-crear-tarea">
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
        <input type="text" name="Titulo" placeholder="Título">
        <textarea name="Descripcion" placeholder="Descripcion"></textarea>

        <h3>Adjuntar</h3>
        <div class="attachments">
          <input type="file" name="fileToUpload" id="fileToUpload">
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
            Descricion:{
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
            Descricion:{
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
