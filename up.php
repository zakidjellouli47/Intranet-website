<?php
ini_set('display_errors', '1');

//$con=mysql_connect("localhost","root","zakidjellouli","userd") or die("failed");

//$host = "localhost";
  //  $dbUsername = "root";_
  //  $dbPassword = "zakidjellouli";
  //  $dbname = "userd";
    //create connection
  //  $con = new mysqli($host, $dbUsername, $dbPassword, $dbname);



include_once'sendcode.php';

if (isset($_POST['btn'])) {





//if (isset($_POST['Nomea']) || isset($_POST['Nomed']) || isset($_POST['adresseemail']) || isset($_POST['université']) ||  isset($_POST['diplome'])  ||    isset($_POST['date']) || isset($_POST['l']))  {


//echo "error";
//}
//else{

//if (isset($_POST['NometPrenomdelauteur'])) 
    $Titre = mysqli_real_escape_string($con, $_POST['Titre']);
    $nomauteur = mysqli_real_escape_string($con, $_POST['nomauteur']);

    


  


     $Opt=mysqli_real_escape_string($con,$_POST['Opt']);
                                                     



 
    $DirecteurThese = mysqli_real_escape_string($con,$_POST['DirecteurThese']);



    $Lieu=mysqli_real_escape_string($con,$_POST['Lieu']);

    $Annee =mysqli_real_escape_string($con,$_POST['Annee']);

$Abstract =mysqli_real_escape_string($con,$_POST['Abstract']);


    // $type= $_FILES['file']['name'];
//$name = $_FILES['file']['type'];
//$data = file_get_contents($_FILES['file']['tmp_name']);

$insert = "INSERT INTO these (Titre,nomauteur,Opt,DirecteurThese,Lieu,Annee,Abstract)VALUES(?,?,?,?,?,?,?)"; 

$stmt=mysqli_stmt_init($con);


if(!mysqli_stmt_prepare($stmt,$insert)){


	echo "sql error";

}

else{

	mysqli_stmt_bind_param($stmt,"sssssss",$Titre,$nomauteur, $Opt, $DirecteurThese,$Lieu, $Annee,$Abstract);
	mysqli_stmt_execute($stmt);
	


	
echo "string";
}

}	 
//"insert into these(NometPrenomdelauteur,NometPrenomdedirecteur,AdresseEmail,Université,Diplome,ladate,nom,type,theseàpublier)values('',?,?,?,?,?,?,?,?)") or die("query error");












?>