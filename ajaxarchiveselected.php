<?php
include"dbcon.php"; 
$selected  = $_POST['selected'];
foreach ($selected as $value) {
    $sql = " INSERT INTO adherent1 SELECT   id	,id_service	,nom	,prenom,	date_naissance,	mail	,specialite	,date_adhesion,
    date_fin_adhesion,	tel,	adresse,	cotisation_annuaire,	date_payement FROM adherent WHERE id='$value'";


 if ($conn->query($sql) === TRUE) {
    echo '<meta http-equiv="refresh" content="2;url=adherent.php" />' } else {
  echo "Error deleting record: " . $sql . "<br>" . $conn->error."'"; 
 } 
 
}
?>