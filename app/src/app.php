<?php 
    if(isset($_POST['submit'])) {
        $vardas = trim($_POST['name']);
        $pavarde = trim($_POST['surname']);
        $email = trim($_POST['email']);
        $zinute = trim($_POST['message']);

        if(!empty($vardas) && !empty($pavarde) && !empty($email)&& !empty($zinute)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $from = "$email";
                $to = "dainius.frismantas@gmail.com";
                $subject = "Nauja zinute";
                $autorius = 'Nuo: ' . $vardas . ', ' . $email;
                $zinute = htmlspecialchars($zinute);
                //mail($to, $subject, $autorius, $zinute, $from);
                //echo "<script>alert('Dekojame. Jusu zinute gauta. Netrukus susisieksime.');</script>";
            }
        }
        include '../app/src/db.php';
    }
    

