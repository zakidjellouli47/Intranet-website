<?php

include_once('config.php');
$user_fun = new Userfunction();

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_naissance']) && isset($_POST['mail'])){

		$nom = $user_fun->htmlvalidation($_POST['nom']);
		$prenom = $user_fun->htmlvalidation($_POST['prenom']);
		$date_naissance = $user_fun->htmlvalidation($_POST['date_naissance']);
		$mail = $user_fun->htmlvalidation($_POST['mail']);
		

		if((!preg_match('/^[ ]*$/', $nom)) && (!preg_match('/^[ ]*$/', $prenom)) && (!preg_match('/^[ ]*$/', $date_naissance)) && (!preg_match('/^[ ]*$/', $mail))){

			$field_val['nom'] = $nom;
			$field_val['prenom'] = $prenom;
			$field_val['date_naissance'] = $date_naissance;
			$field_val['mail'] = $mail;
				

			$insert = $user_fun->insert("adherent", $field_val);

			if($insert){
				$json['status'] = 101;
				$json['msg'] = "Data Successfully Inserted";
			}
			else{
				$json['status'] = 102;
				$json['msg'] = "Data Not Inserted";
			}

		}
		else{

			if(preg_match('/^[ ]*$/', $nom)){

				$json['status'] = 103;
				$json['msg'] = "Please Enter Username";

			}
			if(preg_match('/^[ ]*$/', $prenom)){

				$json['status'] = 104;
				$json['msg'] = "Please Enter Email";

			}
			if(preg_match('/^[ ]*$/', $date_naissance)){

				$json['status'] = 105;
				$json['msg'] = "Please Select Country";

			}
			if(preg_match('/^[ ]*$/', $mail)){

				$json['status'] = 106;
				$json['msg'] = "Please Choice Gender";

			}
			if($bod == NULL){

				$json['status'] = 107;
				$json['msg'] = "Please Enter BOD";

			}

		}

	}
	else{

		$json['status'] = 108;
		$json['msg'] = "Invalid Values Passed";

	}

}
else{

	$json['status'] = 109;
	$json['msg'] = "Invalid Method Found";

}


echo json_encode($json);

?>