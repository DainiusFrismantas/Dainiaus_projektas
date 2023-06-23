<script>
    function toggleMobileNav() {
    var x = document.getElementById("mMenu");
    if(x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
</script>

<header class="site-header">
  <nav class="main-nav">
      <ul class="flex-container">
        <li><a href=""><img src="../app/images/ViolArt.png" alt="ViolArt logotipas"></a></li>
        <li class="menu-toggle"><a href="javascript:void(0);" class="icon" onclick="toggleMobileNav()"><i class="fa fa-bars"></i></a></li>
        <li class="menu-item"><a href="../public/index.php">Pradžia</a></li>
        <li class="menu-item"><a href="../public/NertiGaminiai.php">Nerti gaminiai</a></li>
        <li class="menu-item"><a href="../public/Muilas.php">Muilas</a></li>
        <li class="menu-item"><a href="../public/Hidrolatai.php">Hidrolatai</a></li>
        <li class="menu-item"><a href="../public/GeliuKompozicijos.php">Gėlių kompozicijos</a></li>
        <li class="menu-item"><a href="../public/DovanuPakavimas.php">Dovanų pakavimas</a></li>
      </ul>
    </nav>
    <nav class="mobile-nav">
      <ul id="mMenu" class="flex-container">
        <li><a href=""><img src="../app/images/ViolArt.png" alt="ViolArt logotipas"></a></li>
        <li><a href="../public/index.php">Pradžia</a></li>
        <li><a href="../public/NertiGaminiai.php">Nerti gaminiai</a></li>
        <li><a href="../public/Muilas.php">Muilas</a></li>
        <li><a href="../public/Hidrolatai.php">Hidrolatai</a></li>
        <li><a href="../public/GeliuKompozicijos.php">Gėlės</a></li>
        <li><a href="../public/DovanuPakavimas.php">Dovanų pakavimas</a></li>
      </ul>
      <a href="javascript:void(0);" class="icon" onclick="toggleMobileNav()">
        <i class="fa fa-bars"></i>
    </a>
  </nav>
</header>