<?php
session_start();
include 'sendcode.php';
/*Fonctionnalité d'authentification*/

if (isset($_POST['Login'])) 
{   
	      /*Nom d'utilisateur*/

	$username =  $_POST['nom_utilisateur'];
	      /*Mot de Passe*/

	$password	= $_POST['mot_de_passe'];

	$query = mysqli_query($con, "SELECT * FROM comptes WHERE nom_utilisateur='$username' AND mot_de_passe='$password' ");



  	      /*si l'utilisateur n'itroduit pas ses informations*/


if(empty($_POST['nom_utilisateur'])  &&  empty($_POST['mot_de_passe'])){
    
header("Location: ./admin.php?Connexion=empty");



 exit();
    	}
           
	
                	      /*si l'utilisateur n'itroduit pas ses informations*/

	if(empty($_POST['nom_utilisateur'])  &&  !empty($_POST['mot_de_passe'])){




header("Location: ./admin.php?Connexion=usernameempty");

exit();

}


if(!empty($_POST['nom_utilisateur'])  &&  empty($_POST['mot_de_passe'])){




header("Location: ./admin.php?Connexion=passwordempty");

 exit();


}




  	      /*si l'utilisateur est le président */

	else{
		$row = mysqli_fetch_assoc($query);
		$_SESSION['nom_utilisateur']	= $row['nom_utilisateur'];
		$_SESSION['mot_de_passe']  = $row['mot_de_passe'];
		
		if($row['role'] == "president")
		{	
			header("location:accueil2.html");      	      /*Aller à la page d'accueil président*/

		}
		   	      /*si l'utilisateur est la secrétaire */

		else
        if($row['role'] == "secretaire"){
   
   header("location:accueil.html");}        	      /*Aller à la page d'accueil secrétaire */


		
			else
 		   	      /*si l'utilisateur est le trésorier */

 if($row['role'] == "tresorier")					 

			{


header("location:accueil3.html");						/*Aller à la page d'accueil trésorier */
			}
			else

      if(!$row['role'] == "tresorier"   ||  !$row['role'] == "secretaire" ||  !$row['role'] == "president" )
			{

					 header("Location: ./admin.php?Connexion=upf");
			}



	}
}




?>