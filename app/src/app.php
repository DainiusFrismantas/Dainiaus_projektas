<?php
include 'db.php';

if (isset($_POST['submit-form'])) {
    $vardas = trim($_POST['vardas']);
    $pavarde = trim($_POST['pavarde']);
    $pastas = trim($_POST['pastas']);
    $zinute = trim($_POST['zinute']);

    if (!empty($vardas) && !empty($pavarde) && !empty($pastas) && !empty($zinute)) {
        if (filter_var($pastas, FILTER_VALIDATE_EMAIL)) {
            $from = $pastas;
            $to = "dainius.frismantas@gmail.com";
            $subject = "Nauja žinutė";
            $autorius = 'Nuo: ' . $vardas . ', ' . $pastas;
            $zinute = htmlspecialchars($zinute);
            
            // Insert data into the database
            mysqli_query($mysqli, "INSERT INTO klientai (vardas, pavarde, pastas, zinute) 
            VALUES('$vardas', '$pavarde', '$pastas','$zinute')");
            
        }
    }
}
?>
