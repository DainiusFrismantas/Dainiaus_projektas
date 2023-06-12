<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/map.css">
  <link rel="stylesheet" href="css/header.css">
  
  <link rel="stylesheet" href="css/image.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/container.css">
  <link rel="stylesheet" href="css/style.css">
 <!-- <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">-->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
  <title>ViolArt</title>
  <style>
.hero-main {
    background-image: url('images/pagrindine.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 1650px;
    display: block;
    position: relative;
    display: inline-block;
    text-align: center;
  }



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
    <!--
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
    -->
  </header>
  <section id="connect" class="hero-main">
    
  <div id="map"></div>
    <div class="hero-content">
      <h2>ViolArt - rankų darbo kūriniai, kurie savyje talpina šilumą, energiją ir dvasią, kviečia stabtelti, pajusti, užuosti, nudžiugti ir pasigrožėti...</h2>
    </div>
   
    <form id="contact-form" class="contact-form" method="post" action="form.php">
        
        <h3>Susisiekite su mumis!</h3>
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
       
  </section>
  <footer class="footer">
      <nav class="footer-copyright">
          &copy;<?php echo date('Y'); ?> Violeta Pociuvienė || Visos teisės saugomos. Kopijuoti, platinti svetainės turinį be autorių sutikimo draudžiama.
      </nav>
  </footer>
  <script src="js/contact.js" defer></script>
  <script src="js/map.js" defer></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" defer></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" defer></script>
</body>

</html>
