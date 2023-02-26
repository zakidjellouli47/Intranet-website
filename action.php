<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'userd');

$input = filter_input_array(INPUT_POST);

$nom_et_prenom = mysqli_real_escape_string($connect, $input["nom_et_prenom"]);
$date_naissance = mysqli_real_escape_string($connect, $input["date_naissance"]);
$mail = mysqli_real_escape_string($connect, $input["mail"]);
$specialite = mysqli_real_escape_string($connect, $input["specialite"]);


if($input["action"] === 'edit')
{
 $query = "
 UPDATE adherent 
 SET nom_et_prenom = '".$nom_et_prenom."', 
 date_naissance = '".$date_naissance."',
  mail = '".$mail." ,
 specialite = '".$specialite."'

 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM adherent 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
