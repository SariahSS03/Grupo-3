<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Tarea.php" method="post">
        <div id="tres"><h1 id="dos">Crear Trea<h1></div>
        <label for="">Nombre de la Tarea</label><br>
        <input type="text" name="Titulo" placeholder="Ingresa el nombre de la tarea"><br>
        <label for="">Descripcion</label><br>
        <input type="text" name="Descripcion" placeholder="Descripcion"><br>
        <label for="">Tema</label><br>
        <input type="text" name="Tema" placeholder="Tema de la tarea"><br>
        <label for="">Nota</label><br>
        <input type="text" name="Nota" placeholder="Sobre cuanto estara evaluada la tarea"><br>
        <input type="submit" id="Boton" value="Crear tarea" >
        <button  onclick="window.location.href='TrabajodeClase.php'" id="Boton">Volver a las tareas</button>
    </form>
</body>
</html>