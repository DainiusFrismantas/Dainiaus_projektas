<!DOCTYPE html>
<html>
<head>
  <title>Kontaktai</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/stilius.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
  <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" defer></script>
</head>
</head>
<body>
  <header class="site-header">
    <nav class="main-nav">
      <ul class="flex-container">
          <li><a href=""><img src="ViolArt.png" alt="ViolArt logotipas"></a></li>
          <li><a href="Pagrindinis.php">Pradinis puslapis</a></li>
          <li><a href="NertiGaminiai.php">Nerti gaminiai</a></li>
          <li><a href="Muilas.php">Muilas</a></li>
          <li><a href="Hidrolatai.php">Hidrolatai</a></li>
          <li><a href="GeliuKompozicijos.php">Gėlių kompozicijos</a></li>
          <li><a href="DovanuPakavimas.php">Dovanų pakavimas</a></li>
      </ul>
  </nav>
	</header>
  <div class="container-connect">
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
  <footer class="footer">
		<p>&copy;2023 Violeta Pociuvienė || Visos teisės saugomos. Kopijuoti, platinti svetainės turinį be autorių sutikimo draudžiama.</p>
	</footer>

  <script src="js/map.js"></script>
  <script src="js/contact.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script> 
</body>
</html>