<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Epunda+Slab:ital,wght@0,300..900;1,300..900&family=Libertinus+Keyboard&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Story+Script&display=swap" rel="stylesheet">
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #ffffff;
        }
        h1 {
            text-align: center;
            margin: 40px 0 20px;
            font-size: 2.5rem;
            color: #0d0d0e;
            letter-spacing: 2px;
            animation: fadeInTitle 1s ease forwards;
           
        }
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr; 
            grid-template-rows: auto auto; 
            gap: 20px; 
            width: 90%;
            max-width: 1200px;
            margin-top: 10px;
        }

        .uno {
            
            background: linear-gradient(to bottom, #4c6baf, #81adc7);
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.2);
            text-align: justify; 
            height: 350px;
            transition: transform 0.3s, ;
             opacity: 0;
            transform: scale(0.8);
            animation: zoomIn 0.8s forwards;
            
        }
       .dos{
            background: #af844c; 
            background: linear-gradient(to bottom, #4c6baf, #81adc7);
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.2);
            text-align: justify; 
            height: 350px;
            width: 600px;
            transition: transform 0.3s,;
            transform: scale(0.8);
            animation: zoomIn 0.8s forwards;
            animation: float 3s ease-in-out infinite;
        }
        .grid-item:nth-child(1) { animation-delay: 0.2s; }
        .grid-item:nth-child(2) { animation-delay: 0.4s; }
        .grid-item:nth-child(3) { animation-delay: 0.6s; }
        .grid-item:nth-child(4) { animation-delay: 0.8s; }

        @keyframes zoomIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}
       
     
    </style>

<body>

    <h1>HISTORIA DEL COLEGIO</h1>

    <div class="grid-container">
        <div class="uno">
    Fue fundado el 5 de marzo de 1979 en Cala Cala, con la dirección del Prof. Juan Camacho Rosas. En sus primeros años funcionó en diferentes infraestructuras hasta consolidarse como colegio mixto. En 1982 se trasladó al Instituto Superior de Comercio Nº 2 y finalmente, en 1987, ocupó su sede definitiva en la ex Aduana, donde comenzó a crecer académica y estructuralmente. Desde entonces, el colegio ha formado generaciones de estudiantes con una sólida base educativa y valores de compromiso social.
        </div>
            <div class="dos">
            <img src="Imagenes/colegio.png" width="500px" height="350px">
        </div>
        <div class="dos">
            <img src="Imagenes/ima2.jpeg" width="500px">
        </div>
        <div class="uno">
            El P. Federico Aguiló Bonnin nació en Palma de Mallorca (España) en 1931 e ingresó a la Compañía de Jesús en 1952. Estudió Filosofía, Teología y Sociología, llegando a ser profesor en la UMSA y UMSS. Fue un destacado defensor de los derechos humanos, colaborador en organizaciones sociales y comunicador en Radio María. Durante la dictadura de Hugo Banzer sufrió persecución y exilio, pero continuó su labor educativa y pastoral en Bolivia, Argentina y Ecuador. Su vida estuvo dedicada a la enseñanza, la fe y la defensa de la dignidad humana, dejando un legado de compromiso social y espiritual.
        </div>
    </div>
</body>
</html>
