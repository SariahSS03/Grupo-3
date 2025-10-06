<?php 
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="proyecto3";

$conexion = new mysqli($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
  .body-editar-publicacion {
      display: grid;
      grid-template-columns: 16% 84%;
      grid-template-rows: auto auto auto auto auto;
      grid-template-areas:
        "principal principal"
        "opciones mn"
        "opciones editar";
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      background-color: #94a5bdff;
      margin: 0px;
    }
    .uno{
            padding: 30px;
            width: 50%;
            background-color: white;
            border-radius:30px;
            grid-area:editar;
            margin: 50px;
            width:100%;
        }
    #dos{
            color: rgb(129, 114, 114);
            background-color: whitesmoke;
            position: relative; 
            padding-top:5px ;
            padding-left:18px ;
            border-radius:30px;
            margin-bottom:10px;
    }
    #cinco{
            
            flex-direction: row-reverse;
            gap: 15px;
        }
        #Anunciaalgo{
          width: 100%;
          min-height: 40px;
          font-size: 16px;
          border: none;
          border-radius: 8px;
          background-color: #f1f3f4;
          resize: none;/*  Elimina el tirador de redimensionar */
          outline: none;/* Quita el borde azul al hacer clic */
          transition: background-color 0.2s ease;
  }

  #Anunciaalgo:focus {
    background-color: #fff; /* Similar al efecto de enfoque de Classroom */
    box-shadow: 0 0 0 2px #4285f4; /* Borde de enfoque sutil */
  }
  /* Botón que reemplaza al input file */
    .custom-file-label {
      background-color: #f0f0f0;
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 10px 15px;
      cursor: pointer;
      display: inline-block;
      transition: background-color 0.3s ease;
    }

    .custom-file-label:hover {
      background-color: #e0e0e0;
    }
    /* Estilo para el input file oculto */
    input[type="file"] {
      display: none;
    }
    /* Botón */
    .boton1 {
      background-color: #f0f0f0;
      border: none;
      border-radius: 8px;
      color: black;
      cursor: pointer;
      font-size: 16px;
      margin-top: 10px;
      padding: 10px 20px;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .boton1:hover {
      background-color: #6b6b72;
      transform: scale(1.05);
    }

</style>
</head>
<body class="body-editar-publicacion">
   <?php
     if($_SESSION['rol']==2 ){
           include("Profesor/inicio2.php");  
        }else{
            if($_SESSION['rol']==1 ){
            include("Estudiante/inicio1.php");
        }
      }
  ?>

  <div class="mn">
      <?php
      if($_SESSION['rol']==2 ){
            include("Profesor/subprofesor.php");  
          }else{
              if($_SESSION['rol']==1 ){
              include("Estudiante/subestudiante.php");
          }
          }
      ?>
  </div>
    <div class="uno">
            <div id="dos">
              <?php
                  $User=$_SESSION['CI'];
                  $sql="SELECT*FROM Informacion   WHERE CI='$User'";
                  $resultado = $conexion->query($sql);
                  if ($resultado->num_rows>0){
                      while($fila=$resultado->fetch_assoc()){
                           $nombres = $fila['Nombres'];
                           $apellidos =$fila['Apellidos'];
                      }
                  }
              ?>
              <h3><?= $nombres?> <?= $apellidos?></h3>
              <?php
                $ID_publicacion=$_GET['ID_publicacion'];
                $sql1="SELECT * FROM publicaciones WHERE id='$ID_publicacion'";
                $resultado1=mysqli_query($conexion,$sql1);
                if(!empty($resultado1)&& mysqli_num_rows($resultado1)>0){
                    $fila1= mysqli_fetch_assoc($resultado1);
                    $texto=$fila1['Texto'];
                    $clases_ID=$fila1['Clases_ID'];
            }
              ?>
              <form action="datospublicaciones.php?ID_publicacion=<?=$ID_publicacion?>&clases_ID=<?=$clases_ID?>" method="post" >
                <textarea name="Publicaciones" placeholder="Anuncio algo a la clase" id="Anunciaalgo" ><?= $texto ?></textarea>
            </div>
                  <div id="abajo">
                    <div id="cuatro">
                      <label for="fileToUpload" class="custom-file-label">Adjuntar archivo</label>
                      <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <div id="cinco">
                      <button type="submit"  id="a" class="boton1">Subir Edicion</button>
                  </form>
                    </div>
                  </div>
    </div>
  </section>
</body>
</html>