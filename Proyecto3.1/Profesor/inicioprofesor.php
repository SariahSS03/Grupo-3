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
        header('Location:/grupo-3/Proyecto3.1/Estudiante/inicioestudiante.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body-inicio-profesor{
            margin:none;
            display: grid;
            grid-template-rows: auto auto auto auto auto;
            grid-template-columns: 16% 84% ;
            grid-template-areas: "principal principal"
                                " opciones clases";
            margin:0px;
        }
        .clases {
            grid-area: clases;
            gap: 10px;
            display: flex;
            flex-wrap: wrap; /*para que bajen automáticamente */
            justify-content: flex-start;
            padding: 20px;
            width: 100%;
            height: 100%;
            margin-left:20px;
        }

        /* Tarjeta individual */
        .clase {
            background-color: white;
            border-radius: 15px;
            border: 1px solid #ccc;
            width: 250px;
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
            font-family: Arial, sans-serif;
            margin: 10px; /*separa tarjetas */
        }

        /* Cabecera */
        .cabecera {
            background-size: cover;
            background-position: center;
            padding: 15px;
            padding-top: 20px;
            height: 70px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            color: white;
            position: relative;
        }

        .nombre {
            font-size: 20px;
            margin: 0;
            font-weight: bold;
            color: white;
        }

        .grado {
            font-size: 14px;
            color: #d0e3f1;
            text-decoration: underline;
            margin: 5px 0 0;
        }

        /* Circulo (letra inicial) */
        .avatar {
            position: absolute;
            top: 70px;
            right: 10px;
            background-color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
            font-size: 22px;
        }

        .inicial {
            margin: 0;
        }

        /* Iconos inferiores */
        .acciones {
            height: 50px;
            border-top: 1px solid #ccc;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0 10px;
            gap: 15px;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .acciones a {
            cursor: pointer;
        }

        /* Menú Opciones */
        .menuOpciones {
            display: none;
            position: absolute;
            bottom: 60px;
            right: 10px;
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 10px;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.1);
            z-index: 10;
            border-radius: 5px;
        }

        .opcion {
            padding: 5px 10px;
            cursor: pointer;
            color: #333;
            display: block;
        }

        .opcion:hover {
            background-color: #f0f0f0;
        }

        a {
            text-decoration: none;
        }
        * {
            box-sizing: border-box; /*Esto evitara que los padding o el borde se desborder y se muevan */
        }
        @media (max-width: 768px) {
            .body-inicio-estudiante {
                display: block;
                padding: 10px;
            }

            .clases {
                padding: 10px;
                justify-content: center;
                gap: 15px;
            }

            .clase {
                width: 90%; /* O puedes usar 100% si quieres que ocupen todo */
                height: auto;
                margin: 10px auto;
            }

            .cabecera {
                padding: 10px;
                height: auto;
            }

            .nombre {
                font-size: 18px;
                text-align: center;
            }

            .grado {
                font-size: 13px;
                text-align: center;
            }

            .avatar {
                top: 10px;
                right: 10px;
                width: 40px;
                height: 40px;
                font-size: 18px;
                padding: 5px;
            }

            .acciones {
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
                padding: 10px;
            }

            .acciones img {
                width: 30px;
                height: 25px;
            }

            .menuOpciones {
                right: 5px;
                bottom: 60px;
            }
        }
    </style>
</head>
<?php

?>
<body class="body-inicio-profesor">
    <?php
    include("../Profesor/inicio2.php");
    ?>
    <div class="clases ">
    <?php
        $User=$_SESSION['CI'];
        $sql="SELECT*FROM clases   WHERE Profesor='$User'";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows>0){
            while($fila=$resultado->fetch_assoc()){
                $nombre=$fila['Nombre'];
                $inicial=$fila['Inicial'];
                $color=$fila['Color'];
                $curso=$fila['Curso'];
                $Clases_ID=$fila['ID'];
    ?>
                <div class="clase">
                    <div class="cabecera" style="background-color: <?php echo $color; ?>">
                        <a href="/grupo-3/Proyecto3.1/aulaoriginal.php?ID=<?= $Clases_ID ?>">
                            <h2 class="nombre"><?= $nombre ?></h2>
                        </a>
                        <p class="grado"><?= $curso ?></p>
                    </div>

                    <div class="avatar">
                        <h1 class="inicial" style="color: <?php echo $color; ?>"><?= $inicial ?></h1>
                    </div>

                    <div class="acciones">
                        <a href="/grupo-3/Proyecto3.1/Profesor/Personasprofesor.php?ID=<?= $Clases_ID ?>">
                            <img width="30px" height="25px" src="/grupo-3/Proyecto3.1/Imagenes/perfilclase.png">
                        </a>
                        <a href="/grupo-3/Proyecto3.1/Profesor/TrabajodeClase.php?ID=<?= $Clases_ID ?>">
                            <img width="35px" height="25px" src="/grupo-3/Proyecto3.1/Imagenes/archivoclase.png">
                        </a>
                        <a class="btnOpciones" id="btnOpciones">
                            <img width="35px" height="25px" src="/grupo-3/Proyecto3.1/Imagenes/puntitosclase.png">
                        </a>
                    </div>

                    <div class="menuOpciones" id="menuOpciones">
                        <a class="opcion" href="/grupo-3/Proyecto3.1/Profesor/eliminarclase.php?ID_Clase=<?= $Clases_ID ?>">Eliminar clase</a>
                    </div>
                </div>
                <script>
                    const btnOpciones = document.getElementById("btnOpciones");
                    const menu = document.getElementById("menuOpciones");

                    btnOpciones.addEventListener("click", (e) => {
                        e.stopPropagation(); // evita cerrar el menú de inmediato
                        menu.style.display = (menu.style.display === "block") ? "none" : "block";
                    });

                    document.addEventListener("click", (e) => {
                        if (!btnOpciones.contains(e.target) && !menu.contains(e.target)) {
                            menu.style.display = "none";
                        }
                    });
                </script>
    <?php
            }
        }
     ?>
   </div>
  <script>
    function redirigir() {
      window.location.href = "/grupo-3/Proyecto3.1/aulaoriginal.php?ID=<?=$Clases_ID?>";
    }
  </script>
    
</body>
</html>