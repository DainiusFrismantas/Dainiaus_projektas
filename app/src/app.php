<?php 

if(isset($_POST['submit'])) {
    $vardas =  trim($_POST['vardas']) ;
    $pavarde =  trim($_POST['pavarde']) ;
    $pastas =  trim($_POST['pastas']) ;
    $zinute =  trim($_POST['zinute']) ;

    if(!empty($vardas) && !empty($pavarde) && !empty($pastas) && !empty($zinute)) {
        if(filter_var($pastas, FILTER_VALIDATE_EMAIL)){
            include 'db.php';
            $from = $pastas;
            $to = "dainius.frismantas@gmail.com";
            $subject = "Nauja žinutė";
            $autorius = 'Nuo: ' . $vardas . ', ' . $pastas;
            $zinute = htmlspecialchars($zinute);
        }
    } 
}

