<?php 
if(isset($_POST['submit'])) {
    $vardas = isset($_POST['vardas']) ? trim($_POST['vardas']) : '';
    $pavarde = isset($_POST['pavarde']) ? trim($_POST['pavarde']) : '';
    $pastas = isset($_POST['pastas']) ? trim($_POST['pastas']) : '';
    $zinute = isset($_POST['zinute']) ? trim($_POST['zinute']) : '';

    if(!empty($vardas) && !empty($pavarde) && !empty($pastas) && !empty($zinute)) {
        if(filter_var($pastas, FILTER_VALIDATE_EMAIL)){
            $from = $pastas;
            $to = "dainius.frismantas@gmail.com";
            $subject = "Nauja žinutė";
            $autorius = 'Nuo: ' . $vardas . ', ' . $pastas;
            $zinute = htmlspecialchars($zinute);
            //mail($to, $subject, $autorius, $zinute, $from);
            //echo "<script>alert('Dekojame. Jusu zinute gauta. Netrukus susisieksime.');</script>";
            
            include 'db.php';
        }
    }
}

