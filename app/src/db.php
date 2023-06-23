<?php
// Nustatome duomenų bazės prisijungimo informaciją
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "kontaktineforma");

// Sukuriame duomenų bazės prisijungimą naudojant MySQLi objektą
$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

// Patikriname prisijungimo klaidas
if ($mysqli->connect_error) {
    die('Atsiprašome, svetainės laikini sutrikimai.<br> Klaida: ' . $mysqli->connect_error);
}
?>
