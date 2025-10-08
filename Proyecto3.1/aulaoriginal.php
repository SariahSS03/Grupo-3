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
      grid-template-rows: 9% auto auto auto auto;
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
      background-color: #ddddddff;
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
}

#publicacion1 {
  background: #fff;
  padding: 20px;
}

#publicacion1:hover {
}

  font-size: 18px;
}

#publicacion1 .fecha {
}
.enlaces {
  display: flex;
}

#publicacion1 a.editar,
#publicacion1 a.eliminar {
  border-radius: 6px;
  color: #1a73e8;
  text-decoration: none;
}

#publicacion1 a.editar:hover,
#publicacion1 a.eliminar:hover {
  background-color: #e0e0e0;
}

#publicacion1 a[download] {
  display: inline-block;
  padding: 10px 15px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

#publicacion1 a[download]:hover {
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
        $User=$_SESSION['CI'];
        $sql3="SELECT * FROM Publicaciones  WHERE Clases_ID='$ID'  ORDER BY FechaCreacion DESC";
        $resultado3 = $conexion->query($sql3);
        if ($resultado3->num_rows>0){
            while($fila3=$resultado3->fetch_assoc()){
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