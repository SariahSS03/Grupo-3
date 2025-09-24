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
        .titulo {
            text-align: center;
            margin-top: 50px;
            color: #1e88e5;
            font-size: 50px;
        }
    .principal{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            padding: 20px;
            justify-items: center;
        
    }

       .caja{
        background-color:beige;
        border: 2px solid black;
        border-radius: 5px;
        box-shadow:  0 4px 8px rgba(247, 244, 244, 0.781);
        transform: scale(1);
        padding: 20px;
        width: 90%;
        transition: transform 0.3s ease;
       text-align: center;
       transform: translateY(30px);
       animation: appear 0.6s forwards;
       animation-delay: 0.2s;
    }

       @keyframes appear {
         to {
           opacity: 1;
           transform: translateY(0);
        }
      }

       .caja1:hover{
         transform: scale(1.1);
         box-shadow: 0 8px 20px rgba(0,0,0,0.25);
         transition: transform 0.3s ease, box-shadow 0.3s ease;
        } 
 
        .caja h2{
            color: #1e88e5;
            margin-bottom: 15px;
            transition: color 0.3s ease;
       }

        .caja h2:hover {
           color: #ff9800;
              }
     
        .caja h4 {
            color: #333;
            line-height: 1.8;
        }

     .prohibido {
            font-weight: bold;
            color: red;
            margin-top: 10px;
            display: block;
            display: inline-block;
            animation: pulse 1.5s infinite;
     }
      
         @keyframes pulse {
            0%, 100% { transform: scale(1); color: red; }
            50% { transform: scale(1.1); color: darkred; }
            }

     .uniforme {
            width: 400px;
            height: 300px;
            border-radius: 10px;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid #1d1e1f;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .uniforme:hover {
           transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
           }

             @media (max-width: 900px) {
            .principal {
                grid-template-columns: 1fr;
            }
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
    
        <div class="caja">
            <img src="Imagenes/unimujer.jpg" class="uniforme"> 
            <h2>SEGUN REGLAMENTO MUJERES</h2>
        
    <h4 >
        FALDA COLOR PLOMO MARENGO SOBRE LA RODILLA<br>
        CAMISA BLANCA<br>
       CHOMPA AZUL<br>
        CORBATA DEL ESTABLECIMIENTO <br>
        MEDIAS BLANCAS Y LARGAS<br>
       ZAPATOS NEGROS<br>
        EN CASO DE FRIO PANTALÓN PLOMO MARENGO<br>
        CABELLO RECOGIDO MOÑO CON RED<br>
        UÑAS RECORTADAS Y SIN ESMALTE<br>
        PARA EDUCACIÓN FÍSICA<br>
        EL DEPORTIVO DEL ESTABLECIMIENTO<br>
        <h3 class="prohibido">PROHIBIDO:</h3><br>
        TINTE EN EL CABELLO PIERCING<br>
        GORRAS,CHOMPAS DE OTRO COLOR<br>
        CABELLO SUELTO
         </h4>
         </div>

         
            <div class="caja">
                <img src="Imagenes/univaron.jpg" class="uniforme">
            <h2>SEGUN REGLAMENTO VARONES</h2>
    <h4 >
   PANTALÓN PLOMO MARENGO<br>
   CAMISA BLANCA<br>
   CHOMPA AZUL <br>
   ZAPATOS NEGROS<br>
   CORBATA DEL ESTABLECIMIENTO<br> 
   CORTE ESCOLAR<br>
   PARA EDUCACIÓN FÍSICA<br>
   EL DEPORTIVO DEL ESTABLECIMIENTO<br>
   <h3 class="prohibido">PROHIBIDO:</h3><br>
   TINTE EN EL CABELLO,<br>
   PIERCING,GORRAS,CHOMPAS DE OTRO COLOR
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