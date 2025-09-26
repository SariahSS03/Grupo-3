<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <style>
        .body-iniciar-sesion {
        background-color: #bfc3c3;
        color: white;
        font-family: "Open Sans", sans-serif;
        margin: 0px;
        padding: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

        form {
        background-color: white;
        color: #2C3E50;
        border-radius: 40px;
        padding: 40px 30px;
        width: 100%;
        max-width: 400px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        h1 {
        text-align: center;
        margin-bottom: 30px;
        }

        label {
        display: block;
        margin-bottom: 8px;
        font-size: 18px;
        }

        input[type="text"],
        input[type="password"] {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 20px;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        box-sizing: border-box;
        }

        .botones {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin-top: 10px;
        }

        .botones input,
        .botones button {
        background-color: #024fb4;
        color: white;
        border: none;
        padding: 12px;
        font-size: 16px;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s;
        }

        .botones input:hover,
        .botones button:hover {
        background-color: #3872bd;
        }

        @media (max-width: 500px) {
        form {
            padding: 25px 20px;
        }

        .botones {
            flex-direction: column;
        }
        }
    </style>
</head>
<body class="body-iniciar-sesion">
  <form action="mostrardatos.php" method="post">
    <h1>Inicio de Sesión</h1>

    <label for="ci">CI:</label>
    <input type="text" id="ci" name="CI" placeholder="Cédula de identidad">

    <label for="rude">Contraseña:</label>
    <input type="password" id="rude" name="Rude" placeholder="RUDE">

    <div class="botones">
      <input type="submit" value="Iniciar sesión">
      <button type="button" onclick="window.location.href='/grupo-3/Proyecto3.1/Estudiante/registro.php'">Crear cuenta</button>
    </div>
  </form>
<script>
    $("form").validate({
        rules:{
            Rude:{
                required:true,
                minlenght:15,
                maxlenght:45
            },
            CI:{
                required:true,
                number:true
            }
        },
        messages:{
            Rude:{
                required:"este campo tiene que ser llenado",
                minlenght:"El minimo es de 5 letras",
                maxlenght:"El maximo es el 45 letras"
            },
            CI:{
                required:"este campo tiene que ser llenado solo numeros ",
                number:"el campo solo tiene que llenado con numeros"
            }
        }
    })
</script>
</body>
</html>