<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            display: flex;
            display: flexbox;
            margin:none;
            display: grid;
            grid-template-rows:9% 15% 70%;
            grid-template-columns: 25% 25% 50%;
            grid-template-areas: "principal principal principal"
                                " segundo segundo segundo"
                                "tercero tercero tercero";
                               
        }
         .principal{
            background: rgb(61, 9, 9);
            display: flex;
            width: 100%;
            height:70px ;
            grid-area: principal;
            margin-bottom: 0px;
        }
          #primero{
          
            width: 50%;
            padding-bottom: 10px;
            padding-top: 12px;
            padding-left: 12px;
            display: flex;
            gap: 20px;
            

        }
        #segundo{
           
            width: 50%;
            padding-bottom: 10px;
            padding-top: 12px;
            padding-left: 12px;
            padding-right: 12px;
            display: flex;
            gap: 20px;
            flex-direction:row-reverse; 
        }
        .tercero{
            grid-area: segundo;
            background-color: beige;
            padding: 40px;
            display: flex;
            gap: 60px;
            

        }
        #cla{
            margin-left: 370px;
            padding-left: 30px;
            padding-right: 210px;
            padding-bottom: 20px;
            padding-top: 20px;
            border-radius: 4px; cursor: pointer;
            transition: transform 0.3s;
         
            
            
        }
        #cla:hover{
          transform: scale(1.05);
          border-color: rgb(12, 7, 83);
        }
        #fechas{ 
            padding-left: 30px;
            padding-right: 210px;
            padding-bottom: 20px;
            padding-top: 20px;
            border-radius: 4px; 
            
           
        }
        .cuarto{
            background-color:#d1cebc ;
            grid-area: tercero;
            display: flex;
            margin-left: 410px;
            margin-right: 400px;
            border-radius: 10px;
            padding-bottom: 0%;
            
        }
        #u{
            background-color: rgb(222, 223, 215);
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding-left: 50px;
            padding-right: 47px;
            padding-bottom: 50%;
            padding-top: 20px;
            border:1px solid black;
            border-radius: 10px;
            cursor: pointer;
            transition: font-size 0.2s;
            
        }
        #u:hover{
            font-size: 21px;
        }
        #a{
            grid-template-columns: repeat(7, 1fr);
            font-size: 23px;
            height: 45px;
            width: 45px;
           align-content: center;
            margin-top: 7px;
            border: 1.5px solid black;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        #a:hover{
            background-color: rgb(134, 45, 45);
        }
        
    #calen{
        display: inline-block;
  font-size: 16px;
  transition: all 0.5s ease;
       }
        
 @media (max-width: 800px) {
  body {
    grid-template-rows: auto auto auto auto;
    grid-template-columns: 1fr;
    grid-template-areas:
      "principal principal principal"
      "segundo"
      "tercero"
      "cuarto";
  }

  .tercero {
    flex-direction: column;
    padding: 20px;
    width: 470px;
    flex-direction: column; 
    align-items: center;
    gap: 80px;
    padding: 10px;
    margin: 0 auto;
  }

  .cuarto {
    flex-direction: column; 
    align-items: center;
    gap: 10px;
    padding: 10px;
    margin: 0 auto;
  }

  #u {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 50px;
    width: auto;
    height: auto;
  }

  #a {
    height: 35px;
    width: 35px;
    font-size: 18px;
    text-align:center;
    padding: auto;
  }

  #fechas {
    height: 30px;
    width: auto;
  }

  #cla {
    width: auto;
    margin: 10px auto;
    padding: 10px 20px;
  }

  #calen {
    font-size: 0px; 
    width: 40px;
    height: 80px;
    padding: 0;
    background: url('https://st2.depositphotos.com/2485347/6176/v/450/depositphotos_61761401-stock-illustration-cartoon-calendar.jpg') center/contain no-repeat;
  }
 
}
     
    </style>
</head>
<body>
     <div class="principal">
        <div id="primero">
        <button onclick="window.location.href='presentacion.php'" class="boton" >
            <img  width="35px" height="35px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwjfZuI8AT2Tm1JxxZrSaH950VFmdkqcVylg&s">
        </button>
        <div id="calen">
               <button>
               CALENDARIO
          </button>
        </div>
       
        <button onclick="window.location.href='inicioprofesor.php'">
            INICIO
        </button>
        </div>
        <div id="segundo">  <button class="boton">
            <img  width="35px" height="35px" src=" https://static.vecteezy.com/system/resources/previews/019/879/186/non_2x/user-icon-on-transparent-background-free-png.png">
            </button>
            <button class="boton">
             <img  width="35px" height="35px" src=" https://www.shutterstock.com/image-vector/dotted-burger-menu-outline-icon-260nw-2249662125.jpg">
            </button>
            <button onclick="window.location.href='Creaciondeclase.php'" class="boton">
          <img  width="35px" height="35px" src="https://static.vecteezy.com/system/resources/previews/005/007/569/non_2x/calendar-schedule-date-line-icon-illustration-logo-template-suitable-for-many-purposes-free-vector.jpg">
            </button>
        </div>
     </div>
     <div class="tercero">
        <div >
        <button id="cla">Todas las clases</button>
        </div>
        <div >
         <button id="fechas">Fechas</button>
        </div>
        
     </div>
     <div class="cuarto">
        <div id="u"> lun
            <div id="a">  1</div>
        </div>
        <div id="u">mar
            <div id="a">   2</div>
        </div>
        <div id="u">mie
            <div id="a">3</div>
        </div>
        <div id="u">jue
            <div id="a">4</div>
        </div>
        <div id="u">vie
            <div id="a">5</div>
        </div>
        <div id="u">sab
            <div id="a">6</div>
        </div>
        <div id="u">dom
            <div id="a">7</div>
        </div>
     </div>
        <script>
           document.addEventListener('animationstart', e => {
  if (e.animationName === 'mq-small') {
    console.log('Vista móvil activada');
  }
});
</script>
</body>
</html>