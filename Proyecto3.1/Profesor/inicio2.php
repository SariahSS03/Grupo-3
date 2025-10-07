<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body-inicio2{
            margin: 0px;
        }
        .principal{
            background: rgb(1, 1, 49);
            display: flex;
            width: 100%;
            height:70px ;
            grid-area: principal;
            margin-bottom: 10px;
        }
        #primero1{
            width: 50%;
            padding-bottom: 10px;
            padding-top: 12px;
            padding-left: 12px;
        }
        #col{
            position: relative;
            left: 95px;
            bottom: 52px;
            color: white; 
        }
        
        #segundo1{ 
            width: 50%;
            padding-bottom: 10px;
            padding-top: 12px;
            padding-left: 12px;
            padding-right: 12px;
            display: flex;
            gap: 20px;
            flex-direction:row-reverse;
        }
        .boton{
            border: none;
            background-size: cover;
            background-color: transparent;
        }
        .opciones{
           background-color: white;
            display: flex;
            flex-direction: column;
            width: 250px;
            grid-area: opciones;
            gap: 5px;
            padding-top:12px;
            padding-right: 23px;
            padding-left: 12px;
            border-right: 5px solid rgb(234, 234, 244);
            height: 100%;           /* Ocupa todo el alto de la ventana */
            box-sizing: border-box;  /* Para que padding no aumente el tamaño */
            overflow-y: auto;        /* Scroll vertical si contenido es mayor */
        }
        #imagen {
            display: flex;              /* Poner imagen y texto en fila */
            align-items: center;        /* Centrar verticalmente */
            gap: 8px;                   /* Espacio entre imagen y texto */
            border-radius: 25px;
            border: none;
            background-color: rgb(229, 229, 238);
            height: 50px;
            padding: 0 15px;            /* Espacio interno a los lados */
            cursor: pointer;
        }

        #in {
            display: block;             /* Evita espacio extra debajo de la imagen */
        }

        #do {
            margin: 0;                  /* Quita el margen por defecto del <p> */
            font-family: Arial, sans-serif; /* Opcional, para buena legibilidad */
            font-size: 16px;            /* Tamaño de texto ajustable */
        }

        #imagen3 {
            display: flex;              /* Hace que los hijos (img y p) estén en fila */
            align-items: center;        /* Centra verticalmente */
            gap: 8px;                   /* Espacio entre imagen y texto */
            border-radius: 25px;
            border: none;
            background-color: rgb(229, 229, 238);
            height: 50px;
            padding: 0 15px;            /* Espacio interno a los lados */
            cursor: pointer;            /* Manito al pasar */
        }

        #aj {
            display: block;             /* Para evitar espacios extra */
        }

        #cu {
            margin: 0;                  /* Elimina margen por defecto del <p> */
            font-family: Arial, sans-serif; /* Opcional: para que el texto se vea bien */
            font-size: 16px;            /* Ajusta tamaño a gusto */
        }
        #cla{
            padding: 10px;
            
        }
        .encabezado-clases {
            display: flex;
            align-items: center;
            gap: 10px; /* separación entre imagen y texto */
            padding: 10px 0;
        }
        .titulo-clases {
            font-size: 22px;
            font-weight: bold;
            margin: 0;
        }

        .clase4 {
            background-color: #f1f3f4;
            border-radius: 30px;
            height: auto;
            display: flex;
            align-items: center;
            padding: 10px 15px;
            gap: 10px;
            margin-top:5px;
            width: 200px;
            font-family: Arial, sans-serif;
            text-decoration: none;
            box-sizing: border-box;  /* Para que padding no aumente el tamaño */
            overflow-y: auto;        /* Scroll vertical si contenido es mayor */
        }

        .icono {
            background-color: #dfe3e8;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
            box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.15);/* Sombra agregada */
        }

        .contenido {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .titulo {
            margin: 0;
            font-size: 16px;
            color: #202124;
        }

        .subtitulo {
            margin: 0;
            font-size: 14px;
            color: #5f6368;
        }
        
    </style>
</head>
<body class="body-inicio2">
    <div class="principal">
        <div id="primero1">
        <button onclick="window.location.href='/grupo-3/Proyecto3.1/Profesor/inicioprofesor.php'" class="boton" >
            <img style="position: relative; bottom:3px;" width="85px" height="50px" src="/grupo-3/Proyecto3.1/Imagenes/dos.png">
            <p id="col">FEDERICO AGUILO</p>
        </button>
        </div>

        <div id="segundo1">  
            <button class="boton" title="Cerrar sesion"> 
                <img onclick="window.location.href='/grupo-3/Proyecto3.1/cerrarsesion.php'" style="position: relative; bottom: 6px;" width="55px" height="55px" src="/grupo-3/Proyecto3.1/Imagenes/cinco.png">
            </button>
            <button class="boton" title="Crear clase">
                <img onclick="window.location.href='/grupo-3/Proyecto3.1/Profesor/creaciondeclase.php'" width="33px" height="35px" src="/grupo-3/Proyecto3.1/Imagenes/tres.png">
            </button>
        </div>
    </div>
    <div  class="opciones">
        <button id="imagen" onclick="window.location.href='/grupo-3/Proyecto3.1/Profesor/inicioprofesor.php'">
             <img id="in" width="27px" height="27px" src="/grupo-3/Proyecto3.1/Imagenes/casa.png"> 
             <p id="do">inicio</p>
        </button>
        <div id="cla">
            <div class="encabezado-clases">
                <img class="icono-clase" width="57px" height="57px" src="/grupo-3/Proyecto3.1/Imagenes/clase.png">
                <h2 class="titulo-clases">Clases</h2>
            </div>
            <?php
                $User=$_SESSION['CI'];
                $sql="SELECT*FROM Clases   WHERE Profesor='$User'";
                $resultado = $conexion->query($sql);
                if ($resultado->num_rows>0){
                    while($fila=$resultado->fetch_assoc()){
                        $nombre= $fila['Nombre'];
                        $inicial= $fila['Inicial'];
                        $color= $fila['Color'];
                        $curso= $fila['Curso'];
                        $Clases_ID= $fila['ID'];
            ?>
                        <div class="clase4">
                            <div class="icono">
                                <span style="color: <?php echo $color; ?>"><?= $inicial ?></span>
                            </div>
                            <div class="contenido">
                                <a href="/grupo-3/Proyecto3.1/aulaoriginal.php?ID=<?= $Clases_ID ?>">
                                    <h2 class="titulo"><?= $nombre ?></h2>
                                </a>
                                <p class="subtitulo"><?= $curso?></p>
                            </div>
                        </div>
                    <?php
                                }
                            }
                    ?>
        </div>
        <button id="imagen3" onclick="window.location.href='/grupo-3/Proyecto3.1/Estudiante/informacion.php'">
            <img id="aj" width="28px"  height="27px"  src="/grupo-3/Proyecto3.1//Imagenes/ajustes.png">
           <p id="cu">ajustes</p>
        </button> 
    </div>
   
    
</body>
</html>