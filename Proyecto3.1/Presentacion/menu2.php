<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .final{
      background-color:  #264c66ff;
      margin-top: 150px;
      gap: 70px;
      display: flex;
      padding-left: 200px;
      padding-right: 200px;
      padding-top: 50px;
      padding-bottom: 50px;
      color: white;
      font-family:"Funnel Sans", sans-serif;
      line-height: 2;
      grid-area:final;
    }
    
    #espacios{
      font-size: 18px;
      width: 700px;
      display: flex;
      flex-direction: column;
      gap: 50px; 
    }
    .img3{
      margin-top: 10px;
      margin-right: 5px;
    }
    #op1{
      border-top: 1px solid white;
      padding-top: 50px;
      padding-bottom: 50px;
      margin-left: 200px;
      width: 50%;
    }
    #op2{
      border-top: 1px solid white;
      padding-top: 50px;
      padding-bottom: 50px;
      margin-right: 200px;
      width: 50%;
      display: block;
    }
    #iniciosesion{
      background-color:  rgba(31, 66, 112, 1);
      border: 1px solid white;
      color: white;
      height: 40px;
      font-size: 15px;
      cursor: pointer;
      transition: all 0.3s ease;
      }
    #iniciosesion:hover {
      background-color: rgb(46, 46, 100);
      border: 1px solid transparent;
   }
   @media  (max-width: 768px) {
      footer.final {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .final #espacios,
      footer.final  {
        max-width: 100%;
        padding: 0 10px;

      }

      .opcional {
        flex-direction: column;
        padding: 20px 10px;
      }

      #op1, #op2 {
        padding-top: 10px;
        font-size: 14px;
      }

      #iniciosesion {
        width: 80%;
        max-width: 200px;
        margin-left:150px;
      }

      textarea {
        max-width: 90%;
      }
    }

        </style>
</head>
<body>
    <footer class="final" id="contacto">
      <div id="espacios">
            <div >
            <img src="Imagenes/logo.png" width="230px"  height="auto";>
            </div>
            <div>
            <strong> FEDERICO AGUILÓ</strong><br>
            
            </div>
      </div>

      <div id="espacios">
            <div>
            <img class="img3" src="https://media.istockphoto.com/id/860866074/es/vector/vector-de-la-imagen-de-tel%C3%A9fono-retro-icono-de-vector-blanco-sobre-fondo-azul-oscuro.jpg?s=612x612&w=0&k=20&c=qDERvjfnPoyh-nyRhNr8DFS2PuiBoW4gdpE2JY_9BiU=" width="40px"  height="auto";>
                 
            </div>
            <div>
            <strong>Sobre Nosotros</strong><br>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
            <a href="historia.php"> Nuestra Historia</a><br>
            <a href="Presentacion.php#misions">Nuestra Misión Y Vision</a><br>
=======
            <a href="historia.html"> Nuestra Historia</a><br>
            <a href="presentacionn.php#misions">Nuestra Misión y Vision</a><br>
>>>>>>> Stashed changes
=======
            <a href="historia.html"> Nuestra Historia</a><br>
            <a href="presentacionn.php#misions">Nuestra Misión y Vision</a><br>
>>>>>>> Stashed changes
=======
            <a href="historia.html"> Nuestra Historia</a><br>
            <a href="presentacionn.php#misions">Nuestra Misión y Vision</a><br>
>>>>>>> Stashed changes
         
            </div>
      </div>

      <div id="espacios">
            <div>
            <img class="img3" src="https://previews.123rf.com/images/ahasoft2000/ahasoft20001610/ahasoft2000161009111/64731975-icono-de-ubicaci%C3%B3n-de-la-casa-el-estilo-del-glifo-es-el-s%C3%ADmbolo-ic%C3%B3nico-plano-color-blanco-fondo-azu.jpg" width="40px"  height="auto";>
            <strong>Location</strong><br>
            Av.  Ayacucho N° 0129 entre las calles Punata y Agustín López, frente a la terminal de buses.
            </div>
            <button id="iniciosesion" onclick="location.href='iniciarsesion.php'">
                  <strong>Iniciar Sesion</strong>
            </button>
      </div>

    </footer>
      
</body>
</html>