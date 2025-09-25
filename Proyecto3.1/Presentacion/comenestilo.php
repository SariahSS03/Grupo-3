<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Comentarios Aesthetic</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
<style>
    body {
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: auto auto auto;
        grid-template-areas:"menu"
                            "comentarios"
                            "final";

        font-family: 'Roboto', sans-serif;
        background: #e0f2ff; 
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    .form {
        background: #ffffff;
        padding: 40px 30px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        width: 400px;
        text-align: center;
        animation: fadeIn 1s ease forwards;
        grid-area:comentarios;
    }

    .form h1 {
        color: #0096FF;
        margin-bottom: 25px;
        font-size: 1.8rem;
    }

    .form input,
    .form textarea {
        width: 100%;
        padding: 12px 15px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 10px;
        font-size: 1rem;
        resize: none;
        transition: all 0.3s ease;
    }

    .form input:focus,
    .form textarea:focus {
        border-color: #0096FF;
        box-shadow: 0 4px 10px rgba(0, 150, 255, 0.2);
        outline: none;
        transform: scale(1.02);
    }

    .form button {
        background: #0096FF;
        color: #fff;
        border: none;
        padding: 12px 25px;
        border-radius: 12px;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        margin-top: 10px;
        transition: all 0.3s ease;
    }

    .form button:hover {
        background: #007ACC;
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    .mostrar{

        background: #071c2bff;
        width: 500px;
        height:auto;
        border-radius:20px;
        margin-left:1100px;
        margin-bottom:10px;
    }

    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 480px) {
        .form-container {
            padding: 30px 20px;
        }
    }
</style>
</head>
<body>
<header>
      <?php
      include('menu.php');
      ?>
</header>
<div class="form">
    <h1>¡Déjanos tu comentario!</h1>
    <form method="post" action="archivo2.php">
        <textarea name="comentario" rows="4" placeholder="Escribe tu comentario aquí..." required></textarea>
        <button type="submit">Enviar
          <img  height="20px" width="10px" src="https://e7.pngegg.com/pngimages/841/271/png-clipart-computer-icons-send-miscellaneous-angle-thumbnail.png">
        </button>
    </form>
</div>
<div class="mostrar">
    <?php
    $a=fopen("comentarios.txt" ,"r");
    while (!feof($a)){
        $leer=fgets($a);
        $ver=nl2br($leer);
        ?>
    <h2>
    <?=$ver?>
    </h2>
<?php
    }
    ?>

</div>
<header>
      <?php
      include("menu2.php");
      ?>
    </header>
</body>
</html>
