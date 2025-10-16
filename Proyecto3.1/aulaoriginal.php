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
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@100..900&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <style>
    /* Estilos generales del grid */
    .body-aula-original {
      display: grid;
      grid-template-columns: 13% 87%;
      grid-template-rows: 10% auto auto auto auto;
      grid-template-areas:
        "principal principal"
        "opciones mn"
        "opciones quimica"
        "opciones areaAnuncios"
        "opciones areaPublicaciones";
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      background-color: #fff;
    }
        .areaAnuncios {
      grid-area: areaAnuncios;
      padding: 10px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .areaPublicaciones {
      grid-area: areaPublicaciones;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .mn {
      grid-area: mn;
    }

    .uno {
      background-color: #fff;
      border-radius: 30px;
      padding: 30px;
      width: 60%;
    }
        .clase-header {
      grid-area: quimica;
      background-color: #f0f4ff;
      border: 1px solid #cdd8f0;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      margin: 30px auto;
      width: 70%;
    }

    .header-banner {
      background-position: right;
      background-size: cover;
      height: 150px;
      display: flex;
      align-items: flex-end;
      padding: 20px;
    }

    .header-text h1 {
      color: white;
      font-size: 70px;
      font-weight: bold;
      margin: 0;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.4);
    }

    .sub-info {
      background-color: #f0f4ff;
      border: 1px solid #cdd8f0;
      border-radius: 8px;
      padding: 15px 20px;
      margin: 20px 0;
      font-size: 16px;
      color: #2c3e50;
    }

    .sub-info strong {
      color: #1e3a8a;
    }
        .boton1 {
      background-color: #009318;
      color: black;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      padding: 10px 20px;
      margin: 10px 0;
      cursor: pointer;
      width: 100%;
      transition: 0.3s;
    }

    .boton1:hover {
      background-color: #04d83d;
      transform: scale(1.05);
    }

    #fileToUpload::file-selector-button {
      background-color: #4a90e2;
      color: white;
      border: none;
      padding: 8px 14px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 500;
    }

    #fileToUpload::file-selector-button:hover {
      background-color: #357abd;
    }

    #Anunciaalgo {
      background-color: #f1f3f4;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      min-height: 40px;
      width: 100%;
      padding: 10px;
      resize: none;
    }

    #Anunciaalgo:focus {
      background-color: #fff;
      box-shadow: 0 0 0 2px #4285f4;
    }

    #codigo {
      background-color: #8fa3c2;
      color: #333;
      border-radius: 15px;
      padding: 20px;
      max-width: 300px;
      text-align: center;
      margin: 0 auto 20px;
    }

    #codigo p {
      margin: 0;
      font-weight: bold;
    }

    #opciones {
      display: flex;
      flex-direction: row-reverse;
      gap: 30px;
      margin-top: 10px;
    }

    #dos {
      background-color: whitesmoke;
      border-radius: 30px;
      color: rgb(129, 114, 114);
      padding: 10px 18px;
      margin-bottom: 10px;
    }
        .Publicaciones {
      width: 70%;
      margin: 0 auto;
    }

    #publicacion1 {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
      margin-bottom: 30px;
      padding: 20px;
    }

    .nombre-usuario {
      font-size: 18px;
      font-weight: 700;
      color: #1a1a1a;
    }

    .fecha {
      color: #999;
      font-size: 13px;
      margin-bottom: 5px;
    }

    .contenido-publicacion p {
      font-size: 16px;
      color: #333;
      margin-top: 15px;
      white-space: pre-wrap;
    }

    .archivo-publicacion {
      margin-top: 20px;
    }

    .archivo-publicacion img,
    .archivo-publicacion embed {
      border-radius: 8px;
      max-width: 100%;
      height: auto;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .enlaces {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      gap: 10px;
      margin-top: 20px;
    }

    .enlaces a {
      background-color: #f1f3f4;
      border-radius: 6px;
      padding: 10px 16px;
      text-decoration: none;
      font-size: 14px;
      transition: 0.2s;
    }

    .editar {
      color: #1a73e8;
    }

    .eliminar {
      color: #e53935;
    }

    .enlaces a:hover {
      background-color: #e0e0e0;
      transform: scale(1.05);
    }

    a[download] {
      display: inline-block;
      background-color: #f1f3f4;
      color: #333;
      border-radius: 6px;
      padding: 10px 15px;
      text-decoration: none;
      margin-top: 10px;
    }

    a[download]:hover {
      background-color: #e0e0e0;
    }
        @media screen and (max-width: 768px) {
      .body-aula-original {
        grid-template-areas:
          "principal"
          "mn"
          "quimica"
          "areaAnuncios"
          "areaPublicaciones";
        grid-template-columns: 1fr;
      }

      .uno {
        width: 95%;
        padding: 15px;
      }

      #codigo {
        width: 90%;
        margin: 15px auto;
      }

      .header-text h1 {
        font-size: 36px;
      }

      .Publicaciones {
        width: 90%;
      }
    }

    @media screen and (max-width: 480px) {
      .boton1, #fileToUpload::file-selector-button {
        width: 100%;
        font-size: 14px;
      }

      .header-text h1 {
        font-size: 28px;
      }

      #Anunciaalgo {
        font-size: 14px;
        min-height: 80px;
      }

      .enlaces a {
        font-size: 13px;
        padding: 8px 12px;
      }
    }
  </style>
