<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@100..900&display=swap" rel="stylesheet">

      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Unna:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Telex&family=Unna:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<style>
body{
      margin: 0px;
      
}
      

#titulo{
      font-size: 60px ;
      font-family: "Unna", serif;
      color: #001558;
      position: relative;
      bottom: 800px;
      transition: transform 0.5s;
      margin-top: 300px;

}
#titulo:hover{
      transform: scale(1.1);
}
.admi{
      font-family:"Unna", serif;
      font-size: 60px;
      margin-left: 50px;
      color: #000000ff;
      margin-top: -400px;
}

.Admisiones{
      display: flex;
      justify-content: space-around;
      background-color: rgba(0, 18, 78, 1);
      font-family:"Unna", serif;
      height: 250px;
      width: 100%;
}
#i{
      margin-top:10px;
}
#uno{
      background-color:#C8D9E6;
      font-size: 30px;
      width: 100%;
      cursor: pointer; 
      transition: background-color 0.3s; 
      color: black;
      text-decoration: none;
      margin-bottom: 25px;
}
#uno:hover{
      background-color:  #84A5B8;

}
#dos{
      background-color: #E5DDC9;
      font-size: 30px;
      width: 100%;
      cursor: pointer; 
      transition: background-color 0.3s; 
      color: black;
      text-decoration: none;
      margin-bottom: 25px;
}
#dos:hover{
     background-color:#F5EFEB;

}
#tres{
      background-color:#C8D9E6;
      font-size: 30px;
      width: 100%;
      cursor: pointer; 
      transition: background-color 0.3s; 
      color: black;
      text-decoration: none;
      margin-bottom: 25px;
}
#tres:hover{
      background-color:#84A5B8 ;

}
#nosotros{
      background-color: #355b72ff;
      display: flex;
      margin-top: 150px;
      opacity: 100%;
}

.acerca{
      font-size: 70px;
      font-family:"Funnel Sans", sans-serif;
      color: white;
}
p{
      font-family:"Funnel Sans", sans-serif;
      font-size: 18px;
      color: white;
}
#texto{
      margin-left:180px;
      margin-right: 90px;
      width: 1800px;
      
}
#imgtexto1{
      display: flex;
      gap: 25px;
      position: relative;
      margin-bottom: 50px;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); 
}
#imgtexto1:hover{
      transform: scale(2.3s);
      box-shadow: 0 10px 20px rgba(255, 255, 255, 0.6);

}
#enlaces{
      background-color: rgba(25, 65, 102, 0.69);
      color: white;
      font-family:"Funnel Sans", sans-serif;
      width: 510px;
      margin-right: 170px;
      padding-top: 40px;
      padding-left: 15px;
      padding-right: 15px;
}
#facebook{
      border: none;
      width: 300px;
      height: 50px;
      color: white;
      background-color: #597fa3ff;
      cursor: pointer;
      transition: background-color 0.3s;
     cursor: pointer;
    transition: transform 0.2s ease;
}
#facebook:hover {
      background-color:rgba(33, 148, 255, 0.56);
      transform: scale(1.1);
    }
    #class{
      display: flex;
      gap: 20px;
      justify-content: space-between;
    }
    #texto2{
      font-family:"Funnel Sans", sans-serif ;
      padding-left: 20px;
      padding-right: 20px;
      line-height: 2;
      border-right: 5px solid black ;
    }
    #c{
      border-radius:10px;
      box-shadow:10px 10px 20px rgba(0, 0, 0, 0.3); 
      transition: transform 0.5s ease;
      width: 500px;
      height: auto;
    }
    #c:hover{
      transform: scale (1.1);
      cursor: pointer;
    }

    #cursos{
      color:black;
      font-size: 25px;
      text-decoration: none;
      font-family:"Funnel Sans", sans-serif ;
      text-align: center;
    }
    .div3{
      display: flex;
      gap: 40px;
      margin-top: 200px;
      margin-left: 380px;
      margin-right: 380px;
    }
    #h{
      font-size: 20px;
      font-family:"Funnel Sans", sans-serif;
      line-height: 1.5;
      border-radius: 5%;
      padding-left: 40px;
      padding-right: 40px;
      width: 450px;
      border: 2px solid rgba(102, 102, 102, 1);
    }
    #misions{
      font-size: 30px;
      font-family:"Lexend Giga", sans-serif;
      color: rgb(20, 17, 1);
      text-align: center;

}
#h {
      position: relative;
      width: 300px;
      height: 500px;
      text-align: center;
      font-size: 20px;
      color: rgba(0, 0, 0, 1);
      overflow: hidden;
      cursor: pointer;
      font-family:arial;
      
    }

    #h::before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      opacity:25%;
      background-color: #206ea1ff;
      transition: transform 0.9s ease;
      transform: translateX(0);
      z-index: 0;
    }

    #h:hover::before {
      transform: translateX(100%);
      opacity: 25%;
    }

    #h span {
      position: relative;
      z-index: 1;
    }
    

   header{
      background-color: rgb(2, 59, 216);
     
   }
   nav{
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      flex-wrap: wrap;
      width: 100%;
      padding-top: 20px;
      padding-right: 50px;
      padding-left: 550px;
   }
   input{
      display: none;
   }
   label{display: none;}
   

   

.admi{
      font-size: 50px;
      margin-right: 500px;
}
.misions{
      width: 100%;
      margin-right: 50ox;
}
.acerca{
      margin-left: 2px;
}
  .final {
    text-align: center;
    padding: 20px;
  }

