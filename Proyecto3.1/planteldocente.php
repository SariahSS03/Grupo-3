<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .generall{
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 20px;
            padding: 20px;
            background-color: ;
        }
    .orga{
        color: black;
        margin-top: 100px;
        font-size:50px;
    }
    .itemn{
        border: 5px solid black;
        width: 500px;
        margin-left: 100px;
    }

    .comi2{
        
        margin-left: 5px;
        margin-top: 150px;


    }
    .comi3{
        
        margin-left: 10px;
    }
.comi01{
    border: 5px solid black;
    background-color: red;
    margin-top: 50px;
    width: 500px;
    margin-left: 600px;
}
.item{
    background-color: brown;
    border: 2px solid black;
    border-radius: 8px;
    padding: 15px;

    
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
    <div class="item">
<div class="comi3"><h3 >COMISION TECNICO PEDAGOGICO</h3>
     NADYA NOELIA CASTRO PORTILLO<br>
     SERGIO EFRAIN QUISPE LIMACHE<br>
     MARIA TERESA ESCOBAR<br>
     WALTER MELENDRES<br>
     CLAUDIA OLIVERA<br>
     GRISELDA VILLARRROEL<br>
</div>
<div class="comi3">
<h3 >COMISION CONVIVENCIA PACIFICA</h1>
    CARLA PINTO<br>
    SALOME ORDOÑEZ<br>
    ANA QUINTEROS<br>
    CARMEN LOPEZ<br>
    ESTHER SAISARI TORREZ<br>
    VILMA CAMACHO ESCOBAR<br>
</div>
<div class="comi3"   >
<h3 >COMISION DISCIPLINARIA</h1>
   FILIBERTO ESPINOZA<br>
   WILFREDO MARTINEZ<br>
   LAURA ORTEGA<br>
   MAX AYAVIRI<br>
   MARGARITA MENDEZ<br>
</div>
</div>

<div class="item">
    <div class="comi2"><h3 >COMISION SOCIOECONOMICO</h3>
    EDME ARISPE<br>
    NILZA CARDENAS<br>
    HILDA CONDE<br>
    ANA MENDOZA <br>
    REBECA PUMA<br>
</div>

</div>
<div class="item">
    <div class="comi3">
        <h3>COMISION DE BIOSEGURIDAD</h3>
        ARISPE REINALDO<br>
        CALLE ELIUM<br>
        MALDONADO GRADEDA ANA MARIA<br>
        MOLLEDA CAROLINA<br>
    </div>
    <div class="comi3">
        <h3>COMISION CONTIGENCIA</h3>
        CORI RENE <br>
        ESCALERA JULIO<br>
        FUENTES HERBAS DUNIA<br>
        GARCIA ALDUNATE VAELRIO JUAN<br>
        </div>
        <div class=" comi3">
            <h3>COMISION BANDA</h3>
            RUDY BALBOA<br>
            QUISPE JUAN BAUTISTA<br>
            TICONA MARCOS<br>
            EDGAR<br>
        </div>

    </div>

</div>
<header>
      <?php
      include("menu2.php");
      ?>
    </header>
</body>
</html>