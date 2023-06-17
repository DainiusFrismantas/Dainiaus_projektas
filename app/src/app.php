<?php 
    if(isset($_POST['submit'])) {
        $vardas = trim($_POST['vardas']);
        $pavarde = trim($_POST['pavarde']);
        $pastas = trim($_POST['pastas']);
        $zinute = trim($_POST['zinute']);
        $sukurimo_data = trim($_POST['sukurimo_data']);
      

        if(!empty($vardas) && !empty($pavarde) && !empty($pastas)&& !empty($zinute) && !empty($sukurimo_data)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $from = "$email";
                $to = "dainius.frismantas@gmail.com";
                $subject = "Nauja žinutė";
                $autorius = 'Nuo: ' . $vardas . ', ' . $pavarde . ', ' . $pastas;
                $zinute = htmlspecialchars($zinute);
                //mail($to, $subject, $autorius, $zinute, $from);
                //echo "<script>alert('Dekojame. Jusu zinute gauta. Netrukus susisieksime.');</script>";
            }
        }
        include '/../app/src/db.php';
    }
    
    