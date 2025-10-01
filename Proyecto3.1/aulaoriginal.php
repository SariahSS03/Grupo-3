<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@100..900&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <style>
    .body {
      display: grid;
      grid-template-columns: 16% 84%;
      grid-template-rows: auto auto auto auto auto;
      grid-template-areas:
        "principal principal"
        "opciones mn"
        "opciones quimica"
        "opciones areaAnuncios"
        "opciones areaPublicaciones";
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      background-color: #94a5bdff;
      margin: 0px;
    }

    /* Área anuncios */
    .areaAnuncios {
      align-items: center;
      background-color: #0c394eff;
      display: flex;
      flex-direction: column;
      grid-area: areaAnuncios;
      padding: 10px 1px;
    }

    /* Área publicaciones */
    .areaPublicaciones {
      background-color: rgba(18, 33, 71, 1);
      display: flex;
      justify-content: center;
      padding: 20px;
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

    /* Contenedor blanco */
    .uno {
      background-color: white;
      border-radius: 30px;
      padding: 30px;
      width: 50%;
    }

    /* Header clase */
    .clase-header {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      font-family: 'Segoe UI', sans-serif;
      margin: 30px auto;
      max-width: 1000px;
      overflow: hidden;
      width: 100%;
    }

    /* Header banner */
    .header-banner {
      align-items: flex-end;
      background-position: right;
      background-size: cover;
      display: flex;
      height: 150px;
      padding: 20px;
      position: relative;
    }

    /* Header texto */
    .header-text h1 {
      color: white;
      font-size: 28px;
      font-weight: bold;
      margin: 0;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.4);
    }

    /* ID dos */
    #dos {
      background-color: whitesmoke;
      border-radius: 30px;
      color: rgb(129, 114, 114);
      margin-bottom: 10px;
      padding-left: 18px;
      padding-top: 5px;
      position: relative;
    }

    /* ID cinco */
    #cinco {
      display: flex;
      flex-direction: row-reverse;
      gap: 15px;
    }

    /* Input área anuncio */
    #Anunciaalgo {
      background-color: #f1f3f4;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      min-height: 40px;
      outline: none;
      resize: none; /* Elimina el tirador de redimensionar */
      transition: background-color 0.2s ease;
      width: 100%;
    }

    #Anunciaalgo:focus {
      background-color: #fff; /* Similar al efecto de enfoque de Classroom */
      box-shadow: 0 0 0 2px #4285f4; /* Borde de enfoque sutil */
    }

    /* Texto materia */
    #materia {
      color: black;
      font-size: 50px;
    }

    /* Código de clase */
    #codigo {
      background-color: #8fa3c2ff;
      border-radius: 10px;
      font-family: "Tinos", serif;
      font-size: 15px;
      grid-area: codigo;
      height: 170px;
      margin-right: 1300px;
      position: absolute;
      bottom: 800px;
      top: 520px;
      width: 200px;
    }

    /* Publicaciones contenedor */
    .Publicaciones {
      max-width: 700px;
      width: 100%;
    }

    /* Publicación tarjeta */
    #publicacion1 {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
      padding: 16px;
      position: relative;
    }

    /* Publicación título */
    #publicacion1 h2:first-of-type {
      font-size: 16px;
      font-weight: 500;
      margin: 0 0 4px 0;
    }

    /* Publicación fecha */
    #publicacion1 h2:nth-of-type(2) {
      color: #757575;
      font-size: 12px;
      font-weight: normal;
      margin: 0;
    }

    /* Publicación enlace */
    #publicacion1 a {
      color: #1a73e8;
      font-size: 13px;
      margin-top: 10px;
      text-decoration: none;
      display: inline-block;
    }

    /* Publicación imagen y embed */
    #publicacion1 embed,
    #publicacion1 img {
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
      border-radius: 6px;
      display: block;
      margin-top: 15px;
      max-width: 100%;
      height: auto;
    }

    /* Link descarga archivo */
    #publicacion1 a[download] {
      background: #f1f3f4;
      border-radius: 6px;
      color: #333;
      display: inline-block;
      font-size: 14px;
      margin-top: 15px;
      padding: 10px 15px;
      text-decoration: none;
    }

    #publicacion1 a[download]:hover {
      background-color: #e0e0e0;
    }

    /* Sub información */
    .sub-info {
      background-color: white;
      color: #333;
      font-size: 16px;
      padding: 15px 20px;
    }

    .sub-info p {
      margin: 5px 0;
    }

    /* Media queries */
    @media screen and (max-width: 768px) {
      .body {
        grid-template-areas:
          "principal"
          "mn"
          "quimica"
          "areaAnuncios"
          "areaPublicaciones";
        grid-template-columns: 1fr;
      }

      #Anunciaalgo {
        font-size: 14px;
        min-height: 60px;
      }

      #codigo {
        left: auto;
        margin: 15px auto;
        position: relative;
        top: auto;
        bottom: auto;
        width: 90%;
      }

      #materia {
        font-size: 24px;
        text-align: center;
      }

      .areaAnuncios,
      .areaPublicaciones {
        padding: 10px;
      }

      .uno {
        padding: 15px;
        width: 95%;
      }
    }

  </style>
   <?php
        $direccion="localhost";
        $usuario="root";
        $contrasena="";
        $dbname="proyecto3"; 
        $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
        if($conexion->error){
            echo"Hubo un error al conectar a la base de datos";
        }
        ?>
