<?php



$Auteur= $_POST['Auteur'];
$titre = $_POST['titre'];

$document= $_POST['document'];
$date = $_POST['date'];
$datee = $_POST['datee'];
$fichier = $_POST['fichier'];
//$dateArray = explode('/', $_POST['Annee']);
//$Annee = $dateArray[2].'-'.$dateArray[0].'-'.$dateArray[1];


if (!empty($titre) || !empty($Auteur) || !empty($document) || !empty($date) || !empty($datee) || !empty($fichier)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "zakidjellouli";
    $dbname = "userd";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    $SELECT = "SELECT auteur From bilans Where auteur = ? Limit 1";
  $INSERT = "INSERT Into bilans (titre,type,auteur,date_creation,date_publication,fichier) values(?, ?, ?, ?, ?, ?)"; 
   
     //Prepare statement
    $stmt = $conn->prepare($SELECT);
    if($stmt!== FALSE)
{
     $stmt->bind_param("s", $Auteur);
     $stmt->execute();
     $stmt->bind_result($Auteur);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssss", $titre, $Auteur, $document, $date, $datee,$fichier);
      $stmt->execute();



      echo "Nouvel enregistrement inséré avec succès";
     } else {
      echo "informations déjà insérées";
     }
     $stmt->close();
     $conn->close();}
     else{

       die('prepare() failed: ' . htmlspecialchars($conn->error));
     }
   }
    
} else {
 echo "Tous les champs sont obligatoires";
 die();
}


?>