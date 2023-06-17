<?php
    require __DIR__ . '/../app/src/app.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/../app/css/normalize.css">
 
  <link rel="stylesheet" href='/../app/css/style.css'>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" defer></script>
 <!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js" defer></script>
<!-- Krepšelio JS -->
<script src="/../app/js/contact.js" defer></script>
<script src="https://kit.fontawesome.com/adaa5eca50.js" defer></script>
<script src="/../app/js/toggleMobileNav.js" defer></script>
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
      background-image: url('app/images/pagrindine.jpg');
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
</head>

<body>
 
  <?php
            include('/../app/views/header.php');
            include('/../app/views/content.php');
            include('/../app/views/footer.php');    
        ?>

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
