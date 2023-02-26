<?php




$Titre = $_POST['Titre'];
$Nom_Auteur= $_POST['Nom_Auteur'];
$Option_These= $_POST['Option_These'];
$Directeur_These = $_POST['Directeur_These'];
$Lieu = $_POST['Lieu'];
$Annee = $_POST['Annee'];
//$dateArray = explode('/', $_POST['Annee']);
//$Annee = $dateArray[2].'-'.$dateArray[0].'-'.$dateArray[1];

$Abstract = $_POST['Abstract'];
if (!empty($Titre) || !empty($Nom_Auteur) || !empty($Option_These) || !empty($Directeur_These) || !empty($Lieu) || !empty($Annee)  || !empty($Abstract)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "zakidjellouli";
    $dbname = "userd";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    $SELECT = "SELECT Nom_Auteur From these Where Nom_Auteur = ? Limit 1";
  $INSERT = "INSERT Into these (Titre,Nom_Auteur,Option_These,Directeur_These,Lieu,Annee,Abstract) values(?, ?, ?, ?, ?, ?, ?)"; 
   
     //Prepare statement
    $stmt = $conn->prepare($SELECT);
    if($stmt!== FALSE)
{
     $stmt->bind_param("s", $Nom_Auteur);
     $stmt->execute();
     $stmt->bind_result($Nom_Auteur);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssss", $Titre, $Nom_Auteur, $Option_These, $Directeur_These, $Lieu, $Annee,$Abstract);
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