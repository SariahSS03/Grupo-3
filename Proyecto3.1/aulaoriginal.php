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
    .body-aula-original {
      display: grid;
      grid-template-columns: 13% 88%;
      grid-template-rows: auto auto auto auto auto;
      grid-template-areas:
        "principal principal"
        "opciones mn"
        "opciones quimica"
        "opciones areaAnuncios"
        "opciones areaPublicaciones";
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      background-color: #ffffffff;
      margin: 0px;
    }

    /* Área anuncios */
    .areaAnuncios {
      align-items: center;
      display: flex;
      flex-direction: column;
      grid-area: areaAnuncios;
      padding: 10px 1px;
    }

    /* Área publicaciones */
    .areaPublicaciones {
      display: flex;
      flex-direction:column;
      justify-content: center;
      padding: 20px;
      grid-area:areaPublicaciones;
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
      margin-bottom: 10px;
      padding: 10px 20px;
      width:100%;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .boton1:hover {
      background-color: #6b6b72;
      transform: scale(1.05);
    }
  /* Estilo para el input file oculto */
      input[type="file"] {
        display: none;
      }

      /* Botón que reemplaza al input file */
      .custom-file-label {
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 10px 15px;
        margin-top: 10px;
        margin-bottom: 10px;
        width:85%;
        cursor: pointer;
        display: inline-block;
        transition: background-color 0.3s ease;
      }

      .custom-file-label:hover {
        background-color: #e0e0e0;
      }
    /* Contenedor blanco */
    .uno {
      background-color: white;
      border-radius: 30px;
      padding: 30px;
      width: 60%;
    }

    /* Header clase */
    .clase-header {
      background-color: #f0f4ff;      /* Fondo suave azul */
      border: 1px solid #cdd8f0;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      font-family: 'Segoe UI', sans-serif;
      margin: 30px auto;
      overflow: hidden;
      width: 70%;
      grid-area:quimica:
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
      font-size: 70px;
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
      padding-top: 10px;
      position: relative;
    }
    #cinco {
      margin-right:30px;
    }
    #opciones{
      display: flex;
      flex-direction: row-reverse;
      gap:30px;
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
    

    /* Código de clase */
    #codigo {
      background-color: #8fa3c2ff; /* Mantener el color de fondo */
      border-radius: 15px; /* Bordes más redondeados */
      font-family: "Tinos", serif; /* Fuente de clase */
      font-size: 16px; /* Ajuste de tamaño de fuente para mejor legibilidad */
      color: #333; /* Color de texto más oscuro para mejor contraste */
      padding: 20px; /* Espaciado interno para evitar que el texto quede pegado a los bordes */
      width: 100%; /* Ancho flexible para que se adapte al contenedor padre */
      max-width: 300px; /* Establecer un límite máximo de ancho para evitar que sea demasiado grande */
      box-sizing: border-box; /* Incluir padding en el cálculo del ancho */
      margin: 0 auto; /* Centrado en el contenedor */
      text-align: center; /* Alineación central del texto */
      margin-bottom: 20px; /* Espaciado inferior para separar del contenido siguiente */
    }

    #codigo p {
      margin: 0; /* Eliminar márgenes para evitar espaciados innecesarios */
      font-weight: bold; /* Hacer el texto del código más destacado */
    }
/* Contenedor general de todas las publicaciones */
.Publicaciones {
  width: 70%;
  margin: 0 auto;
  padding: 20px;
}

/* Tarjeta de cada publicación */
#publicacion1 {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
  margin-bottom: 30px;
  padding: 20px;
  transition: box-shadow 0.3s ease;
}

#publicacion1:hover {
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
}

/* Nombre del usuario */
.nombre-usuario {
  font-size: 18px;
  font-weight: 700;
  color: #1a1a1a;
  margin-bottom: 5px;
}

/* Fechas */
#publicacion1 .fecha {
  color: #999;
  font-size: 13px;
  margin-bottom: 5px;
}

/* Texto de la publicación */
.contenido-publicacion p {
  font-size: 16px;
  color: #333;
  margin-top: 15px;
  white-space: pre-wrap; /* Soporta saltos de línea */
}

/* Estilo para imagen y archivo */
.archivo-publicacion {
  margin-top: 20px;
}

.archivo-publicacion img,
.archivo-publicacion embed {
  border-radius: 8px;
  max-width: 100%;
  height: auto;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

/* Botones */
.enlaces {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 10px;
  margin-top: 20px;
}
.enlaces {
  display: flex;
  flex-direction: column; /* Apila los botones verticalmente */
  align-items: flex-start; /* Alinea a la izquierda */
  gap: 10px; /* Espacio entre los botones */
  margin-top: 10px;
}

#publicacion1 a.editar,
#publicacion1 a.eliminar {
  background-color: #f1f3f4;
  border-radius: 6px;
  color: #1a73e8;
  padding: 10px 16px;
  text-decoration: none;
  font-size: 14px;
  transition: background-color 0.2s ease, transform 0.2s ease;
}

/* Hover */
#publicacion1 a.editar:hover,
#publicacion1 a.eliminar:hover {
  background-color: #e0e0e0;
  transform: scale(1.05);
}



/* Enlace "Descargar archivo" */
#publicacion1 a[download] {
  display: inline-block;
  background-color: #f1f3f4;
  color: #333;
  border-radius: 6px;
  padding: 10px 15px;
  text-decoration: none;
  margin-top: 10px;
  transition: background-color 0.3s ease;
}

#publicacion1 a[download]:hover {
  background-color: #e0e0e0;
}
.sub-info {
  background-color: #f0f4ff;      /* Fondo suave azul */
  border: 1px solid #cdd8f0;      /* Borde sutil */
  border-radius: 8px;             /* Esquinas redondeadas */
  padding: 15px 20px;             /* Espaciado interior */
  margin: 20px 0;                 /* Separación vertical */
  font-family: 'Segoe UI', sans-serif;
  font-size: 16px;
  color: #2c3e50;                 /* Color de texto oscuro */
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);  /* Sombra ligera */
}
.sub-info strong {
  color: #1e3a8a;                 /* Color más fuerte para el texto "Profesor:" */
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
      <input type="hidden" name="ID" value="<?= $ID ?>">

      <div id="opciones" style="display: none;">
        <div id="cinco">
          <button type="submit" id="a" class="boton1">Publicar</button>
        </div>
        <div id="cuatro">
          <label for="fileToUpload" class="custom-file-label">Adjuntar archivo</label>
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
      <a href="editarpublicacion.php?ID_publicacion=<?= $ID_publicacion?>&?ID=<?= $ID?>" class="editar">Editar</a>
      <a href="eliminarpublicacion.php?ID_publicacion=<?= $ID_publicacion?>" class="eliminar">Eliminar publicación</a>
    </div>
  <?php }?> 
    </div>       
  </div><?php  
        }
      }
    }
  }
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