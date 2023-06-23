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
    <title>Nerti gaminiai</title>
</head>
<body>
    <?php include('../app/views/header.php');?>
    <section class="hero-nerti">
        <div class="container">
            <h2>Stalo padėkliukai, rankinės, pirštinės, kojinės, krepšeliai ir dėžutės.</h2> <h4><br><b>Nėrimas</b> - malonumas savo rankomis sukurti daiktą, pajusti jo atsiradimo kelią nuo idėjos iki paskutinės kilpelės. Neriant susikaupia didelė kūrybinė energija ir potencialas, kurį norisi įgalinti. Tai prasminga ir nesudėtinga veikla.</h4>
            <!-- Pirma nuotraukų eilė -->
            <div class="row">
                <!-- Prekė Nr. 1 -->
                <div class="mySlidesfade">
                    <img src="../app/images/NertiGaminiai1.png" alt = 'Nerta rankinė'>
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
                    <img src="../app/images/NertiGaminiai2.png" alt = 'Nerti padėkliukai Nr. 1'>
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
                    <img src="../app/images/NertiGaminiai3.png" alt = 'Nertos rankinės'>
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
                    <img src="../app/images/NertiGaminiai4.png" alt = 'Nerti padėkliukai Nr. 2'>
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
        <?php 
        include('../app/views/footer.php');
        include('../app/views/cart.php');
        ?>
    </body>
</html>