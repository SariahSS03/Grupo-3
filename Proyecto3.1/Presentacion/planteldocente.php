<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .generall{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
    .orga{
        color: black;
            text-align: center;
            margin-top: 50px;
            font-size: 50px;
    }
    .comision {
            background-color: #fff;
            border: 2px solid #000;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
            transition: all 0.4s ease-in-out;
            opacity: 0;
            transform: translateY(50px);
            animation: appear 0.8s forwards;
        }
    .comision:hover {
     transform: scale(1.05); 
     box-shadow: 0 8px 16px rgba(0,0,0,0.3);
     /*transform: rotate(-2deg) scale(1.03);*/
     background-color: #ffeaa7; 
     

}

  @keyframes appear {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.comision h3 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }

 .comision p {
            line-height: 1.6;
        }

.comision:nth-child(1) { background: linear-gradient(135deg, #ff9a9e, #fad0c4); }
.comision:nth-child(2) { background: linear-gradient(135deg, #a1c4fd, #c2e9fb); }
.comision:nth-child(3) { background: linear-gradient(135deg, #fbc2eb, #a6c1ee); }
.comision:nth-child(4) { background: linear-gradient(135deg, #fddb92, #d1fdff); }
.comision:nth-child(5) { background: linear-gradient(135deg, #ffecd2, #fcb69f); }
.comision:nth-child(6) { background: linear-gradient(135deg, #ff9a9e, #fad0c4); }
.comision:nth-child(7) { background: linear-gradient(135deg, #a1c4fd, #c2e9fb); }


.comision:hover {
    filter: brightness(1.1);
}

    </style>
</head>
<body>
    <header>
      <?php
      include("menu.php");
      ?>
    </header>
    <center><h1 class="orga">Organizacion de comisiones</h1></center>

    <div class="generall">
      <div class="comision">
        <h3 >COMISION TECNICO PEDAGOGICO</h3>
<p>
     NADYA NOELIA CASTRO PORTILLO<br>
     SERGIO EFRAIN QUISPE LIMACHE<br>
     MARIA TERESA ESCOBAR<br>
     WALTER MELENDRES<br>
     CLAUDIA OLIVERA<br>
     GRISELDA VILLARRROEL<br>
     </p>
</div>

<div class="comision">
<h3 >COMISION CONVIVENCIA PACIFICA</h3>
<p>
    CARLA PINTO<br>
    SALOME ORDOÑEZ<br>
    ANA QUINTEROS<br>
    CARMEN LOPEZ<br>
    ESTHER SAISARI TORREZ<br>
    VILMA CAMACHO ESCOBAR<br>
    </p>
</div>

<div class="comision"   >
<h3 >COMISION DISCIPLINARIA</h3>
<p>
   FILIBERTO ESPINOZA<br>
   WILFREDO MARTINEZ<br>
   LAURA ORTEGA<br>
   MAX AYAVIRI<br>
   MARGARITA MENDEZ<br>
   </p>
</div>


<div class="comision">
<h3 >COMISION SOCIOECONOMICO</h3>
<p>
    EDME ARISPE<br>
    NILZA CARDENAS<br>
    HILDA CONDE<br>
    ANA MENDOZA <br>
    REBECA PUMA<br>
    </p>
</div>


<div class="comision">
        <h3>COMISION DE BIOSEGURIDAD</h3>
        <p>
        ARISPE REINALDO<br>
        CALLE ELIUM<br>
        MALDONADO GRADEDA ANA MARIA<br>
        MOLLEDA CAROLINA
        </p>
    </div>

    <div class="comision">
        <h3>COMISION CONTIGENCIA</h3>
        <p>
        CORI RENE <br>
        ESCALERA JULIO<br>
        FUENTES HERBAS DUNIA<br>
        GARCIA ALDUNATE VAELRIO JUAN
        </p>
        </div>

        <div class=" comision">
            <h3>COMISION BANDA</h3>
            <p>
            RUDY BALBOA<br>
            QUISPE JUAN BAUTISTA<br>
            TICONA MARCOS<br>
            EDGAR
            </p>
        </div>
</div>



<header>
      <?php
      include("menu2.php");
      ?>
    </header>
</body>
</html>