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
    <link rel="stylesheet" href="../app/css/style.css">
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js" defer></script>
    <!-- Krepšelio JS -->
    <script src="js/cart.js" defer></script>
    <title>Muilas</title>
</head>
<body>
        <?php include('../app/views/header.php');?>
    <section class="hero-muilas">
        <div class="container">
            <h2>Rankų darbo muilas </h2>
            <h4>Rankų daro <b>muilas</b> gaminamas iš puikios kokybės žaliavos - sertifikuotos muilo bazės, pagamintos Izraelyje. Naudojamos balta, bespalvė, su pirmo spaudimo alyvuogių aliejum, su neapdoroto alyvuogių aliejaus tirščiais, su negyvosios jūros purvu muilo bazės. Išgauti spalvą ir kvapą naudojami dažai ir aliejai, skirti muilo ir kosmetikos gamybai.Nemėgstantiems kvapų ir spalvų gaminami bespalviai ir bekvapiai muilai su natūraliomis džiovintomis vaistažolėmis ir pievų gėlėmis.Išgauti drėkinamąjį ir švelnumo poveikį naudojami natūralūs avokado, linų sėmenų ir kanapių aliejai.Vienodo <b>muilo</b> čia nėra. </h4> 
            <!-- Pirma nuotraukų eilė -->
            <div class="row">
                <!-- Prekė Nr. 1 -->
                <div class="mySlidesfade">
                    <img src="../app/images/images/Muilas1.png" alt = 'Muilas Nr.1'>
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
                    <img src="../app/images/images/Muilas2.png" alt = 'Muilas Nr.2'>
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
                    <img src="../app/images/images/Muilas3.png" alt = 'Muilas Nr.3'>
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
                    <img src="../app/images/images/Muilas4.png" alt = 'Muilas Nr.4'>
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
        <?php 
        include('../app/views/footer.php');
        include('../app/views/cart.php');
        ?>
    </body>
</html>