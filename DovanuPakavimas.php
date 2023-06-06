<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <header class="site-header">
        <nav class="main-nav">
            <ul class="flex-container">
                <li><a href="ViolArt.png"><img src="ViolArt.png" alt="ViolArt logotipas"></a></li>
                <li><a href="Pagrindinis.php">Pradžia</a></li>
                <li><a href="NertiGaminiai.php">Nerti gaminiai</a></li>
                <li><a href="Muilas.php">Muilas</a></li>
                <li><a href="Hidrolatai.php">Hidrolatai</a></li>
                <li><a href="GeliuKompozicijos.php">Gėlių kompozicijos</a></li>
                <li><a href="DovanuPakavimas.php">Dovanų pakavimas</a></li>
                <li><a href="Kontaktai.php">Kontaktai</a></li>
            </ul>
        </nav>
    </header>

    <div class="spacer"></div> 

    <section class="hero-dovanos">
        <div class="container">
            <h2>Dovanų pakavimas</h2>
            <h4>Tinkamai parinkta pakuotė dovanai gali suteikti paslaptingumo,
                šventiškumo ar prabangos. <b>Dovanos pakavimą</b> diktuoja ne tik mados ir stiliaus tendenijos, bet ir pati dovana.</h4>
                <!-- Pirma nuotraukų eilė -->
                <div class="row">
                     <!-- Prekė Nr. 1 -->
                    <div class="mySlidesfade">
                        <img src="images/DovanuPakavimas1.png" alt = 'Dovanų pakavimas Nr.1'>
                        <div class="price">5 €</div>
                        <div class="buy">
                            <button class="js-cd-add-to-cart" 
                            data-item-id="1"
                            data-price="5" 
                            onclick="addToCart('Pakavimas Nr.1', 1, 5)">
                            Pridėti į krepšelį
                            </button>
                        </div>
                    </div>
                    <!-- Prekė Nr. 2 -->
                    <div class="mySlidesfade">
                        <img src="images/DovanuPakavimas2.png" alt = 'Dovanų pakavimas Nr.2'>
                        <div class="price">7 €</div>
                        <div class="buy">
                            <button class="js-cd-add-to-cart" 
                            data-item-id="2"
                            data-price="7" 
                            onclick="addToCart('Pakavimas Nr.2', 1, 7)">
                            Pridėti į krepšelį
                            </button>
                        </div>
                    </div>
                </div>
                <h4>Nors <b>dovanos pakuotė</b> labai laikinas dalykas, bet gražiai ir su meile supakuota dovana suteiks gavėjui daugiau džiaugsmo. Pakuotė neturi būti svarbesnė už dovaną, bet pasitelkus kūrybiškumą dovaną gali paversti ypatingesne ir labiau asmeniška.</h4>
                <!-- Antra nuotraukų eilė -->
                <div class="row">
                    <!-- Prekė Nr. 3 -->
                    <div class="mySlidesfade">
                        <img src="images/DovanuPakavimas3.png" alt = 'Dovanų pakavimas Nr.3'>
                        <div class="price">9 €</div>
                        <div class="buy">
                            <button class="js-cd-add-to-cart" 
                            data-item-id="3"
                            data-price="9" 
                            onclick="addToCart('Pakavimas Nr.3', 1, 9)">
                            Pridėti į krepšelį
                            </button>
                        </div>
                    </div>
                    <!-- Prekė Nr. 4 -->
                      <div class="mySlidesfade">
                          <img src="images/DovanuPakavimas4.png" alt = 'Dovanų pakavimas Nr.4'>
                          <div class="price">8 €</div>
                          <div class="buy">
                        <button class="js-cd-add-to-cart" 
                        data-item-id="4"
                        data-price="8" 
                        onclick="addToCart('Pakavimas Nr.4', 1, 8)">
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

    <!-- Footer -->
        <footer class="footer">
            <p>&copy; &copy;2023 Violeta Pociuvienė || Visos teisės saugomos.   Kopijuoti, platinti svetainės turinį be autorių sutikimo draudžiama.</p>
        </footer>
    </body>
</html>


      <!--
            <nav class="mobile-nav">
                <ul id="mMenu" class="flex-container">
                    <li><a href="#">Pradinis puslapis</a></li>
                    <li><a href="#">Nerti gaminiai</a></li>
                    <li><a href="#">Muilas</a></li>
                    <li><a href="#">Hidrolatai</a></li>
                    <li><a href="#">Gėlių kompozicijos</a></li>
                    <li><a href="#">Dovanų pakavimas</a></li>
                    <li><a href="#">Kontaktai</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
            -->