</head>
<body class="body-aula-original">
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
  <?php
    $User=$_SESSION['CI'];
    $ID=$_GET['ID'];
    $sql="SELECT*FROM Clases   WHERE ID='$ID'";
    $resultado = $conexion->query($sql);
    if ($resultado->num_rows>0){
        while($fila=$resultado->fetch_assoc()){
            $User= $fila['Profesor'];
            $nombre=$fila['Nombre'];
            $codigo=$fila['Codigo'];
            $color=$fila['Color'];
            $id=$fila['ID'];
            $sql2=" SELECT * FROM Informacion WHERE CI='$User'";
            $resultado2 = $conexion->query($sql2);
            if ($resultado2->num_rows>0){
              while($fila2=$resultado2->fetch_assoc()){
              $Nombreprofesor= $fila2['Nombres'];
              $Apellidoprofesor= $fila2['Apellidos'];
              }
            }
        }
    }
  ?>

  <section class="clase-header">
    <div class="header-banner">
      <div class="header-text">
        <h1 class="titulo-clase" style="color: <?php echo $color; ?>"><?= $nombre ?></h1>
      </div>
    </div>

    <div class="sub-info">
      <p><strong>Profesor:</strong> <?= $Nombreprofesor ?> <?= $Apellidoprofesor ?></p>
    </div>
  </section>


<section class="areaAnuncios">
  <div id="codigo">
    <p><strong>Código de la clase:</strong> <?= $codigo ?></p>
  </div>

  <div class="uno">
    <div id="dos">
    <?php
        $User = $_SESSION['CI'];
        $sql = "SELECT * FROM Informacion WHERE CI='$User'";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $nombres = $fila['Nombres'];
                $apellidos = $fila['Apellidos'];
            }
        }
    ?>
    <h3><?= $nombres ?> <?= $apellidos ?></h3>

    <form action="Publicaciones.php" method="post" enctype="multipart/form-data">
      <textarea name="Publicaciones" placeholder="Anuncia algo a la clase" id="Anunciaalgo"></textarea>
      <input type="hidden" name="ID" value="<?=$ID?>">

      <div id="opciones" style="display: none;">
        <div id="cinco">
          <button type="submit" id="a" class="boton1">Publicar</button>
        </div>
        <div id="cuatro">
          <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
      </div>
    </form>
  </div>
</div>
<script>
    $("form").validate({
        rules:{
            Publicaciones:{
                required:true,
                minlength:5,
                maxlength:300
            }
        },
        messages:{
            Publicaciones:{
                required:"este campo tiene que ser llenado",
                minlength:"El minimo es de 5 letras",
                maxlength:"El maximo es el 300 letras"
            }
        }
    });
</script>
</section>

