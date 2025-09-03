<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
      background-color: #f8f8f8;
      margin:0px;
    }

    .mn {
      background-color: #010636;
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 12px;
      grid-area: mn;
    }

    .mn a {
      text-decoration: none;
      color: white;
      font-size: 15px;
    }

    .quimica {
      background-color: #c6c6c6;
      text-align: center;
      padding: 30px 10px;
      color: #585c695e;
      grid-area: quimica;
    }

    .quimica h1 {
      font-size: 35px;
      font-family: 'Trebuchet MS', sans-serif;
    }
/*anuncio*/
    .areaAnuncios {
      background-color: #646571;
      padding: 40px 1px;
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
      background-color: blue;
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
    #tres{
            padding: 9px;
        }
    #cinco{
            
            flex-direction: row-reverse;
            gap: 15px;
        }
        #a{
            padding: 15px;
            border-radius: 105px;
            border: none;
        }
        .arriba{
            position: relative;
            top: 5px;
            padding-bottom:5px;
        }
        #abajo{
          display: flex;
          flex-direction: row;
          justify-content: space-between;
          border-top: 2px solid #020202ff;
        }
        #im{
            border: none;
        }
        #ima{
            padding: 9px;
            border: none;
            border-radius: 17px;
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
  a{
    color:black;
  }
  </style>
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
</head>
<body class="body">
  <?php
     if($_SESSION['rol']==2 ){
           include("inicio2.php");  
        }else{
            if($_SESSION['rol']==1 ){
            include("inicio1.php");
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

  <nav class="mn">
    <a href="">ANUNCIOS</a>
    <a href="creartarea.php?id=<?= $ID ?>">TAREAS</a>
    <a href="">PENDIENTES</a>
    <a href="personas.php">PERSONAS</a>
  </nav>

  <section class="quimica">
    <h1>Materia: <?= $nombre ?></h1>
    <h1>Codigo :<?= $codigo ?></h1>
    <h1>Profesor: <?= $User ?></h1>
    <h1>Profesor: <?= $Nombreprofesor ?> <?= $Apellidoprofesor ?></h1>
    
  </section>

  <section class="areaAnuncios">
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
              <form action="Publicaciones.php" method="post">
              <textarea name="Publicaciones" placeholder="Anuncio algo a la clase" id="Anunciaalgo" ></textarea>
              <input type="hidden" name="ID" value="<?=$ID?>">
            <div id="tres">
                <div class="arriba">
                    <button id="im" class="boton1">
                        <img  width="15px" height="15px"  src="https://w7.pngwing.com/pngs/738/167/png-transparent-bold-text-solid-icon.png">
                    </button>
                    <button id="im" class="boton1">
                        <img width="15px" height="15px" src="https://images.icon-icons.com/3863/PNG/512/text_italic_icon_241239.png">
                    </button>
                    <button id="im" class="boton1">
                        <img  width="15px" height="15px" src=" https://cdn-icons-png.flaticon.com/512/60/60725.png">
                    </button>
                    <button id="im" class="boton1">
                        <img width="15px" height="15px" src="https://w7.pngwing.com/pngs/48/869/png-transparent-list-bullet-list-icon-html-thumbnail.png">
                    </button>
                    <button id="im" class="boton1">
                        <img width="15px" height="15px" src="https://cdn-icons-png.flaticon.com/512/7375/7375659.png">
                    </button>
                </div>  
            </div>
            </div>
            
                <div id="abajo">
                              <div id="cuatro">
                                  <button id="ima" class="boton1">
                                      <img width="17px" height="17px" src="https://w7.pngwing.com/pngs/435/537/png-transparent-computer-icons-hyperlink-direct-link-others-miscellaneous-text-logo-thumbnail.png">
                                  </button>
                              </div>
                              <div id="cinco">
                                  <button id="a" class="boton1" >cancelar</button>
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
    ?>
                <div id="publicacion.1">
                        <h2><?=$Texto?></h2>
                        <h2><?=$FechaCreacion?></h2>
                        <a href="editarpublicacion.php">Editar</a>     
                </div>
    <?php
            }
        }
     ?>
   </div>
    </section>

</body>
</html>