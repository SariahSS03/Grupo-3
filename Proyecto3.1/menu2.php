<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .final{
      background-color: rgb(18, 18, 66);
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
    }
    .opcional{
      background-color: #004464ff;
      color: #ffffffff;
      font-family:"Funnel Sans", sans-serif;
      display: flex;
      justify-content: space-between;
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
      background-color: rgb(18, 18, 66);
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

        </style>
</head>
<body>
    <footer class="final" id="contacto">
      <div id="espacios">
            <div >
            <img src="Imagenes/logo.png" width="230px"  height="auto";>
            </div>
            <div>
            <strong> Federico Aguilo</strong><br>
            
            </div>
      </div>

      <div id="espacios">
            <div>
            <img class="img3" src="https://media.istockphoto.com/id/860866074/es/vector/vector-de-la-imagen-de-tel%C3%A9fono-retro-icono-de-vector-blanco-sobre-fondo-azul-oscuro.jpg?s=612x612&w=0&k=20&c=qDERvjfnPoyh-nyRhNr8DFS2PuiBoW4gdpE2JY_9BiU=" width="40px"  height="auto";>
                 
            </div>
            <div>
            <strong>Sobre Nosotros</strong><br>
            <a href="presentacion.php#Acerca de Nosotros"> Nuestra Historia</a><br>
            <a href="presentacion.php#misions">Nuestra Misión</a><br>
            <a href ="presentacion.php#misions">Nuestra Visión</a> 
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

      <div>
        <form method="post" action="archivo2.php">
        <div><p>COMENTARIO</p></div>
        <div>
        <textarea name="comentario" id="" cols="40" rows="2" placeholder="Anuncia algo a tu clase"></textarea>
        <button type="submit" value="" class="bet">
            <img  height="20px" width="10px" src="https://e7.pngegg.com/pngimages/841/271/png-clipart-computer-icons-send-miscellaneous-angle-thumbnail.png">
        </button>
        </div>
        </form>
        
      </div>

    </footer>
      <div class="opcional">
            <div id="op1">
            Unidad Educativa Federico Aguilo     
            </div>
            <div id="op2">
            © 2025 Todos los derechos reservados.      
            </div>
      </div>
</body>
</html>