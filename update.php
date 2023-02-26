<?php
$con = mysqli_connect("localhost","root","");
$db =  mysqli_select_db($con,'userd');


if(isset($_POST['updatedata'])){


$id = $_POST['update_id'];



$np = $_POST['np'];

$date = $_POST['date'];

$mail = $_POST['mail'];

$tel = $_POST['tel'];


$query = "UPDATE adherent SET nom_et_prenom = '$np',date_naissance = '$date', mail = '$mail',  tel = '$tel' WHERE id = '$id' ";
$query_run = mysqli_query($con,$query);


if($query_run)
{

echo '<script> alert("Data Updated");</script>';

header("Location:adherent.php");}

else
{

echo '<script> alert("Data not  Updated");</script>';


}



}













?>