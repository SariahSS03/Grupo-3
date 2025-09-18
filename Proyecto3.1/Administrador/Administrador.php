<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        display: grid;
        grid-template-columns: 16% 84% ;
        grid-template-rows: auto auto auto auto auto;
        grid-template-areas:"principal principal"
                            "opciones mostrar";
        margin:0px;
        }
        .mostrar{
            grid-area:mostrar;
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
        #clase4{
            background-color: #f1f3f4;;
            border-radius:30px;
            position:relativo;
            height:45px;
             justify-content: space-between; 
             align-items:center;
        }
        #z{
            color:black;
            font-size:18px;
            position: relative;
            left:7%;
            top:18%;
        }
    </style>
</head>
<?php
        $direccion="localhost";
        $usuario="root";
        $contrasena="";
        $dbname="proyecto3"; 
        $conexion= new mysqli($direccion,$usuario,$contrasena,$dbname);
        if($conexion->error){
            echo"Hubo un error al conectar a la base de datos";
        }
        if($_SESSION['rol']==2 ){
            header('Location: aulaoriginal.php');
        }if($_SESSION['rol']==1 ){
            header('Location: aulaoriginal.php');
        }
        ?>
<body>
    
    <div class="principal">

        <div id="primero1">
        <button onclick="window.location.href='Administrador.php'" class="boton" >
            <img style="position: relative; bottom:3px;" width="85px" height="50px" src=" Imagenes/dos.png">
            <p id="col">FEDERICO AGUILO</p>
        </button>
        </div>

        <div id="segundo1">  
            <button class="boton"> 
            <img onclick="window.location.href='cerrarsesion.php'" style="position: relative; bottom: 6px;" width="55px" height="55px" src="Imagenes/cinco.png">
            </button>
        </div>

    </div>
    <div  class="opciones">
        <button id="imagen" onclick="window.location.href='Usuarios.php'">
             <img id="in" width="27px" height="27px" src="Imagenes/casa.png"> 
             <p id="do">Usuarios</p>
        </button>
        <button onclick="window.location.href='Clases.php'" id="imagen2">
             <img id="ca" width="40px" height="40px" src="Imagenes/cal.png">
            <p id="tr">Clases</p>
        </button>
        <button id="imagen3" onclick="window.location.href='informacion.php'">
            <img id="aj" width="28px"  height="27px"  src="Imagenes/ajustes.png">
           <p id="cu">     Informacion</p>
        </button> 
    </div>
    <div class="mostrar">
        
    </div>
   
    
</body>
</html>