<section class="areaPublicaciones">
  <?php
        $User=$_SESSION['CI'];
        $sql3="SELECT * FROM Publicaciones  WHERE Clases_ID='$ID'  ORDER BY FechaCreacion DESC";
        $resultado3 = $conexion->query($sql3);
        if ($resultado3->num_rows>0){
            while($fila3=$resultado3->fetch_assoc()){
                $Texto= $fila3['Texto'];
                $FechaCreacion= $fila3['FechaCreacion'];
                $FechaEdicion= $fila3['FechadeEdicion'];
                $Informacion_CI= $fila3['Informacion_CI'];
                $ID_publicacion= $fila3['id'];
                $ID= $fila3['Clases_ID'];
                $sql2=" SELECT * FROM Informacion WHERE CI='$Informacion_CI'";
              $resultado2 = $conexion->query($sql2);
              if ($resultado2->num_rows>0){
                while($fila2=$resultado2->fetch_assoc()){
                $Nom= $fila2['Nombres'];
                $Ape= $fila2['Apellidos'];
    ?>  
  <div class="Publicaciones">
    <div id="publicacion1">
    <!-- Encabezado: nombre y fechas -->
      <div class="cabecera-publicacion">
        <h3 class="nombre-usuario"><?=$Nom?> <?=$Ape?></h3>
        <?php if(!empty($FechaCreacion) && $FechaCreacion != '0000-00-00 00:00:00'){?>
          <p class="fecha">Publicado: <?=$FechaCreacion?></p>
        <?php } ?>
        <?php if(!empty($FechaEdicion) && $FechaEdicion != '0000-00-00 00:00:00'){ ?>
          <p class="fecha">Editado: <?=$FechaEdicion?></p>
          <?php }?>
      </div>

      <!-- Texto de la publicación -->
      <div class="contenido-publicacion">
        <p><?=$Texto?></p>
      </div>

      <?php
        $nombreArchivo ="P-".$ID."-".$fila3['id'];
        $directorio = "media/";
        $extensiones  = ["pdf", "jpg", "jpeg", "png", "gif", "webp", "xlsx", "txt", "zip"];
        $archivoEncontrado = NULL;

        foreach ($extensiones as  $ext){
        $ruta = $directorio. $nombreArchivo. "." . $ext;
          if (file_exists($ruta)){
          $archivoEncontrado = $ruta;
          break;
          }
        }
      ?>
      <!-- Archivo adjunto (imagen, pdf o descarga) -->
      <?php if ($archivoEncontrado){ ?>
      <div class="archivo-publicacion">
        <?php
          $extension = strtolower(pathinfo($archivoEncontrado, PATHINFO_EXTENSION));
          if (in_array($extension, ["jpg", "jpeg", "png", "gif", "webp"])) {
            echo "<img src='$archivoEncontrado' alt='Archivo adjunto'>";
          } else if ($extension === "pdf") {
            echo "<embed src='$archivoEncontrado' type='application/pdf' width='100%' height='300'>";
          } else {
            echo "<a href='$archivoEncontrado' download>Descargar archivo</a>";
          }
          ?>
      </div>
      <?php
        }
      ?>
    <?php if($fila3['Informacion_CI'] == $User){ ?>
      <div class="enlaces">
        <a href="editarpublicacion.php?ID_publicacion=<?= $ID_publicacion?>&ID=<?= $ID?>" class="editar">Editar</a>
        <a href="eliminarpublicacion.php?ID_publicacion=<?= $ID_publicacion?>" class="eliminar">Eliminar publicación</a>
      </div>
    <?php }?> 
      </div>       
  </div>
  <?php  
        }// fin while usuarios
      }// fin if usuarios
    } // fin while publicaciones
  }// fin if publicaciones  
  ?> 
</section>

<script>
$(document).ready(function() {
  // Mostrar las opciones cuando el textarea recibe foco
  $('#Anunciaalgo').on('focus', function() {
    $('#opciones').slideDown();
  });

  // Cerrar las opciones cuando se hace clic fuera del textarea o de las opciones
  $(document).on('click', function(e) {
    if (!$(e.target).closest('#Anunciaalgo, #opciones').length) {
      $('#opciones').slideUp();
    }
  });
});
</script>
</body>
</html>