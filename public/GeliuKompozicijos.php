<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!--CSS -->
    <link rel="stylesheet" href="../app/css/normalize.css">
    <link rel="stylesheet" href="../app/css/index.css">
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js" defer></script>
    <!-- Krepšelio JS -->
    <script src="../app/js/cart.js" defer></script>
    <title>Gėlių kompozicijos</title>
</head>
<body>
    <?php include('../app/views/header.php');?>
    <section class="hero-geles">
        <div class="container">
            <h2>Gėlių kompozicijos</h2>
            <h4><b>Gėlės</b> tarsi susikalbėjimas... Kiekvienas gėlės žiedas turi savo reikšmę ir gali perduoti žinią. <b>Gėlė</b> - augalas, turintis estetinę vertę ir puiki dovana, padedanti prabilti ir patvirtinti savo jausmus.</h4>
           <!-- Pirma nuotraukų eilė -->
            <div class="row">
                <!-- Prekė Nr. 1 -->
                <div class="mySlidesfade">
                    <img src="../app/images/GeliuKompozicijos1.png" alt = 'Gėlių kompozocija Nr.1'>
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
                    <img src="../app/images/GeliuKompozicijos2.png" alt = 'Gėlių kompozocija Nr.2'>
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
                    <img src="../app/images/GeliuKompozicijos3.png" alt = 'Gėlių kompozocija Nr.3'>
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
                    <img src="../app/images/GeliuKompozicijos4.png" alt = 'Gėlių kompozocija Nr.4'>
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
            <h4>Svarbiausia renkantis gėles ar gėlių puokštes - tikslas. Todėl, pirmiausia, būtina įvertinti gėlių gavėją, jo psichologinį paveikslą ir aplinką.</h4>
        </div>
    </section>
        <?php 
        include('../app/views/cart.php');
        include('../app/views/footer.php');?>
    </body>
</html>