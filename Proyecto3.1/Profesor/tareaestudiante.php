<?php
  session_start();
    $direccion="localhost";
    $usuario="root";
    $contrasena="";
    $dbname="proyecto3"; 
    
    $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
    if($conexion->error){
        echo"Hubo un error al conectar a la base de datos";
    }
     if($_SESSION['rol']==1 ){
        header('Location:/grupo-3/Proyecto3.1/Estudiante/Vertarea.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
</head>
<style>
  .body-tarea-estudiante{
    margin: 0px;
    display: grid;
      grid-template-rows: auto auto auto auto auto;
      grid-template-columns: 16% 84%;
      grid-template-areas:
        "principal principal"
        "opciones header";
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      
      color: #202124;
    }


</style>
<body class="body-tarea-estudiante">
  <?php
   include("inicio2.php");  
  ?>
  <div class="madre">
    <div class="nombre">
      <h1>Examen Sesiones</h1>
      <?php
      $User=$_GET['CI_estudiante'];
      $ID=$_GET['ID_tarea'];
      $sql2="SELECT*FROM Informacion WHERE CI='$User'";
          $resultado2=$conexion->query ($sql2);
          if ($resultado2->num_rows>0){
                While($fila2=$resultado2->fetch_assoc()){
                  $Nombres=$fila2['Nombres'];
                  $Apellidos=$fila2['Apellidos'];
      ?>
      <p><?=$Nombres?> <?=$Apellidos?></p>
      <p>Entregado</p>
      <?php
        }
      }
      ?>
    </div>
    <div class="tarea">
      <?php
        $nombreArchivo ="ST-".$User."-".$ID;
        $directorio = "../media/";
        $extensiones  = ["pdf", "jpg", "jpeg", "png", "gif", "webp", "xlsx", "txt", "zip"];
        $archivoEncontrado = NULL;

      foreach ($extensiones as  $ext){
      $ruta = $directorio. $nombreArchivo. "." . $ext;
        if (file_exists($ruta)){
        $archivoEncontrado = $ruta;
        break;
        }
        }
      
        if ($archivoEncontrado){
        $extension = strtolower (pathinfo($archivoEncontrado, PATHINFO_EXTENSION));
        if (in_array($extension, ["jpg", "jpeg", "png","gif","webp"])){
      echo "<img src='$archivoEncontrado' alt ='Archivo' width='70%'>";
        }elseif ($extension === "pdf"){
            echo "<embed src='$archivoEncontrado' type= 'application/pdf' width='400' height='250'>";
        }else{
            echo "<a href='$archivoEncontrado' download> Descargar archivo </a>";
        }
        }
      ?>
    </div>
    <div class="notas">
      <?php
      $ID=$_GET['ID_tarea'];
        $User=$_GET['CI_estudiante'];
        $sql4="SELECT*FROM Cuenta_has_Tarea   WHERE Tarea_idTarea='$ID' AND Cuenta_User='$User' ";
        $resultado4 = $conexion->query($sql4);
        if ($resultado4->num_rows>0){
            while($fila4=$resultado4->fetch_assoc()){
                $nota=$fila4['Nota'];
            }
          }
      ?>
      <form action="editar_nota.php" method="post">
        <label>CALIFICACION</label>
        <input type="number" name="nota" value='<?= $nota?>'>
        <input type="hidden" name="ID_tarea" value="<?= $ID?>">
        <input type="hidden" name="CI_estudiante" value="<?= $User?>">
        <input type="submit" value="Devolver">
        <a href='Vertareaprofesor.php?IDtarea=<?= $ID?>'>Volver a la Tarea</a>
      </form>
      <script>
        $("form").validate({
            rules:{
                nota:{
                    required:true,
                    number:true
                }
            },
            messages:{
                nota:{
                    required:"este campo tiene que ser llenado solo numeros ",
                    number:"el campo solo tiene que llenado con numeros"
                }
            }
        });
    </script>
    </div>

  </div>
</body>
</html>