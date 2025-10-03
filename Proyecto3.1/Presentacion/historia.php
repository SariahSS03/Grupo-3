<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Historia del Colegio</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body.histo {
            display: grid;
            grid-template-rows: auto 1fr auto;
            grid-template-columns: 100%;
            grid-template-areas:
                "un"
                "dos"
                "tres";
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #ffffff;
            min-height: 100vh;
        }

        /* Bloques reutilizables */
        .bloque {
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
            transition: transform 0.3s;
            transform: scale(0.8);
            opacity: 1;
            animation: zoomIn 0.8s forwards;
        }

        .bloque.uno {
            height: 200px;
            padding: 100px;
            width:20px;
            
        }

        .bloque.dos {
            animation: float 3s ease-in-out infinite;
          
        }

        
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

        /* Layout */
        .header {
            grid-area: un;
        }
        .section {
            grid-area: dos;
            display: flex;
            flex-direction: column;
            padding-top: 40px;
            padding: 20px;
            color: #271717ff;
        }
        .footer {
            grid-area: tres;
        }

        .grid-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* Contenedores flex para las dos columnas, centradas */
        .gc, .gc2 {
            display: flex;
            justify-content: center; /* Cambiado a center para centrar */
            align-items: center; /* Centrado vertical */
            gap: 40px; /* espacio entre columnas */
            flex-wrap: wrap;
            
        }

        /* Las cajas flexibles con tamaño base y máximo */
        .bloque.uno, .bloque.dos {
            flex: 0 1 400px; /* base 400px, flexible */
            max-width: 400px;
        }

        /* Imágenes responsivas */
        .bloque img {
            max-width: 100%;
            height:350px;
            border-radius: 8px;
        }

        h1 {
            color: #0a2e7eff;
            margin-left: 500px;
            text-shadow: 4px 5px 4px black;
            font-size: 70px;

        }

        /* --- Responsive --- */
        @media (max-width: 768px) {
            .gc, .gc2 {
                flex-direction: column;
                align-items: center;
            }

            .bloque {
                width: 100%;
                max-width: 100%;
                transform: scale(1);
            }

            .bloque.dos {
                animation: none; /* para móviles quitar flotación */
            }

            h1 {
                margin-left: 0;
                text-align: center;
                font-size: 36px;
            }
        }
    </style>
</head>
<body class="histo">
    <header class="header">
        <?php include('menu.php'); ?>
    </header>

    <section class="section">
        <h1 >HISTORIA DEL COLEGIO</h1>

        <div class="grid-container">
            <div class="gc">
                <div class="bloque uno">
                    Fue fundado el 5 de marzo de 1979 en Cala Cala, con la dirección del Prof. Juan Camacho Rosas. En sus primeros años funcionó en diferentes infraestructuras hasta consolidarse como colegio mixto. En 1982 se trasladó al Instituto Superior de Comercio Nº 2 y finalmente, en 1987, ocupó su sede definitiva en la ex Aduana, donde comenzó a crecer académica y estructuralmente. Desde entonces, el colegio ha formado generaciones de estudiantes con una sólida base educativa y valores de compromiso social.
                </div>
                <div class="bloque dos">
                    <img src="../Imagenes/ima11.jpeg" alt="Colegio 1979" />
                </div>
            </div>

            <div class="gc2">
                <div class="bloque dos">
                    <img src="../Imagenes/fede.jpg" alt="P. Federico Aguiló" />
                </div>
                <div class="bloque uno">
                    El P. Federico Aguiló Bonnin nació en Palma de Mallorca (España) en 1931 e ingresó a la Compañía de Jesús en 1952. Estudió Filosofía, Teología y Sociología, llegando a ser profesor en la UMSA y UMSS. Fue un destacado defensor de los derechos humanos, colaborador en organizaciones sociales y comunicador en Radio María. Durante la dictadura de Hugo Banzer sufrió persecución y exilio, pero continuó su labor educativa y pastoral en Bolivia, Argentina y Ecuador. Su vida estuvo dedicada a la enseñanza, la fe y la defensa de la dignidad humana, dejando un legado de compromiso social y espiritual.
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <?php include('menu2.php'); ?>
    </footer>
</body>
</html>

