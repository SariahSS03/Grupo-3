<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       #menu{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background-color:#D6ECFA;
            display: flex;
            justify-content: space-between;
            color: white;
            font-family: "Unna", serif;
            transition: padding 0.3s ease, background-color 0.3s ease;
            z-index: 1000;    
            opacity: 0.8;
            padding: 0px 30px;
      }
      
      #menu.desliza {
  background-color:rgba(49, 114, 175, 0.56);
  color:red;
    
} 
#a{
      color:black;
      text-decoration: none;
      padding-top: 20px;
      font-size: 25px;
      font-family: "Unna", serif;
}
.logo{
      margin-top: 8px;
      margin-left: 30px;
      display: block;
      border-radius: 70%;
      cursor:pointer;
      transition: transform 0.3s ease;
      width: 100px;
      height:100px;

      
}
.logo:hover{
      transform: scale(1.2);
}
  .letra{
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      flex-wrap: wrap;
      width: 100%;
      padding-top: 20px;
      padding-right: 50px;
      padding-left: 550px;
      
   }
    </style>
    <header id="menu">
      <label class="logo" for="nu">
        <img src="Imagenes/logo.png" width="90px"  height="auto";>
      </label> 
      <input type ="checkbox" name="nu" id="nu">
      <nav class="letra">  
            
           <strong> <a href="#titulo" id="a"> INICIO</a></strong>
            
            <strong> <a href="#nosotros1" id="a"> SOBRE NOSOTROS</a></strong>
             <strong><a href="#enlaces" id="a"> NUESTRA HISTORIA</a></strong>

           <strong>  <a href="#contacto" id="a"> CONTACTO</a></strong>
            <strong> <a href="iniciarsesion.php" id="a"> INICIAR SESION</a> </strong>
      </nav>
            
    </header>
</body>
</html>