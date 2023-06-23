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
    <title>Dovanų pakavimas</title>
</head>
<body>
    <?php include('../app/views/header.php');?>
    <section class="hero-dovanos">
        <div class="container">
            <h2>Dovanų pakavimas</h2>
            <h4>Tinkamai parinkta pakuotė dovanai gali suteikti paslaptingumo,
                šventiškumo ar prabangos. <b>Dovanos pakavimą</b> diktuoja ne tik mados ir stiliaus tendenijos, bet ir pati dovana.</h4>
                <!-- Pirma nuotraukų eilė -->
                <div class="row">
                     <!-- Prekė Nr. 1 -->
                    <div class="mySlidesfade">
                        <img src="../app/images/DovanuPakavimas1.png" alt = 'Dovanų pakavimas Nr.1'>
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
                        <img src="../app/images/DovanuPakavimas2.png" alt = 'Dovanų pakavimas Nr.2'>
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
                        <img src="../app/images/DovanuPakavimas3.png" alt = 'Dovanų pakavimas Nr.3'>
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
                          <img src="../app/images/DovanuPakavimas4.png" alt = 'Dovanų pakavimas Nr.4'>
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
        <?php 
        include('../app/views/cart.php');
        include('../app/views/footer.php');
        ?>

    </body>
</html>


