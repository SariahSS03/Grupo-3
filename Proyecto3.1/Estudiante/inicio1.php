<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
            display: flex;
            gap: 5px;
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
            padding-right: 23px;
            padding-left: 12px;
            border-right: 5px solid rgb(234, 234, 244);
        }
        #imagen{
           border-radius: 25px;
           border: none;
           background-color: rgb(229, 229, 238);
           height: 50px;
        }
         #do{
            position: relative;
            right: 37px;
            bottom: 27px;

        }
        #in{
            position: relative;
            right: 80px;
            top: 10px;

        }
        #imagen2{
            border-radius: 25px;
           border: none;
            background-color: rgb(229, 229, 238);
           height: 50px;
         
        }
        #tr{
            position: relative;
            right: 24px;
            bottom: 40px;

        }
        #ca{
            position: relative;
            right: 80px;
            top: 7px;
            background-size: cover;
            background-color: transparent;

        }
        
        #imagen3{
           border-radius: 25px;
           border: none;
            background-color: rgb(229, 229, 238);
           height: 50px;
        }
        #cu{
            position: relative;
           
            right: 32px;
            bottom: 28px;

        }
        #aj{
            position: relative;
            right: 80px;
            top: 11px;

        }
        #cla{
            padding: 10px;
            
        }
        .clase4 {
            background-color: #f1f3f4;
            border-radius: 30px;
            height: 60px;
            display: flex;
            align-items: center;
            padding: 10px 15px;
            gap: 10px;
            width: fit-content;
            font-family: Arial, sans-serif;
            text-decoration: none;
        }

        .icono {
            background-color: #dfe3e8;
            color: #3c4043;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
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
<body>
    
    <div class="principal">
        <div id="primero1">
        <button onclick="window.location.href='inicioestudiante.php'" class="boton" >
            <img style="position: relative; bottom:3px;" width="85px" height="50px" src="../Imagenes/dos.png">
            <p id="col">FEDERICO AGUILO</p>
        </button>
        </div>
        <div id="segundo1">  
            <button class="boton" title="Cerrar sesion"> 
            <img onclick="window.location.href='../cerrarsesion.php'" style="position: relative; bottom: 6px;" width="55px" height="55px" src="../Imagenes/cinco.png">
            </button>
            <button class="boton" title="Unirse a una clase">
            <img onclick="window.location.href='unirseaclase.php'" width="33px" height="35px" src="../Imagenes/tres.png">
            </button>
        </div>
    </div>
    <div  class="opciones">
        <button id="imagen" onclick="window.location.href='inicioestudiante.php'">
             <img id="in" width="27px" height="27px" src="../Imagenes/casa.png"> 
             <p id="do">inicio</p>
        </button>
        <div id="cla">
            <center>Clases</center>
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
                        <div class="clase4">
                            <div class="icono">
                                <span style="color: <?php echo $color; ?>"><?= $inicial ?></span>
                            </div>
                            <div class="contenido">
                                <a href="aulaoriginal.php?ID=<?= $Clases_ID ?>">
                                    <h2 class="titulo"><?= $nombre ?></h2>
                                </a>
                                <p class="subtitulo"><?= $curso?></p>
                            </div>
                        </div>
            <?php
                    }
                }
            }
        }
            ?>
        </div>
        <button id="imagen3" onclick="window.location.href='informacion.php'">
            <img id="aj" width="28px"  height="27px"  src="../Imagenes/ajustes.png">
           <p id="cu">Informacion</p>
        </button> 
    </div>
   
    
</body>
</html>