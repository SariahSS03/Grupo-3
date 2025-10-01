<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .uno{
            padding: 30px;
            width: 50%;
            background-color: white;
            border-radius:30px;
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
</style>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="proyecto3";

    $conexion = new mysqli($servername, $username, $password, $dbname);
        ?>
    <?php
     if($_SESSION['rol']==2 ){
           include("inicio2.php");  
        }else{
            if($_SESSION['rol']==1 ){
            include("inicio1.php");
        }
        }
  ?>
  <div class="mn">
      <?php
      if($_SESSION['rol']==2 ){
            include("subprofesor.php");  
          }else{
              if($_SESSION['rol']==1 ){
              include("subestudiante.php");
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
                $ID_publicacion=$_POST['ID_publicacion']
                $sql1=" SELECT * FROM Publicaciones WHERE id='$ID_publicacion' ";
                $resultado1=mysqli_query($conexion,$sql1);
                if(!empty($resultado)&& mysqli_num_rows($resultado1)>0){
                    $fila1= mysqli_fetch_assoc($resultado1);
                    $texto=$fila1['Texto'];
            }
              ?>
              <form action="datospublicaciones.php?ID_publicacion=<?=$ID_publicacion?>" method="post" enctype="multipart/form-data">
                <textarea name="Publicaciones" placeholder="Anuncio algo a la clase" id="Anunciaalgo" value='<?= $texto ?>' ></textarea>
                <input type="hidden" name="ID" value="<?=$ID_publicacion?>">
            </div>
                  <div id="abajo">
                    <div id="cuatro">
                      <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <div id="cinco">
                      <button type="submit"  id="a" class="boton1">Publicar</button>
                  </form>
                    </div>
                  </div>
    </div>
  </section>
</body>
</html>