<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "kontaktineforma");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo 'Atsiprašome, svetainės laikini sutrikimai.\n';
        echo 'Klaida: ' . $mysqli->connect_error . '\n';
        exit();
    }

    mysqli_query($mysqli, "INSERT INTO klientai (vardas, pavarde, pastas, zinute, sukurimo_data) 
    VALUES('$_POST[vardas]', '$_POST[pavarde]', '$_POST[pastas]', '$_POST[zinute]', '$_POST[sukurimo_data]')");