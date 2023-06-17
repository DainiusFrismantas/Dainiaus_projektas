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
    <header class="site-header">
        <nav class="main-nav">
            <ul class="flex-container">
                <li><a href=""><img src="ViolArt.png" alt="ViolArt logotipas"></a></li>
                <li><a href="Pagrindinis.php">Pradžia</a></li>
                <li><a href="NertiGaminiai.php">Nerti gaminiai</a></li>
                <li><a href="Muilas.php">Muilas</a></li>
                <li><a href="Hidrolatai.php">Hidrolatai</a></li>
                <li><a href="GeliuKompozicijos.php">Gėlių kompozicijos</a></li>
                <li><a href="DovanuPakavimas.php">Dovanų pakavimas</a></li>
            </ul>
        </nav>
    </header>

    <div class="spacer"></div> 

    <section class="hero-muilas">
        <div class="container">
            <h2>Rankų darbo muilas </h2>
            <h4>Rankų daro <b>muilas</b> gaminamas iš puikios kokybės žaliavos - sertifikuotos muilo bazės, pagamintos Izraelyje. Naudojamos balta, bespalvė, su pirmo spaudimo alyvuogių aliejum, su neapdoroto alyvuogių aliejaus tirščiais, su negyvosios jūros purvu muilo bazės. Išgauti spalvą ir kvapą naudojami dažai ir aliejai, skirti muilo ir kosmetikos gamybai.Nemėgstantiems kvapų ir spalvų gaminami bespalviai ir bekvapiai muilai su natūraliomis džiovintomis vaistažolėmis ir pievų gėlėmis.Išgauti drėkinamąjį ir švelnumo poveikį naudojami natūralūs avokado, linų sėmenų ir kanapių aliejai.Vienodo <b>muilo</b> čia nėra. </h4> 
            <!-- Pirma nuotraukų eilė -->
            <div class="row">
                <!-- Prekė Nr. 1 -->
                <div class="mySlidesfade">
                    <img src="images/Muilas1.png" alt = 'Muilas Nr.1'>
                    <div class="price">3 € / 100 g</div>
                    <div class="buy"><button class="js-cd-add-to-cart" 
                        data-item-id="1"
                        data-price="3" 
                        onclick="addToCart('Levandų muilas', 1, 3)">
                        Pridėti į krepšelį
                        </button>
                    </div>
                </div>
                <!-- Prekė Nr. 2 -->
                <div class="mySlidesfade">
                    <img src="images/Muilas2.png" alt = 'Muilas Nr.2'>
                    <div class="price">3 € / 100 g</div>
                    <div class="buy"><button class="js-cd-add-to-cart" 
                        data-item-id="2"
                        data-price="3" 
                        onclick="addToCart('Rožių muilas', 1, 3)">
                        Pridėti į krepšelį
                        </button>
                    </div>
                </div>
            </div>
            <h4>Kiekvieną kartą gaminant muilą, susijungus kūrybos ir fantazijų pasauliams, naudojama vis kitokia ornamentų ir detalių darymo technika. Rankų darbo <b>muilas</b> ne tik suteiks jūsų rankoms švaros, švelnumo ir minkštumo jausmą, bet ir papuoš jūsų vonios kambarį arba taps maža dovanėle.</h4>
            <!-- Antra nuotraukų eilė -->
            <div class="row">
            <!-- Prekė Nr. 3 -->
                <div class="mySlidesfade">
                    <img src="images/Muilas3.png" alt = 'Muilas Nr.3'>
                    <div class="price">3 € / 100 g</div>
                    <div class="buy"><button class="js-cd-add-to-cart" 
                        data-item-id="3"
                        data-price="3" 
                        onclick="addToCart('Miško muilas', 1, 3)">
                        Pridėti į krepšelį
                        </button>
                    </div>
                </div>
                <!-- Prekė Nr. 4 -->
                <div class="mySlidesfade">
                    <img src="images/Muilas4.png" alt = 'Muilas Nr.4'>
                    <div class="price">3 € / 100 g</div>
                    <div class="buy"><button class="js-cd-add-to-cart" 
                        data-item-id="4"
                        data-price="3" 
                        onclick="addToCart('Gėlių muilas', 1, 3)">
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
		    <p>&copy; &copy;2023 Violeta Pociuvienė || Visos teisės saugomos. Kopijuoti, platinti svetainės turinį be autorių sutikimo draudžiama.</p>
	    </footer>
    </body>
</html>