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
            <img src="../Imagenes/logo.png" width="230px"  height="auto";>
            </div>
            <div>
            <strong> FEDERICO AGUILÓ</strong><br>
            </div>
      </div>

      <div id="espacios">
            <div>
            <img class="img3" src="../Imagenes/casita.jpg" width="40px"  height="auto";> 
            </div>
            <div>
            <strong>Sobre Nosotros</strong><br>
            <a href="historia.php"> Nuestra Historia</a><br>
            <a href="Presentacion.php#misions">Nuestra Misión Y Vision</a><br>
            
            </div>
      </div>

      <div id="espacios">
            <div>
            <img class="img3" src="../Imagenes/telefono.jpg" width="40px"  height="auto";>
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