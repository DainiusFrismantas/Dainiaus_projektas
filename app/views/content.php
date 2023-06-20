<section id="connect" class="hero-main">
    <div id="map"></div>
    <div class="hero-content">
    <h2>ViolArt - rankų darbo kūriniai, kurie savyje talpina šilumą, energiją ir dvasią, kviečia stabtelti, pajusti, užuosti, nudžiugti ir pasigrožėti...</h2>
    </div>
    <form id="contact-form" class="contact-form" action="../app/src/app.php" method="post">
        <h3>Susisiekite su mumis!</h3>
        <label for="name">Vardas:</label>
        <input type="text" id="name" name="vardas" required autofocus>
        <label for="surname">Pavardė:</label>
        <input type="text" id="surname" name="pavarde" required>
        <label for="email">El. paštas:</label>
        <input type="email" id="email" name="pastas" required>
        <label for="message">Jūsų žinutė:</label>
        <textarea id="message" name="zinute" required></textarea>
        <button type="submit" name="submit">Išsiųsti žinutę</button>
    </form>
</section>
