<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body-administrador {
        margin:0px;
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
        .opciones {
            background-color: white;
            display: flex;
            flex-direction: column;
            width: 250px;
            grid-area: opciones;
            gap: 10px;
            padding: 15px;
            border-right: 5px solid rgb(234, 234, 244);
        }

        .boton-opcion {
            display: flex;
            align-items: center;
            gap: 12px; /* Separación entre imagen y texto */
            border-radius: 25px;
            border: none;
            background-color: rgb(229, 229, 238);
            height: 50px;
            padding: 0 15px;
            font-family: "Segoe UI", sans-serif;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .boton-opcion:hover {
            background-color: #dcdcef;
        }

        .boton-opcion img {
            display: block;
        }

    </style>
</head>
<body class="body-administrador">
    <div class="principal">
        <div id="primero1">
        <button onclick="window.location.href='Administrador.php'" class="boton" >
            <img style="position: relative; bottom:3px;" width="85px" height="50px" src="/grupo-3/Proyecto3.1/Imagenes/dos.png">
            <p id="col">FEDERICO AGUILO</p>
        </button>
        </div>

        <div id="segundo1">  
            <button class="boton" title="Cerrar sesion"  > 
            <img onclick="window.location.href='/grupo-3/Proyecto3.1/cerrarsesion.php'" style="position: relative; bottom: 6px;" width="55px" height="55px" src="/grupo-3/Proyecto3.1/Imagenes/cinco.png">
            </button>
        </div>

    </div>
    <div class="opciones">
    <button class="boton-opcion" onclick="window.location.href='/grupo-3/Proyecto3.1/Administrador/Usuarios.php'">
        <img src="/grupo-3/Proyecto3.1/Imagenes/casa.png" width="27" height="27" alt="Icono Usuarios">
        <span>Usuarios</span>
    </button>
    <button class="boton-opcion" onclick="window.location.href='/grupo-3/Proyecto3.1/Estudiante/informacion.php'">
        <img src="/grupo-3/Proyecto3.1/Imagenes/ajustes.png" width="28" height="27" alt="Icono Información">
        <span>Información</span>
    </button>
    </div>
</body>
</html>