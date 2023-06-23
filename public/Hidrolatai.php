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
    <script src="js/cart.js" defer></script>
    <title>Hidrolatai</title>
</head>
<body>
    <?php include('../app/views/header.php');?>
    <section class="hero-hidro">
        <div class="container">
            <h2>Hidrolatai - distiliuoti gėlių / vaistažolių vandenys</h2>
            <h4><b>Hidrolatai</b> turi nepaprastų terapinių savybių. Iš augalo išgaunamos vandenyje tirpios medžiagos, kurių nėra eteriniuose aliejuose - jos atiduodamos tik <b>hidrolatui</b>.Hidrolatas yra labai švelni ir visiškai saugi naudoti medžiaga.</h4>
            <!-- Pirma nuotraukų eilė -->
                <div class="row">
                        <!-- Prekė Nr. 1 -->
                    <div class="mySlidesfade">
                        <img src="../app/images/Hidrolatai8.png" alt = 'Hidrolatas Nr.1'>
                        <div class="price">5 € / 100 ml</div>
                        <div class="buy"> <button class="js-cd-add-to-cart" 
                            data-item-id="1"
                            data-price="5" 
                            onclick="addToCart('Vingirdykštė', 1, 5)">
                            Pridėti į krepšelį
                            </button>
                        </div>
                    </div>
                      <!-- Prekė Nr. 2 -->
                    <div class="mySlidesfade">
                        <img src="../app/images/Hidrolatai7.png" alt = 'Hidrolatas Nr.2'>
                        <div class="price">5 € / 100 ml</div>
                        <div class="buy"> <button class="js-cd-add-to-cart" 
                            data-item-id="2"
                            data-price="5" 
                            onclick="addToCart('Šalavijas', 1, 5)">
                            Pridėti į krepšelį
                            </button>
                        </div>
                    </div>
                </div>
                    <h4>Gaminant <b>hidrolatą</b> specialiame inde - alembike - kaitinami vandeniu užpilti gėlių žiedai. Nuo kaitros kylantys garai atšaldomi, kondensuojasi ir iškrinta vandeniu. Šis vanduo ir vadinamas <b>hidrolatu</b> - ypatinga augaline subtancija, pakeitusia savo būvį ir tapusia alchemiškai nemirtinga...</h4>
                    <!-- Antra nuotraukų eilė -->
                <div class="row">
                    <!-- Prekė Nr. 3 -->
                    <div class="mySlidesfade">
                        <img src="../app/images/Hidrolatai6.png" alt = 'Hidrolatas Nr. 3'>
                        <div class="price">5 € / 100 ml</div>
                        <div class="buy"> <button class="js-cd-add-to-cart" 
                            data-item-id="3"
                            data-price="5" 
                            onclick="addToCart('Pušų pumpuras', 1, 5)">
                            Pridėti į krepšelį
                            </button>
                        </div>
                    </div>
                    <!-- Prekė Nr. 4 -->
                      <div class="mySlidesfade">
                          <img src="../app/images/Hidrolatai5.png" alt = 'Hidrolatas Nr.4'>
                          <div class="price">20 € / 400 ml</div>
                          <div class="buy"> <button class="js-cd-add-to-cart" 
                                data-item-id="4"
                                data-price="20" 
                                onclick="addToCart('Komplektas', 1, 20)">
                                Pridėti į krepšelį
                                </button>
                            </div>
                      </div>
                </div>
                <h4>Jį galima purkšti tiesiai ant odos, naudoti inhaliacijoms, pilti į vonią, kvėpintis.Hidrolatai turi nuostabų aromaterapinį poveikį - mėgiamo kvapo gėlių vanduo teigiamai veiks ne tik odą, bet ir jausmus <b>Hidrolatas</b> - vanduo, kuris drėkina, ramia, gaivina, maitina, lengvai dezinfekuoja, padeda gyti ir atsinaujinti odai.</h4>
            </div>
    </section>
        <?php 
        include('../app/views/footer.php');
        include('../app/views/cart.php');
        ?>
    </body>
</html>