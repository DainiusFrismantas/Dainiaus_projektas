<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" defer></script>
 <!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js" defer></script>

<!-- Krepšelio JS -->
<script src="js/contact.js" defer></script>

<script src="https://kit.fontawesome.com/adaa5eca50.js"></script>

  <title>ViolArt</title>
  <style>
    /* Spalvų taisyklė skirtuke */
    .main-nav a:hover {
      color: #FF8C00;
      /* Teksto spalva, kai pele užvedama ant nuorodos */
    }

    /*Pagrindinė background nuotrauka pagrindiniame puslapyje */
    .hero-main {
      background-image: url('images/pagrindine.jpg');
      background-position: center;
      background-size: cover;
      width: 100%;
      height: 1650px;
      display: block;
      position: relative;
      text-align: center;
    }

    /* Footer */
    .footer {
      background-color: #554172;
      color: white;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      border: 1px solid gray;
    }

    /*Žemėlapiui */
    #map {
      position: absolute;
      top: 80%;
      right: 0%;
      transform: translate(-10%, -50%);
      z-index: 3;
      width: 80%;
      max-width: 300px;
      height: 500px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    .mobile-nav {
  display: none;
}
    @media screen and (max-width: 1024px) {
      .main-nav li{
        display: none;
      }
      .mobile-nav li {
        list-style:none;
    }

    }

 
  </style>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/container.css">
  <script src="https://kit.fontawesome.com/adaa5eca50.js"></script>
  <script>
    function toggleMobileNav() {
      var x = document.getElementById("mMenu");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
  </script>
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
      <a href="javascript:void(0);" class="icon" onclick="toggleMobileNav()">
        <i class="fa fa-bars"></i>
      </a>
    </nav>
  </header>
  <section id="connect" class="hero-main">
    
  <div id="map"></div>
    <div class="hero-content">
      <h2>ViolArt - rankų darbo kūriniai, kurie savyje talpina šilumą, energiją ir dvasią, kviečia stabtelti, pajusti, užuosti, nudžiugti ir pasigrožėti...</h2>
    </div>
    <!--method="post" action="form.php"-->
    <form id="contact-form" class="contact-form" >
        
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
          &copy;<?php echo date('Y'); ?> Violeta Pociuvienė || Visos teisės saugomos. Kopijuoti, platinti svetainės turinį be autorių sutikimo draudžiama.
  </footer>
  <script>
    // ŽEMĖLAPIO FUNKCIONALUMAS PAGRINDINIAME PUSLAPYJE
    document.addEventListener("DOMContentLoaded", function (event) {
        // Žemėlapis
        var mymap = L.map('map')
            .setView([56.303503, 22.280236], 13);

        // Kartografinių pagrindų sluoksnių sąrašas
        var baseLayers = {
            "OpenStreetMap": L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
                , maxZoom: 18
                , minZoom: 7
            }).addTo(mymap)
            , "Esri World Street Map": L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'Tiles &copy; Esri'
                , maxZoom: 18
                , minZoom: 7
            })
        };

        // Simbolis žymintis vietą
        var marker = L.marker([56.303503, 22.280236])
            .addTo(mymap);

        // Iššokantis langas tik paspaudus ant ikonėlės
        marker.on('click', function () {
            marker.bindPopup("<b>Sveiki!</b><br>Atvykite prekių apžiūrėti gyvai!")
                .openPopup();
        });

        // Pridėti valdiklį žemėlapio kartografiniam pagrindui keisti
        L.control.layers(baseLayers)
            .addTo(mymap);
    });
</script>
</body>
</html>
