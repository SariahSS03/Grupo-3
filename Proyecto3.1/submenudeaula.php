<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .mn {
      background-color: #010636;
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 12px;
      grid-area: mn;
    }

    .mn a {
      text-decoration: none;
      color: white;
      font-size: 15px;
    }
</style>
<body>
   <nav class="mn">
    <a href="aulaoriginal.php?ID=<?=$id?>">ANUNCIOS</a>
    <a href="TrabajodeClase.php?ID=<?=$id?>">TAREAS</a>
    <a href="">PENDIENTES</a>
    <a href="personas.php">PERSONAS</a>
  </nav> 
</body>
</html>
