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
    

    mysqli_query($mysqli, "INSERT INTO klientai (vardas, pavarde, pastas, zinute) 
    VALUES('$vardas', '$pavarde', '$pastas','$zinute')");
    
echo '<script>myFunction();</script>';
 /*6ioje vietoje turi buti iskviesta contact.js funkcija, kad duomenys nusisiustu i db.
   
   $sql = "INSERT INTO klientai (vardas, pavarde, pastas, zinute) VALUES ('$vardas', '$pavarde', '$pastas', '$zinute')";*/

/*Iškviesti JavaScript funkciją iš PHP
echo '<script>myFunction();</script>';
?>

<script>
// JavaScript funkcija
function myFunction() {
    // Pateikite swal pranešimą su gautais duomenimis
    swal("Žinutė sėkmingai išsiųsta!", "Atsakysime el. paštu.", "success");
}

const contactForm = document.getElementById('contact-form');

// Prijunkite 'submit' įvykį prie formos ir išvalykite formos laukus
contactForm.addEventListener('submit', function(event) {
    event.preventDefault();
    contactForm.reset();
});
</script>
*/
