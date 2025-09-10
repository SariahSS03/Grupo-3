<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h2>TABLON DE CLASES</h2>
        <?php
        $val =$_GET['id'];
        if(!isset($_SESSION['CI'])){
            header("Location: ../iniciarsesion.php");
        }

        $sql="SELECT *  FROM clases WHERE id='$val";
        $res="mysqli_query($conn, $sql";
        if ($res &&mysqli_num_rows($res)== 1){
            $row = mysqli_fetch_assoc($res);
            $idprofesor=$row['cuanta:idUser'];

        }
        ?>
        <nav>
            <a href="/Grupo-3/clases/index.php">Clases</a>
             <a href="/Grupo-3/tareas/index.php?id=<?=$val?>>"Tareas</a>
              <a href="/Grupo-3/clases/personas.php?id=<?=$val?>" Personas</a>
</nav>


<table>
    <tr><th>NOMBRE</th><th><?php echo $row['nombre']; ?></td></tr>
    <tr><th>CODIGO</th><th><?php echo $row['codigo']; ?></td></tr>
    <tr><th><a href="../tareas/index.php?id=<?=$val?>"TAREAS</a></td></tr>
    </table>
    
    
    <form method="post" action="../publicaciones/guaradarpubli.php" enctype="multipart/form-data">
    <div class="form-group">
        <label>NEUVA PUBLICACION</label>
        <textarea name="contenido"></textarea>
        <input type="hidden" name="id" value="<?=$val?>">
        <label> SELECCIONES UN ARCHIVO PARA ADJUNTARLO: </label>
        <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
    </form>

    <table>
        <?php
        $sql="SELECT * FROM publicaciones WHERE clases_id=$val ORDER BY fechaC DESC";
        $res=mysqli_query($conn, $sql);
        while($row =mysqli_fetch_assoc($res)){?>


<tr>
    <td>
        <b><?php echo $row['nombre']; ?></b>
        <i><?php echo $row ['fechaC'];
        if (isset($row ['fechaE'])){
            echo "(Editado: ".$row['fechaE'].")";
        }
        }
        ?>
        </i>
        <br>
        <?php
        echo "<p>".$row['contenido']."</p>";
         $nombreArchivo ="P-".$val."-".$row['id'];
         $directorio = "../media/";
         $extensiones  = ["pdf", "jpg", "jpeg", "png", "gif", "webp", "xlsx", "txt", "zip"];
         $archivoEncontrado = null;

         foreach ($extensiones as  $ext){
         $ruta = $directorio. $nombreArchivo. "." . $ext;
          if (file_exists($ruta)){
          $archivoEncontrado = $ruta;
          break;
           }
          }
        
          if ($archivoEncontrado){
          $extension = strtolower (pathinfo($archivoEncontrado, PATHINFO_ESTENSION));
          if (in_array($extension, ["jpg", "jpeg", "png","gif","webp"])){
        echo "<img src='$archivoEncontado' alt ='Archivo' width='250'>";
    }elseif ($extension === "pdf"){
        echo "<embed src='$archivoEncontrado' type= 'application/pdf' width='400' height='250'>";
    }else{
        echo "<a href='$archivoEncontrado' download> Descargar archivo </a>";
    }
}
?>

</td>
<?php
$CI=$_SESSION['CI'];
$sql2 = "SELECT * FROM informacion WHERE CI='$CI' LIMIT1";
$res2 = mysqli_query($conn, $sql2);
if ($res2 && mysqli_num_rows($res2) == 1){
    $row2 = mysqli_fetch_assoc($res2);
    $nombre=$row2['apellidos']."".$row2['nombres'];
}
if($nombre==$row['nombre'] ||  $_SESSION['CI']==$idprofesor){
?>
<td>
    <a href="../publicaciones/formEditarPublicacion.php?id=<?php echo $row ['id'];?>">Editar</a>
    <a href="delete.php?id=<?php echo $row['id']; ?>"onclick="return confirm('¿eliminar?');">Eliminar</a>
</td>
    <?php
    }
   ?>
</tr>
<?php
  }
  ?>
  

  <?php
  if($_SESSION['rol']!="Estudiante"){ ?>
  <p><a href="edit.php?id=<?php echo $row['id'];?>">Editar</a>
  <?php
  }
  ?>
  <a href="index.php">Volver</a></p>
</body>
</html>