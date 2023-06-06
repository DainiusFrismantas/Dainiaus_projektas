<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/stilius.css">
    <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <script src="js/map.js" defer></script>
    
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" defer></script> 
    <title>ViolArt</title>
<style>

</style>
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
                    <li><a href="GeliuKompozicijos.php">Gėlės</a></li>
                    <li><a href="DovanuPakavimas.php">Dovanų pakavimas</a></li>
                    <li><a href="Kontaktai.php">Kontaktai</a></li>
                </ul>
            </nav>
            <nav class="mobile-nav">
                <ul id="mMenu" class="flex-container">
                    <li><a href=""><img src="ViolArt.png" alt="ViolArt logotipas"></a></li>
                    <li><a href="Pagrindinis.php">Pradžia</a></li>
                    <li><a href="NertiGaminiai.php">Nerti gaminiai</a></li>
                    <li><a href="Muilas.php">Muilas</a></li>
                    <li><a href="Hidrolatai.php">Hidrolatai</a></li>
                    <li><a href="GeliuKompozicijos.php">Gėlės</a></li>
                    <li><a href="DovanuPakavimas.php">Dovanų pakavimas</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
            </nav>
    </header>
    <section class="hero-main">
    <div class="background-image">
        <img src="pagrindine.jpg" alt="Pagrindinė nuotrauka">
        <div class="container-connect" style="height: 100vh; overflow: scroll;">
        <h2>Susisiekite!</h2>
        <div class="row">
            <div class="column contact-column">
                <form id="contact-form">
                    <label for="name">Vardas:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="surname">Pavardė:</label>
                    <input type="text" id="surname" name="surname" required>

                    <label for="email">El. paštas:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Žinutė:</label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit">Išsiųsti žinutę</button>
                </form>
             </div>
            <div class="column location-column">
                <div id="map"></div>
                <div class="contacts-wrapper"></div>
            </div>
        </div>
    </div>
    </div>
    <div class="hero-content">
        <h1>ViolArt - rankų darbo kūriniai, kurie savyje talpina šilumą, energiją ir dvasią, kviečia stabtelti, pajusti, užuosti, nudžiugti ir pasigrožėti...</h1>
        <!--<button><a style="text-decoration: none; color: white;" href="container-connect">Susisiekite!</a></button>-->
    </div> 
</section>
    <footer class="footer">
            <div class="container">
                <nav class="footer-copyright">
                    <ul class="flex-container">
                        &copy;<?php echo date('Y'); ?> Violeta Pociuvienė || Visos teisės saugomos. Kopijuoti, platinti svetainės turinį be autorių sutikimo draudžiama.
                    </ul>
                </nav>
            </div>
        </footer>
        <script src="js/contact.js"></script>
    </body>
</html>