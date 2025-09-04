<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $direccion="localhost";
        $usuario="root";
        $contrasena="";
        $dbname="proyecto3"; 
        session_start();
        
        $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
        if($conexion->error){
            echo"Hubo un error al conectar a la base de datos";
        }
        $ID=$_GET['ID'];
        $sql1="SELECT*FROM Clases   WHERE ID='$ID'";
        $resultado1 = $conexion->query($sql1);
        if ($resultado1->num_rows>0){
            while($fila1=$resultado1->fetch_assoc()){
                $id=$fila1['ID'];
            }
        }
            ?>
    <form action="Tarea.php?ID=<?= $id ?>" method="post">
        <div id="tres"><h1 id="dos">Crear Trea<h1></div>
        <label for="">Nombre de la Tarea</label><br>
        <input type="text" name="Titulo" placeholder="Ingresa el nombre de la tarea"><br>
        <label for="">Descripcion</label><br>
        <input type="text" name="Descripcion" placeholder="Descripcion"><br>
        <label for="">Tema</label><br>
        <input type="text" name="Tema" placeholder="Tema de la tarea"><br>
        <label for="">Nota</label><br>
        <input type="text" name="Nota" placeholder="Sobre cuanto estara evaluada la tarea"><br>
        <input type="hidden" name="idTarea" value="<?=$ID?>">
        <input type="submit" id="Boton" value="Crear tarea" >
    </form>
        <button  onclick="window.location.href='TrabajodeClase.php?ID=<?= $id ?>'" id="Boton">Volver a las tareas</button>
</body>
</html>