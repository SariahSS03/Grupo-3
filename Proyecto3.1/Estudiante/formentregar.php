<?php
    $direccion="localhost";
    $usuario="root";
    $contrasena="";
    $dbname="proyecto3"; 
    $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
    session_start();
    if($conexion->error){
        echo"Hubo un error al conectar a la base de datos";
    }if($_SESSION['rol']==2 ){
        header('Location:/grupo-3/Proyecto3.1/Profesor/Vertareaprofesor.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>

    <style>
    .body-entregar-tarea{
    display: grid;
    grid-template-rows: auto auto ;
    grid-template-columns: 16% 84% ;
    grid-template-areas: "principal principal"
                        " opciones entregar";
      font-family: 'Roboto', sans-serif;
      margin: 0;
      background: #f9f9f9;
    }
        /* Contenedor principal */
.formulario-entrega {
    grid-area:entregar;
    max-width: 600px;
    padding: 30px;
    background-color: #fefefe;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Título */
.formulario-entrega h2 {
    text-align: center;
    margin-bottom: 25px;
    font-size: 24px;
    color: #2c3e50;
}

/* Etiquetas */
label {
    display: block;
    margin-bottom: 6px;
    font-weight: 500;
    color: #333;
}

/* Campos de texto y archivo */
input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 15px;
}

/* Botón */
.btn-enviar {
    background-color: #00439b;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 10px;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s;
}

.btn-enviar:hover {
    background-color: #2c3e50;
}
@media (max-width: 600px) {
    .formulario-entrega {
        margin: 20px;
        padding: 20px;
    }

    .formulario-entrega h2 {
        font-size: 20px;
    }

    .btn-enviar {
        font-size: 15px;
        padding: 10px;
    }
}
    </style>
</head>
<body class="body-entregar-tarea">
    <?php
    include("inicio1.php");  
    ?>
    <?php
    $ID_tarea=$_GET['ID_tarea'];
    ?>
    <center>
    <div class="formulario-entrega">
        <h2>Entregar tarea</h2>
        <form action="procesar_entrega.php" method="post" enctype="multipart/form-data">
            <label for="archivo">Archivo a subir</label>
            <input type="hidden" name="ID_tarea" value="<?= $ID_tarea ?>">

            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Enviar tarea" class="btn-enviar">
        </form>
    </div>
<script>
    $("form").validate({
        rules:{
            fileToUpload:{
                required:true
            }
        },
        messages:{
            fileToUpload:{
                required:"este campo tiene que ser llenado"
            }
        }
    });
</script>
</body>
</html>