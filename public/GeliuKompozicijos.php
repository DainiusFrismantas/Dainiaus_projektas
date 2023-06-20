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
    <section class="hero-geles">
        <div class="container">
            <h2>Gėlių kompozicijos</h2>
            <h4><b>Gėlės</b> tarsi susikalbėjimas... Kiekvienas gėlės žiedas turi savo reikšmę ir gali perduoti žinią. <b>Gėlė</b> - augalas, turintis estetinę vertę ir puiki dovana, padedanti prabilti ir patvirtinti savo jausmus. Svarbiausia renkantis gėles ar gėlių puokštes - tikslas. Todėl, pirmiausia, būtina įvertinti gėlių gavėją, jo psichologinį paveikslą ir aplinką.</h4>
           <!-- Pirma nuotraukų eilė -->
            <div class="row">
                <!-- Prekė Nr. 1 -->
                <div class="mySlidesfade">
                    <img src="images/GeliuKompozicijos1.png" alt = 'Gėlių kompozocija Nr.1'>
                    <div class="price">30 €</div>
                    <div class="buy">
                        <button class="js-cd-add-to-cart" 
                        data-item-id="1"
                        data-price="30" 
                        onclick="addToCart('Rožinė gėlių kompozicija', 1, 30)">
                        Pridėti į krepšelį
                        </button>
                    </div>
                </div>
                   <!-- Prekė Nr. 2 -->
                <div class="mySlidesfade">
                    <img src="images/GeliuKompozicijos2.png" alt = 'Gėlių kompozocija Nr.2'>
                    <div class="price">40 €</div>
                    <div class="buy">
                        <button class="js-cd-add-to-cart" 
                        data-item-id="2"
                        data-price="40" 
                        onclick="addToCart('Saulės gėlių kompozicija', 1, 40)">
                        Pridėti į krepšelį
                        </button>
                    </div>
                </div>
            </div>
                <h4><b>Gėlė</b> ne tik puiki dovana gimtadienio, vestuvių ar kitos šventės proga, bet ir gali papuošti namų, parduotuvės ar renginio interjerą. Kuriant gyvų gėlių puokštes, dirtinių gėlių kompozicijas ar renginio floristiką tenka įvertinti daug dalykų ir atsakyti į klausimus kam, kodėl, kur ir nuo ko bus skirta gėlių kompozicija...</h4>
                <!-- Antra nuotraukų eilė -->
            <div class="row">
                <!-- Prekė Nr. 3 -->
                <div class="mySlidesfade">
                    <img src="images/GeliuKompozicijos3.png" alt = 'Gėlių kompozocija Nr.3'>
                    <div class="price">35 €</div>
                    <div class="buy">
                        <button class="js-cd-add-to-cart" 
                        data-item-id="3"
                        data-price="35" 
                        onclick="addToCart('Balta gėlių kompozicija', 1, 35)">
                        Pridėti į krepšelį
                        </button>
                    </div>
                </div>
                <!-- Prekė Nr. 4 -->
                <div class="mySlidesfade">
                    <img src="images/GeliuKompozicijos4.png" alt = 'Gėlių kompozocija Nr.4'>
                    <div class="price">45 €</div>
                    <div class="buy">
                        <button class="js-cd-add-to-cart" 
                        data-item-id="4"
                        data-price="45" 
                        onclick="addToCart('Ryški gėlių kompozicija', 1, 45)">
                        Pridėti į krepšelį
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
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