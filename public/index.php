<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
 
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" defer></script>
 <!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js" defer></script>
<!-- Krepšelio JS -->
<script src="js/contact.js" defer></script>
<script src="https://kit.fontawesome.com/adaa5eca50.js" defer></script>
<script src="js/toggleMobileNav.js" defer></script>


  <title>ViolArt</title>
  <style>
/* Header */
header {
  display: block;
  justify-content: center;
  background-color: #554172;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
}

.site-header ul {
  margin: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
  background-color: #554172;
  width: 100%;
  display: block;
}

.site-header li {
  float: left;
  padding: 0px;
}

.site-header li a {
  display: block;
  padding: 10px 10px;
  color: white;
  text-align: center;
  text-decoration: none;
  font-size: 1rem;
  font-weight: 600;
}













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
      max-width: 400px;
      height: 500px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }



/*Kontaktinė forma pagrindiniame puslapyje*/
  #contact-form {
  position: absolute;
  top: 40%;
  right: 0%;
  transform: translate(-10%, -50%);
  z-index: 3;
  background-color: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  background-color: rgba(255, 255, 255, 0.8);
  color: #498479;
}

  #contact-form label,
  #contact-form input,
  #contact-form textarea,
  #contact-form button {
  display: block;
  width: 100%;
  margin-bottom: 10px;
  }

  #contact-form button {
    padding: 20px;
  background-color: #498479;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

  #contact-form button:hover {
  background-color: #45a049;
  }

  #contact-form h3 {
  margin-top: 0;
  margin-bottom: 10px;
  font-size: 24px;
  font-weight: 600;
  }







  .mobile-nav {
  display: none;
}


 /* Kitimas ekranų dydžiui < 768px (planšetė) */
@media screen and (max-width: 768px) {
    /* Slėpti meniu punktus */
    .main-nav .menu-item {
      display: none;
    }

    /* Rodyti tik logotipą ir menu-toggle */
    .main-nav .menu-toggle {
      display: block;
    }

        /* Mobile-nav stiliai */
        .mobile-nav {
      position: relative;
      text-align: center;
    }
    .mobile-nav .flex-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #555555;
      list-style: none;
      padding: 20px;
      text-align: center;
      display: none;
      z-index: 2;
    }

    .mobile-nav .flex-container li {
      margin-bottom: 15px;
    }

    .mobile-nav .flex-container a {
      color: white;
      text-decoration: none;
      font-size: 18px;
    }

    .mobile-nav .menu-toggle {
      position: relative;
      z-index: 3;
    }

    .mobile-nav .mobile-nav-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      display: none;
    }



    .hero-content h2{
      font-size: 18px; 
    }


    #contact-form {
    text-align: center;
    color: #98479;

}
}
 /* Kitimas ekranų dydžiui >= 1024px (didžiulis ekranas) */
 @media screen and (min-width: 768px) {
    /* Slėpti burgerio ikoną */
    .main-nav .menu-toggle {
      display: none;
    }
  }
  </style>

  <script>
 
</script>


</head>

<body>
  <header class="site-header">
    <nav class="main-nav">
      <ul class="flex-container">
        <li><a href=""><img src="ViolArt.png" alt="ViolArt logotipas"></a></li>
        <li class="menu-toggle"><a href="javascript:void(0);" class="icon" onclick="toggleMobileNav()"><i class="fa fa-bars"></i></a></li>
        <li class="menu-item"><a href="Pagrindinis.php">Pradžia</a></li>
        <li class="menu-item"><a href="NertiGaminiai.php">Nerti gaminiai</a></li>
        <li class="menu-item"><a href="Muilas.php">Muilas</a></li>
        <li class="menu-item"><a href="Hidrolatai.php">Hidrolatai</a></li>
        <li class="menu-item"><a href="GeliuKompozicijos.php">Gėlės</a></li>
        <li class="menu-item"><a href="DovanuPakavimas.php">Dovanų pakavimas</a></li>
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
      <div class="mobile-nav-background"></div> <!-- Naujas div elementas -->
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
                , maxZoom: 12
                , minZoom: 7
            }).addTo(mymap)
            , "Esri World Street Map": L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'Tiles &copy; Esri'
                , maxZoom: 12
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
