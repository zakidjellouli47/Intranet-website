<?php
session_start();
include 'sendcode.php';

if (isset($_POST['Login'])) 
{
	$username =  $_POST['nom_utilisateur'];
	$password	= $_POST['mot_de_passe'];

	$query = mysqli_query($con, "SELECT * FROM comptes WHERE nom_utilisateur='$username' AND mot_de_passe='$password' ");





if(empty($_POST['nom_utilisateur'])  &&  empty($_POST['mot_de_passe'])){
    
header("Location: ./adminstrateur.php?Connexion=empty");

  // echo "<script>alert('username  and password are blank') ;   </script>";


 exit();
    	}
           
	//if (mysqli_num_rows($query) == 0) 
	//{
	//	echo "<script>alert('Username and password empty!!!');document.location.href='adminstrateur.php'</script>/n";
	//	exit();
	//}

	if(empty($_POST['nom_utilisateur'])  &&  !empty($_POST['mot_de_passe'])){




header("Location: ./adminstrateur.php?Connexion=usernameempty");

exit();

}


if(!empty($_POST['nom_utilisateur'])  &&  empty($_POST['mot_de_passe'])){




header("Location: ./adminstrateur.php?Connexion=passwordempty");

 exit();


}





	else{
		$row = mysqli_fetch_assoc($query);
		$_SESSION['nom_utilisateur']	= $row['nom_utilisateur'];
		$_SESSION['mot_de_passe']  = $row['mot_de_passe'];
		
		if($row['role'] == "president")
		{	
			header("location:accueil2.html");
		}
		else{

			 header("Location: ./adminstrateur.php?Connexion=upf");
	}
}


}

?>