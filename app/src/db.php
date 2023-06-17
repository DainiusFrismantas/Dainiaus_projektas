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

    $vardas = $mysqli->real_escape_string(isset($_POST['vardas']) ? $_POST['vardas'] : '');
    $pavarde = $mysqli->real_escape_string(isset($_POST['pavarde']) ? $_POST['pavarde'] : '');
    $pastas = $mysqli->real_escape_string(isset($_POST['pastas']) ? $_POST['pastas'] : '');
    $zinute = $mysqli->real_escape_string(isset($_POST['zinute']) ? $_POST['zinute'] : '');
    

    $sql = "INSERT INTO klientai (vardas, pavarde, pastas, zinute) VALUES ('$vardas', '$pavarde', '$pastas', '$zinute')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Įrašas sėkmingai įterptas į duomenų bazę.";
    } else {
        echo "Klaida: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
?>
