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
    .madre{
      display:grid;
      grid-template-rows: 30% 70%;
      grid-template-columns: 60% 40%;
      grid-template-areas: "uno uno"
                            "dos tres" ;
    }
    .nombre{
      grid-area: uno;
    }
    .tarea{
      grid-area: dos;
    }
    .notas{
      grid-area: tres;
    }
    .nombre {
    background: white;
    padding: 15px 15px;
    border-radius: 20px;
    transition: all 0.3s ease;
    cursor: pointer;
    width: 100%;
    margin:20px;
  }

  .nombre:hover {
    background: #e8f0fe;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    transform: translateY(-5px);
  }

  .nombre h1 {
    font-size: 22px;
    color: #1a237e;
    margin-bottom: 10px;
  }

  .nombre p {
    color: #333;
    font-size: 16px;
    margin: 5px 0;
  }

  .nombre p:first-of-type {
    color: #2e7d32;
    font-weight: 600;
  }
  .notas {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 60px 20px;
  }

  form {
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 450px;
    display: flex;
    flex-direction: column;
    gap: 20px;
    transition: all 0.3s ease;
  }
  form label {
    font-size: 18px;
    color: #1a237e;
    font-weight: 600;
    text-align: center;
    letter-spacing: 0.5px;
  }

  form input[type="number"] {
    padding: 12px 15px;
    border: 2px solid #c5cae9;
    border-radius: 10px;
    font-size: 16px;
    outline: none;
    transition: all 0.3s ease;
  }

  form input[type="number"]:focus {
    border-color: #3f51b5;
    box-shadow: 0 0 8px rgba(63, 81, 181, 0.4);
  }

  form input[type="submit"] {
    background: #3f51b5;
    color: white;
    border: none;
    border-radius: 10px;
    padding: 12px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  form input[type="submit"]:hover {
    background: #283593;
    transform: scale(1.03);
  }

  form a {
    text-align: center;
    color: #1a237e;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  form a:hover {
    color: #3f51b5;
    text-decoration: underline;
  }
  .tarea{
    margin:30px;
  }
</style>
<body class="body-tarea-estudiante">
  <?php
   include("inicio2.php");  
  ?>
  <div class="madre">
    <div class="nombre">
      <h1>Calificacion del Estudiante</h1>
      <p>Entregado</p>
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
      <?php
        }
      }
      ?>
    </div>
    <div class="tarea">
      <center>
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
      </center>
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
        <?php
          $ID=$_GET['ID_tarea'];
            $sql5="SELECT*FROM Tarea   WHERE idTarea='$ID'";
            $resultado5 = $conexion->query($sql5);
            if ($resultado5->num_rows>0){
                while($fila5=$resultado5->fetch_assoc()){
                    $nota1=$fila5['Nota'];
                }
              }
          ?>
        <p>Sobre: <?=$nota1?></p>
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