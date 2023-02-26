<?php
    include_once 'connextion.php';
    $success  = "";
    if(isset($_POST['add']))
    {  
     
        $n = $_POST['n'];
        $d = $_POST['d'];
        $m   = $_POST['m'];
        $s   = $_POST['s'];
        $date = $_POST['date'];
        $date1 = $_POST['date1'];
        $tel  = $_POST['tel'];
        $adresse    = $_POST['adresse'];
        $cot   = $_POST['cot'];
        $p    = $_POST['p'];
        
        
        $sql = "INSERT INTO adherent (nom_et_prenom,date_naissance,mail,specialite,date_adhesion,date_fin_adhesion,tel,adresse,cotisation_annuaire,date_payement)
        VALUES ('$n','$d','$m','$s','$date','$date1','$tel','$adresse','$cot','$p')";
        if (mysqli_query($conn, $sql))
        {
            $success    =   "Nouvel enregistrement créé avec succès!";
        }
        else
        {
        echo "Error: " . $sql . " " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>         