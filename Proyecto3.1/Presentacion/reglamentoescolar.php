<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: grey;
        }
    .principal{
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30;
        padding: 20px;
        background-color:  #1e88e559

;
        
    }
       .caja1{
        background-color:beige;
        border: 2px solid black;
        border-radius: 5px;
        box-shadow:  0 4px 8px rgba(247, 244, 244, 0.781);
        transform: scale(1);
        transition: transform 0.3s ease-in;
        width: 500px;
    
       }
       .caja1:hover{
        transform: scale(1.1);
        transition: transform 0.2 ease in ;
       }
.caja2{
        background-color:beige;
        border: 2px solid black;
        border-radius: 5px;
        margin-left: 500px;
        box-shadow:  0 4px 8px rgba(247, 244, 244, 0.781);
        transform: scale(1);
        transition: transform 0.3s ease-in;
        width: 500px;
    
       }
       .caja2:hover{
        transform: scale(1.1);
        transition: transform 0.2 ease in ;
       }


     .letra{
       margin-right:50px;
     }
    .titulo{
        margin-top: 100px;
        color: gold;
        font-size: 50px;
    }
    .li{
        color:black;
    }
    </style>
</head>
<body>
    <header>
      <?php
      include("menu.php");
      ?>
    </header>
    <center><h2 class="titulo">UNIFORME DE U.E.F.A<br></h2></center>
    <div class="principal">
    
        <div class="caja1"><strong><h2>
        SEGUN REGLAMENTO MUJERES</strong></h2>
        
    <h4 class="letra">
        <li class="li">FALDA COLOR PLOMO MARENGO SOBRE LA RODILLA</li><br>
        <li  class="li">CAMISA BLANCA </li><br>
        <li class="li">CHOMPA AZUL</li><br>
        <li class="li">CORBATA DEL ESTABLECIMIENTO </li><br>
        <li class="li">MEDIAS BLANCAS Y LARGAS</li><br>
        <li class="li">ZAPATOS NEGROS</li><br>
        <li class="li">EN CASO DE FRIO PANTALÓN PLOMO MARENGO</li><br>
        <li class="li">CABELLO RECOGIDO MOÑO CON RED</li><br>
        <li class="li">UÑAS RECORTADAS Y SIN ESMALTE</li><br>
        <li class="li">PARA EDUCACIÓN FÍSICA</li><br>
        <li class="li">EL DEPORTIVO DEL ESTABLECIMIENTO</li><br>
        PROHIBIDO:<br>
        <li class="li">TINTE EN EL CABELLO PIERCING</li><br>
        <li class="li">GORRAS,CHOMPAS DE OTRO COLOR</li><br>
        <li class="li">CABELLO SUELTO</li>
         </h4>
         </div>

         
            <div class="caja2"><h2>
        SEGUN REGLAMENTO VARONES</h2>
    <h4 class="letra">
   PANTALÓN PLOMO MARENGO<br>
   CAMISA BLANCA<br>
   CHOMPA AZUL <br>
   ZAPATOS NEGROS<br>
   CORBATA DEL ESTABLECIMIENTO<br> 
   CORTE ESCOLAR<br>
   PARA EDUCACIÓN FÍSICA<br>
   EL DEPORTIVO DEL ESTABLECIMIENTO<br>
   PROHIBIDO:<br>
   TINTE EN EL CABELLO - PIERCING,GORRAS,CHOMPAS DE OTRO COLOR
         </h4>
         </div>

    </div>
    <header>
      <?php
      include("menu2.php");
      ?>
    </header>
</body>
</html>