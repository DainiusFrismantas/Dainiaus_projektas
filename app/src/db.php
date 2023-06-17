<?php
    // Nustatome duomenų bazės prisijungimo informaciją
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "kontaktineforma");

    // Sukuriame duomenų bazės prisijungimą naudojant MySQLi objektą
    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    
    // Patikriname prisijungimo klaidas
    if($mysqli->connect_error) {
        echo 'Atsiprašome, svetainės laikini sutrikimai.\n';
        echo 'Klaida: ' . $mysqli->connect_error . '\n';
        exit();
    }

    // Paruošiame SQL užklausą su parametrais
    $query = $mysqli->prepare("INSERT INTO klientai (vardas, pavarde, pastas, zinute) VALUES (?, ?, ?, ?)");
    
    // Susiejame parametrus su reikšmėmis
    // "ssss" nurodo, kad visi parametrai yra teksto tipo (string)
    if (empty($_POST['name'])) {
        echo 'Vardas yra privalomas laukas. Prašome užpildyti.';
        exit();
    }
    $query->bind_param("ssss", $vardas, $pavarde, $email, $zinute);

    // Įvykdome paruoštą užklausą
    $query->execute();
    
    // Uždarome užklausos objektą
    $query->close();
?>
