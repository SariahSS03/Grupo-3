<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú Responsive</title>
  <style>
    body {
      grid-area:menu;
      margin: 0px;
      font-family: Arial, sans-serif;
    }

    /* --- NAV PRINCIPAL --- */
    nav {
      background:#D6ECFA;;
      padding: 10px 20px;
      position: relative;
      z-index:2000;
    }

    .menu {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 20px;
      
    }

    .menu ul {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .menu ul li {
      margin-left: 20px;
      position: relative;
    }

    .menu ul li a {
      text-decoration: none;
      color: rgb(0, 0, 0);
      font-weight: bold;
      transition: all 0.4s ease;
     transform: translateY(20px);
     animation: fadeInUp 1s ease forwards;
     display: block;

    }   
    .menu ul li a:hover{
  transform: scale(1.1) translateY(-5px);
  letter-spacing: 2px;
  text-shadow: 2px 2px 5px rgb(3, 20, 68);
   }
    @keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}


   /*submenu*/
   .menu ul li ul{
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #69696941;
      min-width: 150px;
      z-index: 1000;
      border-radius: 5px;
    }

.menu ul li ul li a {
     padding: 10px 15px;
    font-size: 18px;
    color: rgb(24, 23, 23);
    }

    nav ul li ul li a:hover {
      background-color: rgba(53, 51, 51, 0.178);
      color: #580000;
    }
   /* Mostrar submenú al pasar el cursor */
    nav ul li:hover > ul {
      display: block;
      
     
    }

    /* --- BOTÓN  --- */
    .menu label {
      display: none;
      font-size: 25px;
      cursor: pointer;
    }

    #check {
      display: none;
    }

    /* --- RESPONSIVE --- */
    @media (max-width: 768px) {
      .menu ul {
        position: absolute;
        top: 60px;
        left: -100%;
        width: 100%;
        background: #444;
        flex-direction: column;
        text-align: center;
        transition: left 0.3s ease;
      }

      .menu ul li {
        margin: 15px 0;
      }

      .menu label {
        display: block;
      }

      /* Cuando el checkbox está activo, mostramos el menú */
      #check:checked ~ul {
        left: 0;
      }
    /* Submenú en mobile */
      .menu ul li ul {
        position: static;
        display: none;
      }

      .menu ul li:hover > ul {
        display: none; /* para evitar hover en móvil */
      }
    }
    /*logo*/
.img{
    transition: all 0.5s ease;
    animation: fadeIn 1s ease forwards;
    
}
.img:hover{
    transform: scale(1.1) rotate(5deg);
}
@keyframes fadeIn {
  0% { opacity: 0; transform: scale(0.5); }
  100% { opacity: 1; transform: scale(1); }
}

    main {
      padding-top: 80px;
    }

    section, h1 {
      padding: 50px 20px;
    }
  </style>
</head>
<body>
  <nav>
    <div class="menu">
      <img class="img" src="Imagenes/logo.png" width="150px"  height="auto";>

      <!-- Botón  -->
      <input type="checkbox" id="check">
      <label for="check">&#9776;</label>

      <!-- Enlaces -->
      <ul>
        <li><a href="#titulo">INICIO</a></li>

        <li>
            <a href="establecimiento.php">SOBRE NOSOTROS ▾</a>
            <ul>
            <li><a href="establecimiento.php">Establecimiento</a></li>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
            <li><a href="Presentacionn.php#mision-vision">Vision y Mision</a></li>
=======
=======
>>>>>>> Stashed changes
            <li><a href="presentacionn.php#mision-vision">Vision y Mision</a></li>
>>>>>>> Stashed changes
            </ul>
        </li>

       <li>
        <a href="historia.html">NUESTRA HISTORIA ▾</a>
        <ul>
            <li><a href="historia.html">Historia</a></li>
        </ul>
       </li>
        <li><a href="comenestilo.php">COMENTARIOS</a></li>
         <li><a href="iniciarsesion.php">INICIO DE SESION</a></li>
      </ul>
    </div>
  </nav>
 
</body>
</html>
