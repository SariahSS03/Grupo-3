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
      grid-template-columns: 16% 84% ;
      grid-template-rows: auto auto auto auto auto;
      grid-template-areas:"principal principal"
                          "opciones mn"
                          "opciones quimica"
                          "opciones areaAnuncios"
                          "opciones areaPublicaciones";
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      background-color: #94a5bdff;
      margin:0px;
    }
    .quimica {
      background-color: #a09e9eff;
      text-align: center;
      padding: 30px 10px;
      color: #ffeefc5e;
      grid-area: quimica;
    }

    .quimica h1 {
      font-size: 35px;
      font-family: 'Trebuchet MS', sans-serif;
    }
/*anuncio*/
    .areaAnuncios {
      background-color: #0c394eff;
      padding: 10px 1px;
      display: flex;
      flex-direction: column;
      align-items: center;
      grid-area: areaAnuncios;    
      
    }
    .boton1 {
      margin-top: 10px;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      background-color: #f0f0f0;
      color: black;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .boton1:hover {
      background-color: #6b6b72;
      transform: scale(1.05);
    }
    .areaPublicaciones{
      grid-area: areaPublicaciones;
      background-color: rgba(18, 33, 71, 1) ;
    }
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

  #materia{
    font-size:50px;
    color:black;
    
  }

  #codigo{

    width:200px;
    font-family:"Tinos", serif;
    font-size:15px;
   margin-right:1300px;
    grid-area:codigo;
    height:170px;
    position: absolute; 
  bottom:800px;
  top:520px;
  border-radius: 10px;
  background-color: #8fa3c2ff;
  }
/* Contenedor general */
.areaPublicaciones {
  display: flex;
  justify-content: center;
  padding: 20px;
  background-color: #f5f5f5;
}

.Publicaciones {
  width: 100%;
  max-width: 700px;
}

/* Tarjeta de publicación */
#publicacion1 {
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.1);
  padding: 16px;
  margin-bottom: 20px;
  position: relative;
}

/* Cabecera de usuario */
#publicacion1 h2:first-of-type {
  font-size: 16px;
  margin: 0 0 4px 0;
  font-weight: 500;
}

/* Fecha */
#publicacion1 h2:nth-of-type(2) {
  font-size: 12px;
  margin: 0;
  color: #757575;
  font-weight: normal;
}

/* Enlace editar */
#publicacion1 a {
  display: inline-block;
  margin-top: 10px;
  font-size: 13px;
  color: #1a73e8;
  text-decoration: none;
}

/* Archivo adjunto */
#publicacion1 img,
#publicacion1 embed {
  display: block;
  margin-top: 15px;
  border-radius: 6px;
  max-width: 100%;
  height: auto;
  box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

#publicacion1 a[download] {
  display: inline-block;
  margin-top: 15px;
  background: #f1f3f4;
  padding: 10px 15px;
  border-radius: 6px;
  font-size: 14px;
  color: #333;
  text-decoration: none;
}

#publicacion1 a[download]:hover {
  background-color: #e0e0e0;
}
@media screen and (max-width: 768px) {
  .body {
    grid-template-columns: 1fr;
    grid-template-areas: 
      "principal"
      "mn"
      "quimica"
      "areaAnuncios"
      "areaPublicaciones";
  }
  #materia {
    font-size: 24px;
    text-align: center;
  }
  .uno {
    width: 95%;
    padding: 15px;
  }
  #Anunciaalgo {
    font-size: 14px;
    min-height: 60px;
  }
  #codigo {
    width: 90%;
    margin: 15px auto;
    position: relative;
    top: auto;
    bottom: auto;
    left: auto;
  }
 .areaAnuncios, .areaPublicaciones {
    padding: 10px;
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
           include("Profesor/inicio2.php");  
        }else{
            if($_SESSION['rol']==1 ){
            include("Estudiante/inicio1.php");
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
            include("Profesor/subprofesor.php");  
          }else{
              if($_SESSION['rol']==1 ){
              include("Estudiante/subestudiante.php");
          }
          }
      ?>
  </div>

  <section class="quimica">
    <h1 id="materia">MATERIA: <?= $nombre ?></h1>
    <h1>Usuario: <?= $User ?></h1>
    <h1>Profesor: <?= $Nombreprofesor ?> <?= $Apellidoprofesor ?></h1>
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
                        <a href="Personasestudiantes.php?ID_publicacion=<?= $ID_publicacion?>">Editar</a>     
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