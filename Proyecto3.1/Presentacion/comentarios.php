<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tres Columnas</title>
  <style>
    .contenedor {
      display: flex;
      margin-top:100px;
    }

    .columna {
      flex: 1;                      /* Cada columna ocupa el mismo ancho */
      padding: 20px;
      border: 1px solid #ccc;
      text-align: center;
    }

    /* Solo para diferenciar colores */
    .columna1 { background-color: #f8d7da; }
    .columna2 { background-color: #d4edda; }
    .columna3 { background-color: #d1ecf1; }
  </style>
</head>
<body>
 <header>
      <?php
      include('menu.php');
      ?>
    </header>
  <div class="contenedor">
    <div class="columna columna1">Columna 1</div>
    <div class="columna columna2">Columna 2</div>
    <div class="columna columna3">Columna 3</div>
  </div>

</body>
</html>