.contenedor{
      position: relative;
      display: inline-block;

}
.esta{
      background-color:#E0E0E0;
      margin-top:-90px;
      height:600px;
      border-radius:10px;

}
.mision-vision{
     margin-left:180px;
      margin-top:-1px;
      border-radius:10px;
      

}
.vimi{
      color:rgba(0, 0, 0, 1);;
      margin-top: 50px;
      font-size:40px;
      margin-left:50px;
    font-family:arial;

}
#info{
      background-color: red;
     margin: bottom 500px;
}

#i2{
  width: 250px;
  height: 176px;
}
.img2{
  opacity: 50%;
}
@media (max-width: 600px) {

  nav {
    flex-direction: column;
    align-items: center;
    padding: 10px;
  }

  .Admisiones {
    flex-direction: column;
    align-items: center;
    height: auto;
  }

  .admi, .acerca, .vimi {
    font-size: 28px;
    text-align: center;
    margin: 20px 0;
  }

  #titulo {
    font-size: 40px;
    bottom: 0;
    margin: 20px 10px;
  }

  #texto {
    margin: 0 15px;
    width: auto;
  }

  #imgtexto1 {
    flex-direction: column;
    align-items: center;
  }

  #c {
    width: 90%;
    height: auto;
    margin: 10px auto;
  }

  #enlaces {
    width: 90%;
    margin: 20px auto;
    text-align: center;
  }

  .div3 {
    flex-direction: column;
    margin: 0 10px;
    gap: 20px;
  }

  #h {
    width: 90%;
    height: auto;
    padding: 20px;
  }

  img {
    max-width: 100%;
    height: auto;
  }

  .logo {
    margin: 10px auto;
    display: block;
  }

  #facebook {
    width: 90%;
    height: 45px;
    font-size: 16px;
  }
}


</style>
</head>
<body> 
    <header>
      <?php
      include('menu.php');
      ?>
    </header>
    <div class ="div2">
      <img class="img2" src="Imagenes/fondo.jpeg" width="100%" height="auto">
    </div>

    <div id="titulo">
      <center><h1>FEDERICO AGUILÓ</h1></center>
      
    </div>
    <div id="">
<h3 class="admi">INFORMACIÓN</h3>
    <div class="div3">
      
      <div class="Admisiones">
      <a href="planteldocente.php" id="uno">
            <center><img id="i2" src="Imagenes/doc3.png" width="150px"  height="150px";><br>
            <strong>PLANTEL DOCENTE</strong></center>
      </a>
      <a href="horarios.php" id="dos">
            <center><img id="i" src="Imagenes/hor.png" width="150px"  height="150px";><br>
            <strong>HORARIOS</strong></center>
      </a>
      <a href="reglamentoescolar.php" id="tres">
            <center><img id="i" src="Imagenes/regla.png" width="150px"  height="150px";><br>
            <strong>REGLAMENTO ESCOLAR</strong></center>
      </a>
      </div>
    </div>
      </div>
    <div id="nosotros">
      <div id="texto"><h2 class="acerca">Acerca de Nosotros</h2>
      <p >La Unidad Educativa “Federico Aguiló” es una institución educativa ubicada en el centro de la ciudad, que brinda formación integral a estudiantes de origen diverso, en su mayoría hijos de comerciantes,migrantes de distintas regiones del país. Nuestra comunidad educativa se caracteriza por su riqueza cultural y su compromiso con la superación personal y colectiva.

Trabajamos bajo los principios del Modelo Educativo Sociocomunitario Productivo, promovido por la Ley Avelino Siñani y Elizardo Pérez, enfocándonos en una educación inclusiva, intercultural y descolonizadora que valora los saberes ancestrales, el pensamiento crítico y el desarrollo integral de nuestros estudiantes.

Pese a las dificultades económicas, familiares y sociales que enfrenta gran parte de nuestra población estudiantil, fomentamos una educación basada en los valores de solidaridad, equidad, justicia, reciprocidad y responsabilidad<br>
            <br>
     </p><br>
      <div id="imgtexto1">
      
      <img id="c" src="Imagenes/img3.jpg" width="550px" height="auto";>
      <img id="c" src="Imagenes/img4.jpg" width="550px" height="auto";>
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



    <div class="mision-vision">
   <h2 class="vimi">VISIÓN Y MISION: Inspirando Hoy, Construyendo Mañana</h2>
    <div class="div3" id="">
      <div id="h" >
            <h5 id="misions" data-wow-delete="0.5s" style="visibility:visible;animation-delay:0.6s;animation-name:fadeInUp;">MISION </h5>
            Buscamos formar estudiantes críticos, responsables y comprometidos con su comunidad y con el país, promoviendo el respeto y la valoración de la diversidad cultural y lingüística..
      </div>
      <div id="h">
            <h5 id="misions">VISION</h5>
            Promovemos una educación inclusiva que favorezca el desarrollo de competencias para la vida, el conocimiento de la realidad nacional e internacional, y el fortalecimiento de los valores de respeto, solidaridad y justicia social, enmarcados en los principios establecidos por la Ley Avelino Siñani y Elizardo Pérez.
      </div>
    </div>
    </div>
<header>
      <?php
      include("menu2.php");
      ?>
    </header>

   <script>
    window.addEventListener('scroll', () => {
  const menu = document.getElementById('menu');
  
  if (window.scrollY > 50) {
    menu.classList.add('desliza');  // Aplica clase que reduce el menú
  } else {
    menu.classList.remove('desliza'); // Quita clase cuando vuelve arriba
  }
});

  </script>
</body>
</html>