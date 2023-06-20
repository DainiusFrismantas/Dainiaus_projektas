<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!--CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/stilius.css">
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js" defer></script>
    <!-- Krepšelio JS -->
    <script src="js/cart.js" defer></script>
    <title>Gėlių kompozicijos</title>
</head>
<body>
        <?php
            include('../app/views/header.php');
            include('../app/views/footer.php');    
        ?>
    <section class="hero-nerti">
        <div class="container">
            <h2>Stalo padėkliukai, rankinės, pirštinės, kojinės,krepšeliai ir dėžutės.</h2> <h4><br><b>Nėrimas</b> - malonumas savo rankomis sukurti daiktą, pajusti jo atsiradimo kelią nuo idėjos iki paskutinės kilpelės. Neriant susikaupia didelė kūrybinė energija ir potencialas, kurį norisi įgalinti. Tai prasminga ir nesudėtinga veikla.</h4>
            <!-- Pirma nuotraukų eilė -->
            <div class="row">
                <!-- Prekė Nr. 1 -->
                <div class="mySlidesfade">
                    <img src="images/NertiGaminiai1.png" alt = 'Nerta rankinė'>
                    <div class="price">25 €</div>
                    <div class="buy">
                    <button class="js-cd-add-to-cart" 
                        data-item-id="1"
                        data-price="25" 
                        onclick="addToCart('Rožinė gėlių kompozicija', 1, 25)">
                        Pridėti į krepšelį
                        </button>
                    </div>
                </div>
                <!-- Prekė Nr. 2 -->
                <div class="mySlidesfade">
                    <img src="images/NertiGaminiai2.png" alt = 'Nerti padėkliukai Nr. 1'>
                    <div class="price">25 €</div>
                    <div class="buy">
                    <button class="js-cd-add-to-cart" 
                        data-item-id="2"
                        data-price="25" 
                        onclick="addToCart('Rožinė gėlių kompozicija', 1, 25)">
                        Pridėti į krepšelį
                    </button>
                    </div>
                </div>
            </div>   
                <h4><b>Nerti vąšeliu</b> - malonumas, aistra, savotiška meditacija ir geriausi vaistai nuo blogos nuotaikos.Tai paspirtis ir poilsis, kuris derinasi ir su nauda...</h4>
            <!-- Antra nuotraukų eilė -->
            <div class="row">
                <!-- Prekė Nr. 3 -->
                <div class="mySlidesfade">
                    <img src="images/NertiGaminiai3.png" alt = 'Nertos rankinės'>
                    <div class="price">50 €</div>
                    <div class="buy">
                    <button class="js-cd-add-to-cart" 
                        data-item-id="3"
                        data-price="50" 
                        onclick="addToCart('Rožinė gėlių kompozicija', 1, 50)">
                        Pridėti į krepšelį
                    </button>
                    </div>
                </div>
                <!-- Prekė Nr. 4 -->
                <div class="mySlidesfade">
                    <img src="images/NertiGaminiai4.png" alt = 'Nerti padėkliukai Nr. 2'>
                    <div class="price">25 €</div>
                    <div class="buy">
                    <button class="js-cd-add-to-cart" 
                        data-item-id="4"
                        data-price="25" 
                        onclick="addToCart('Rožinė gėlių kompozicija', 1, 25)">
                        Pridėti į krepšelį
                    </button>
                    </div>
                </div> 
            </div>
        </div>
    </section>

    <div class="spacer"></div> 

<!-- Krepšelio SVG -->
        <button class="cart-icon" onclick="toggleCart()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16"> <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/> </svg> 
            <span class="notification" id="cart-items-count">0</span>
        </button>

<!-- Krepšelio HTML -->
        <div id="cart" class="cart-container">
            <h3>Krepšelis</h3>
            <ul id="cart-items"><!-- Čia bus įdėtos prekės iš krepšelio --></ul>
            <div class="total">Bendra suma: <span id="cart-total">0</span> €</div>
            <button onclick="clearCart()">Išvalyti krepšelį</button>
        </div>
    </body>
</html>