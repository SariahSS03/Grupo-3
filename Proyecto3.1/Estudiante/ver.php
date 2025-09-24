<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio de Sesión</title>
  <style>
    body {
      background-color: #c9c9c9;
      font-family: "Open Sans", sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background-color: #F5D547;
      border-radius: 40px;
      padding: 40px 30px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    h1 {
      text-align: center;
      color: #003375;
      margin-bottom: 30px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #3872bd;
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
<body>

  <form action="mostrardatos.php" method="post">
    <h1>Inicio de Sesión</h1>

    <label for="ci">CI:</label>
    <input type="text" id="ci" name="CI" placeholder="Cédula de identidad" required>

    <label for="rude">Contraseña:</label>
    <input type="password" id="rude" name="Rude" placeholder="RUDE" required>

    <div class="botones">
      <input type="submit" value="Iniciar sesión">
      <button type="button" onclick="window.location.href='registro.php'">Crear cuenta</button>
    </div>
  </form>

</body>
</html>