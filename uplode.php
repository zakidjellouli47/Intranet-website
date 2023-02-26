<?php






$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "zakidjellouli";
    $dbname = "userd";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if(isset($_POST['btn'])){





   $f1 =$_FILES['myfile']['name'];
   $f2 =$_FILES['myfile']['tmp_name'];
   $f2 =base64_encode($f2);
   $titre= $_POST['titre'];
   $document = $_POST['document'];

    
    $Auteur = $_POST['Auteur'];
$date = $_POST['date'];
$datee = $_POST['datee'];




   move_uploaded_file($f2, "images/$f1");

   $sql = "INSERT INTO `bilans`(`titre`, `type`, `auteur`, `date_creation`, `date_publication`, `fichier`) VALUES ('$titre','$document','$Auteur','$date','$datee','$f1')";
   if($run = mysqli_query($conn,$sql)){

   	
  <div class="alert alert-success">
<p> enregistrement supprimé !!</p>
</div>

}
  
else{


	echo "fail";
}


    
}



?>