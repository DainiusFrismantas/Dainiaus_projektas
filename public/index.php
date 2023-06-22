<?php
  require __DIR__ . '/../app/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../app/css/normalize.css">
  <link rel="stylesheet" href='../app/css/index.css'>
  <!--Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
  <!-- SweetAlert CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
  <title>ViolArt - rankų gamybos produktai</title>
</head>
      <body>
          <?php
            include('../app/views/header.php');
            include('../app/views/content.php');
            include('../app/views/footer.php');    
          ?>
        <!-- SweetAlert JS -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Kontakto formos JS -->
        <script src="../app/js/contact.js"></script>
        <script src="https://kit.fontawesome.com/adaa5eca50.js"></script>
        <!-- Mobile JS -->
        <script src="../app/js/toggleMobileNav.js"></script>
        <!-- Žemėlapio JS -->
        <script src="../app/js/map.js"></script>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
      </body>
</html>
