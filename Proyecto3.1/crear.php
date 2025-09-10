<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #ad{
            
            padding:4%;
            border: 2px solid black;

        }
        .par{
            border:3px solid black;
            
        }
    </style>
</head>
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
        ?>
<body>
    <?php
        $ID=$_GET['ID'];
        $sql1="SELECT*FROM Clases   WHERE ID='$ID'";
        $resultado1 = $conexion->query($sql1);
        if ($resultado1->num_rows>0){
            while($fila1=$resultado1->fetch_assoc()){
                $id_tareaclase=$fila1['ID'];
            }
        }
        ?>
    
    <form action="Tarea.php?ID=<?= $id_tareaclase ?>" method="post">
     <div class="par" >
        <label for="">Nombre de la Tarea</label><br>
        <input type="text" name="Titulo" placeholder="Ingresa el nombre de la tarea"><br>
        <label for="">Descripcion</label><br>
        <input type="text" name="Descripcion" placeholder="Descripcion"><br>
    </div>
    <div>
        <label for="">Tema</label><br>
        <input type="text" name="Tema" placeholder="Tema de la tarea"><br>
        <label for="">Nota</label><br>
        <input type="text" name="Nota" placeholder="Sobre cuanto estara evaluada la tarea"><br>
        <input type="hidden" name="idTarea" value="<?=$ID?>">
        <input type="submit" id="Boton" value="Crear tarea" >
    </div>
    </form>
        <button  onclick="window.location.href='TrabajodeClase.php?ID=<?= $id ?>'" id="Boton">Volver a las tareas</button>
    
   <div id="ad">
    <p>Adjuntar</p>
      <button>
        <img>
      </button>
      <button>
        <img>
      </button>
      <button>
        <img>
      </button>
      <button>
        <img>
      </button>
      <button>
        <img>
      </button>
   </div>
    
</body>
</html>