</head>
<body class="body">
  <?php
     if($_SESSION['rol']==2 ){
           include("/grupo-3/Proyecto3.1/Profesor/inicio2.php");  
        }else{
            if($_SESSION['rol']==1 ){
            include("/grupo-3/Proyecto3.1/Estudiante/inicio1.php");
        }
      }
  ?>
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

  <div class="mn">
      <?php
      if($_SESSION['rol']==2 ){
            include("/grupo-3/Proyecto3.1/Profesor/subprofesor.php");  
          }else{
              if($_SESSION['rol']==1 ){
              include("/grupo-3/Proyecto3.1/Estudiante/subestudiante.php");
          }
          }
      ?>
  </div>

  <section class="clase-header">
    <div class="header-banner">
      <div class="header-text">
        <h1 class="titulo-clase"><?= $nombre ?></h1>
      </div>
    </div>

    <div class="sub-info">
      <p><strong>Profesor:</strong> <?= $Nombreprofesor ?> <?= $Apellidoprofesor ?></p>
    </div>
  </section>


  <section class="areaAnuncios">
  <div id="codigo">
    <h1>Código de la clase:<?= $codigo ?></h1>
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
              <form action="Publicaciones.php" method="post" enctype="multipart/form-data">
                <textarea name="Publicaciones" placeholder="Anuncio algo a la clase" id="Anunciaalgo" >
                  
                </textarea>
                <input type="hidden" name="ID" value="<?=$ID?>">
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

  <section class="areaPublicaciones">
  <div class="Publicaciones">
    <?php
        $User=$_SESSION['CI'];
        $sql3="SELECT * FROM Publicaciones  WHERE Clases_ID='$ID'  ORDER BY FechaCreacion DESC";
        $resultado3 = $conexion->query($sql3);
        if ($resultado3->num_rows>0){
            while($fila3=$resultado3->fetch_assoc()){
                       $Texto= $fila3['Texto'];
                       $FechaCreacion= $fila3['FechaCreacion'];
                       $ID_publicacion= $fila3['id'];
    ?>
                <div id="publicacion1">
                        <h2><?=$Texto?></h2>
                        <h2><?=$FechaCreacion?></h2>
                        <a href="editarpublicacion.php?ID_clase=<?= $ID_publicacion?>">Editar</a>     
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
          
            if ($archivoEncontrado){
            $extension = strtolower (pathinfo($archivoEncontrado, PATHINFO_EXTENSION));
            if (in_array($extension, ["jpg", "jpeg", "png","gif","webp"])){
          echo "<img src='$archivoEncontrado' alt ='Archivo' width='250'>";
            }elseif ($extension === "pdf"){
                echo "<embed src='$archivoEncontrado' type= 'application/pdf' width='400' height='250'>";
            }else{
                echo "<a href='$archivoEncontrado' download> Descargar archivo </a>";
            }
                  }
              }
            }
      ?>
     
   </div>
</section>

<script>
  const textarea = document.getElementById('Anunciaalgo');
  const barraFormato = document.getElementById('barraFormato');

  textarea.addEventListener('focus', () => {
    barraFormato.style.display = 'block';
  });

  
  textarea.addEventListener('blur', () => {
    setTimeout(() => {
      if (!document.activeElement.closest('#barraFormato')) {
        barraFormato.style.display = 'none';
      }
    }, 100); 
  });
</script>
</body>
</html>