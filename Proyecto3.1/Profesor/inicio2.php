<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .principal{/*si*/
            background: rgb(1, 1, 49);
            display: flex;
            width: 100%;
            height:70px ;
            grid-area: principal;
            margin-bottom: 10px;
        }
        #primero1{/*si*/
            width: 50%;
            padding-bottom: 10px;
            padding-top: 12px;
            padding-left: 12px;
            display: flex;
            gap: 5px;
        }
        #col{/*si*/
            position: relative;
            left: 95px;
            bottom: 52px;
            color: white; 
        }
        #segundo1{/*si*/
            width: 50%;
            padding-bottom: 10px;
            padding-top: 12px;
            padding-left: 12px;
            padding-right: 12px;
            display: flex;
            gap: 20px;
            flex-direction:row-reverse;
        }
        .boton{/*si*/
            border: none;
            background-size: cover;
            background-color: transparent;
        }
        .opciones{/*si*/
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
        #imagen{/*si*/
           border-radius: 25px;
           border: none;
           background-color: rgb(229, 229, 238);
           height: 50px;
        }
         #do{/*si*/
            position: relative;
            right: 37px;
            bottom: 27px;
        }
        #in{/*si*/
            position: relative;
            right: 80px;
            top: 10px;
        }
        #imagen2{/*si*/
            border-radius: 25px;
           border: none;
            background-color: rgb(229, 229, 238);
           height: 50px;
        }
        #tr{/*si*/
            position: relative;
            right: 24px;
            bottom: 40px;
        }
        #ca{/*si*/
            position: relative;
            right: 80px;
            top: 7px;
            background-size: cover;
            background-color: transparent;
        }
        
        #imagen3{/*si*/
           border-radius: 25px;
           border: none;
            background-color: rgb(229, 229, 238);
           height: 50px;
        }
        #cu{/*si*/
            position: relative;
            right: 32px;
            bottom: 28px;

        }
        #aj{/*si*/
            position: relative;
            right: 80px;
            top: 11px;

        }
        #cla{/*si*/
            padding: 10px;
            
        }
        
    </style>
</head>
<body>
    <div class="principal">

        <div id="primero1">
        <button class="boton">
            <img  width="30px" height="30px" src="Imagenes/uno.png">
        </button>
        <button onclick="window.location.href='inicioprofesor.php'" class="boton" >
            <img style="position: relative; bottom:3px;" width="85px" height="50px" src=" Imagenes/dos.png">
            <p id="col">FEDERICO AGUILO</p>
        </button>
        </div>

        <div id="segundo1">  
            <button class="boton"> 
                <img onclick="window.location.href='cerrarsesion.php'" style="position: relative; bottom: 6px;" width="55px" height="55px" src="Imagenes/cinco.png">
            </button>
            <button class="boton">
                <img  width="44px" height="35px" src="../Imagenes/cuatro.png">
            </button>
            <button onclick="window.location.href='creaciondeclase.php'" class="boton">
                <img  width="33px" height="35px" src="../Imagenes/tres.png">
            </button>
        </div>

    </div>
    <div  class="opciones">
        <button id="imagen" onclick="window.location.href='inicioprofesor.php'">
             <img id="in" width="27px" height="27px" src="../Imagenes/casa.png"> 
             <p id="do">inicio</p>
        </button>
        <button onclick="window.location.href='calendario.php'" id="imagen2">
             <img id="ca" width="40px" height="40px" src="../Imagenes/cal.png">
            <p id="tr">calendario</p>
        </button>
        <div id="cla">
            Clases
            <?php
                $User=$_SESSION['CI'];
                $sql="SELECT*FROM clases   WHERE Profesor='$User'";
                $resultado = $conexion->query($sql);
                if ($resultado->num_rows>0){
                    while($fila=$resultado->fetch_assoc()){
                        $CI= $fila['Profesor'];
                        $nombre=$fila['Nombre'];
                        $codigo=$fila['Codigo'];
                        $id=$fila['ID'];
            ?>
                        <div id="clase3">
                            <a href="aulaoriginal.php?ID=<?=$id?>">
                                <h2><?=$nombre?></h2>
                            </a>    
                        </div>
                    <?php
                                }
                            }
                        ?>
                <script>
                function redirigir() {
                window.location.href = "aulaoriginal.php";
                }
            </script>
        </div>
        <button id="imagen3" onclick="window.location.href='informacion.php'">
            <img id="aj" width="28px"  height="27px"  src="../Imagenes/ajustes.png">
           <p id="cu">ajustes</p>
        </button> 
    </div>
   
    
</body>
</html>