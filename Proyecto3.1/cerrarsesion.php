<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    session_destroy();
    header('Location:/grupo-3/Proyecto3.1/Estudiante/iniciarsesion.php');
    ?>
</body>
</html>