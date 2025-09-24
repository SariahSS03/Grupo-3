<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  .body {
      display: grid;
      grid-template-columns: 16% 84% ;
      grid-template-rows: auto auto auto auto auto;
      grid-template-areas:"principal principal"
                          "opciones mn"
                          "opciones quimica"
                          "opciones areaAnuncios"
                          "opciones areaPublicaciones";
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      background-color: #94a5bdff;
      margin:0px;
    }  
    .Adminisiones{
      transform: all 7s;
    }
    .Admisiones:hover{
      transform: scale(2);
    }
</style>
<body>
    <header>
        <?php
        include('menu.php');
        ?>
    </header>
   <div id="">
<h3 class="admi">INFORMACIÓN</h3>
    <div class="div3">
      
      <div class="Admisiones">
      <a href="planteldocente.php" id="uno">
            <center><img id="i" src="../Imagenes/plantel11.png" width="190px"  height="150px";><br>
            <strong>PLANTEL DOCENTE</strong></center>
      </a>
      <a href="horarios.php" id="dos">
            <center><img id="i" src="../Imagenes/hor.png" width="150px"  height="150px";><br>
            <strong>HORARIOS</strong></center>
      </a>
      <a href="reglamentoescolar.php" id="tres">
            <center><img id="i" src="../Imagenes/regla.png" width="150px"  height="150px";><br>
            <strong>REGLAMENTO ESCOLAR</strong></center>
      </a>
      </div>
    </div>
      </div>
    <div id="nosotros">
      <div id="texto"><h2 class="acerca">ACERCA DE NOSOTROS</h2>
      <p >La Unidad Educativa “Federico Aguiló” es una institución educativa ubicada en el centro de la ciudad, que brinda formación integral a estudiantes de origen diverso, en su mayoría hijos de comerciantes,migrantes de distintas regiones del país. Nuestra comunidad educativa se caracteriza por su riqueza cultural y su compromiso con la superación personal y colectiva.

Trabajamos bajo los principios del Modelo Educativo Sociocomunitario Productivo, promovido por la Ley Avelino Siñani y Elizardo Pérez, enfocándonos en una educación inclusiva, intercultural y descolonizadora que valora los saberes ancestrales, el pensamiento crítico y el desarrollo integral de nuestros estudiantes.

Pese a las dificultades económicas, familiares y sociales que enfrenta gran parte de nuestra población estudiantil, fomentamos una educación basada en los valores de solidaridad, equidad, justicia, reciprocidad y responsabilidad<br>
            <br>
     </p><br>
      <div id="imgtexto1">
      
      <img id="c" src="../Imagenes/img3.jpg" width="550px" height="auto";>
      <img id="c" src="../Imagenes/img4.jpg" width="550px" height="auto";>
      </div>
    </div>
      <div id="enlaces" >
            <strong>Conoce más sobre nosotros<br>
            <br>
            Estamos más cerca en nuestras redes sociales.</strong><br>
            <br>
            Mantente conectado y conoce más sobre la vida en el Colegio Federico Aguilo<br>
            <br>
    
      <br>
      <button id="facebook" onclick="location.href='https://www.facebook.com/p/Unidad-Educativa-Federico-Aguil%C3%B3-UEFA-100076895951019/?locale=es_LA'">Facebook</button></center>
     
      </div>
    </div>

</body>
</html>