<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:none;
            display: grid;
            grid-template-rows: auto auto auto auto auto;
            grid-template-columns: 16% 84% ;
            grid-template-areas: "principal principal"
                                 "opciones clases"
                                 "opciones clases";
        margin:0px;                       
        }
        .clases {
            border-top: 5px solid black;
            grid-area: clases;
            gap: 10px;
            display: flex;
            flex-wrap: wrap; /* 🧠 para que bajen automáticamente */
            justify-content: flex-start;
            padding: 20px;
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
            margin: 10px; /* 🧠 separa tarjetas */
        }

        /* Cabecera */
        .cabecera {
            background-image: url('https://i.imgur.com/kzjzKQZ.png');
            background-size: cover;
            background-position: center;
            padding: 15px;
            height: 110px;
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
            background: #8e44ad;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
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

    </style>
</head>
<body>
      <?php
        $direccion="localhost";
        $usuario="root";
        $contrasena="";
        $dbname="proyecto3"; 
        
        $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
        if($conexion->error){
            echo"Hubo un error al conectar a la base de datos";
        }
        session_start();
        if($_SESSION['rol']==2 ){
            header('Location: ../Profesor/inicioprofesor.php');
        }
        ?>
    <?php
    include("inicio1.php");
    ?>
    <div class="clases">
    <?php
                $User=$_SESSION['CI'];
                $sql="SELECT*FROM clases_has_cuenta  WHERE Cuenta_User='$User'";
                $resultado = $conexion->query($sql);
                if ($resultado->num_rows>0){
                    while($fila=$resultado->fetch_assoc()){
                        $Clases_ID= $fila['Clases_ID'];
                        $sql2= "SELECT*FROM  Clases WHERE ID='$Clases_ID'";
                        $resultado2= $conexion->query($sql2);
                        if ($resultado2->num_rows>0){
                            while($fila2=$resultado2->fetch_assoc()){
                                $nombre= $fila2['Nombre'];
                                $inicial= $fila2['Inicial'];
                                $color= $fila2['Color'];
                                $curso= $fila2['Curso'];
        ?>
                <div class="clase">
                    <div class="cabecera">
                        <a href="aulaoriginal.php?ID=<?= $Clases_ID ?>">
                            <h2 class="nombre"><?= $nombre ?></h2>
                        </a>
                        <p class="grado"><?= $curso ?></p>
                    </div>

                    <div class="avatar">
                        <h1 class="inicial"><?= $inicial ?></h1>
                    </div>

                    <div class="acciones">
                        <a><img width="30px" height="25px" src="../Imagenes/perfilclase.png"></a>
                        <a><img width="35px" height="25px" src="../Imagenes/archivoclase.png"></a>
                        <a class="btnOpciones"><img width="35px" height="25px" src="../Imagenes/puntitosclase.png"></a>
                    </div>

                    <div class="menuOpciones">
                        <a class="opcion" href="salirdeclase.php?ID_Clase=<?= $Clases_ID ?>">Cancelar Registro</a>
                    </div>
                </div>
    <?php
                }
            }
        }
    }
    ?>
   </div>
    <script>
    function redirigir() {
      window.location.href = "aulaoriginal.php?ID=<?=$Clases_ID?>";
    }
  </script>
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
    
</body>
</html>