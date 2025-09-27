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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
</head>
<style>
    .body-unirse-clase {
        display: grid;
            grid-template-rows: auto auto auto auto auto;
            grid-template-columns: 16% 84% ;
            grid-template-areas: "principal principal"
                                 "opciones formulario";
        background-color: #f0f2f5;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    .form-container {
        display: flex;
        justify-content: center;
        padding: 50px 20px;
        grid-area:formulario;
    }

    .join-form {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        width: 100%;
        max-width: 500px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .form-title {
        margin-top: 0;
        font-size: 24px;
        color: #202124;
        border-bottom: 1px solid #e0e0e0;
        padding-bottom: 20px;
    }

    .session-info {
        align-items: center;
        background-color: #f1f3f4;
        padding: 15px;
        border-radius: 8px;
        margin: 20px 0;
    }

    .user-info {
        display: flex;
        flex-direction: column;
    }

    .user-name {
        font-size: 16px;
        font-weight: 500;
        margin: 0;
        color: #202124;
    }

    .label-code {
        font-size: 14px;
        color: #202124;
        margin-bottom: 5px;
        display: block;
    }

    #Codigo {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 6px;
        border: 1px solid #ccc;
        margin-bottom: 20px;
    }

    #Codigo:focus {
        outline: none;
        border-color: #4285f4;
        box-shadow: 0 0 0 2px rgba(66, 133, 244, 0.2);
    }

    .instructions {
        font-size: 14px;
        color: #5f6368;
        margin-bottom: 20px;
    }

    .instructions ul {
        margin: 5px 0 0 20px;
        padding: 0;
    }

    .instructions li {
        margin-bottom: 5px;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }

    .cancel-button {
        background: none;
        border: none;
        color: #1a73e8;
        font-size: 14px;
        cursor: pointer;
    }

    .submit-button {
        background-color: #1a73e8;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 14px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .submit-button:hover {
        background-color: #155ab6;
    }
    @media (max-width: 600px) {
    .form-container {
        padding: 20px;
    }

    .join-form {
        padding: 20px;
        width: 100%;
        box-shadow: none;
        border-radius: 0;
    }

    .form-title {
        font-size: 20px;
        text-align: center;
    }

    .session-info {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .user-name {
        font-size: 15px;
    }

    #Codigo {
        font-size: 15px;
        padding: 8px;
    }

    .instructions {
        font-size: 13px;
    }

    .form-actions {
        flex-direction: column;
        align-items: stretch;
        gap: 10px;
    }

    .cancel-button,
    .submit-button {
        width: 100%;
        font-size: 15px;
    }
}
</style>
<body class="body-unirse-clase">
    <?php
      if($_SESSION['rol']==2 ){
            include('../Profesor/inicio2.php');  
          }else{
              if($_SESSION['rol']==1 ){
              include('../Estudiante/inicio1.php');
          }
          }
    ?>
    <div class="form-container">
    <?php
        $User = $_SESSION['CI'];
        $sql2 = "SELECT * FROM Informacion WHERE CI='$User'";
        $resultado2 = $conexion->query($sql2);
        if ($resultado2->num_rows > 0) {
            while ($fila2 = $resultado2->fetch_assoc()) {
                $nombre = $fila2['Nombres'];
                $apellido = $fila2['Apellidos'];
            }
        }
    ?>

    <form action="ingresoaula.php" method="post" class="join-form">
        <h2 class="form-title">Unirse a clase</h2>

        <div class="session-info">
            <div class="user-info">
                <p class="user-name"><?= $nombre . " " . $apellido ?></p>
            </div>
        </div>

        <div class="class-code-section">
            <label for="Codigo" class="label-code">Código de clase</label>
            <input type="text" id="Codigo" name="Codigo" placeholder="Código de clase">
        </div>

        <div class="instructions">
            <p>Para iniciar sesión con un código de clase</p>
            <ul>
                <li>Usa una cuenta autorizada</li>
                <li>Utiliza un código de clase con 5-8 letras o números sin espacios ni símbolos</li>
            </ul>
        </div>

        <div class="form-actions">
            <button type="button" class="cancel-button" onclick="window.location.href='/grupo-3/Proyecto3.1/Estudiante/inicioestudiante.php'">Cancelar</button>
            <input type="submit" class="submit-button" value="Unirme">
        </div>
    </form>
</div>


<script>
    $(".join-form").validate({
        rules:{
            Codigo:{
                required:true,
                minlenght:5,
                maxlenght:8
            }
        },
        messages:{
            Nombre:{
            required:"Este campo requiere ser llenado",
            minlenght:"El  minimo de letras es de 5 digitos",
            maxlenght:"El maximo de letras es 8 digitos"
        }
        }
    })
</script>
</body>
</html>