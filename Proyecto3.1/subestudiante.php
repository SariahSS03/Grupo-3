<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<?php
        $direccion="localhost";
        $usuario="root";
        $contrasena="";
        $dbname="proyecto3"; 
        
        
        $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
        if($conexion->error){
            echo"Hubo un error al conectar a la base de datos";
        }
        session_start();
        if($_SESSION['rol']==2 ){
            header('Location: subprofesor.php');
        }
        ?>
<body>
  <?php
        $User=$_SESSION['CI'];
        $ID=$_GET['ID'];
        $sql="SELECT*FROM Clases   WHERE ID='$ID'";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows>0){
            while($fila=$resultado->fetch_assoc()){
                $id_CLASE=$fila['ID'];
            }
        }
     ?>
   <nav class="mn">
    <a href="aulaoriginal.php?ID=<?=$id_CLASE?>">ANUNCIOS</a>
    <a href="Tareasestudiante.php?ID=<?=$id_CLASE?>">TAREAS</a>
    <a href="Personasestudiante.php?ID=<?=$id_CLASE?>">PERSONAS</a>
  </nav> 
</body>
</html>
