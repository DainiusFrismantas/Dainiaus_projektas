<?php
  require __DIR__ . '/../app/src/app.php';
  include __DIR__ . '/../app/src/db.php';
  require __DIR__ . '/../app/views/header.php';
  require __DIR__ . '/../app/views/content.php';
  require __DIR__ . '/../app/views/footer.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../app/css/normalize.css">
  <link rel="stylesheet" href='../app/css/style.css'>
   <!--Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
 <!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">

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
      background-image: url('../app/images/pagrindine.jpg');
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





  
  </style>
</head>

<body>
 
  <?php
            include("../app/views/header.php");
            include("../app/views/content.php");
            include("../app/views/footer.php");    
  ?>
<!-- SweetAlert JS -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Krepšelio JS -->
<script src="../app/js/contact.js" ></script>
<script src="https://kit.fontawesome.com/adaa5eca50.js"></script>
<script src="../app/js/toggleMobileNav.js"></script>
<!-- Žemėlapio JS -->
<script src="../app/js/map.js"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
</body>
</html>
