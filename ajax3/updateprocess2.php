<?php

include_once('config.php');
$user_fun = new Userfunction();

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_naissance']) && isset($_POST['mail']) && isset($_POST['id_service']) && isset($_POST['specialite'])  && isset($_POST['dataval'])){


        $id_service  =  $user_fun->htmlvalidation($_POST['id_service']);
		$nom = $user_fun->htmlvalidation($_POST['nom']);
		$prenom = $user_fun->htmlvalidation($_POST['prenom']);
		$date_naissance = $user_fun->htmlvalidation($_POST['date_naissance']);
		$mail = $user_fun->htmlvalidation($_POST['mail']);
		$specialite = $user_fun->htmlvalidation($_POST['specialite']);
		$update_id = $user_fun->htmlvalidation($_POST['dataval']);

		if((!preg_match('/^[ ]*$/', $nom)) && (!preg_match('/^[ ]*$/', $prenom))  && ($date_naissance!= NULL)  && (!preg_match('/^[ ]*$/', $mail)) && (!preg_match('/^[ ]*$/', $id_service)) && (!preg_match('/^[ ]*$/', $specialite)) ){

			$condition['id'] = $update_id;


            $field_val['id_service'] = $id_service;
			$field_val['nom'] = $nom;
			$field_val['prenom'] = $prenom;
			$field_val['date_naissance'] = $date_naissance;
			$field_val['mail'] = $mail;
			$field_val['specialite'] = $specialite;
				

			$update = $user_fun->update("adherent", $field_val, $condition);

			if($update){
				$json['status'] = 101;
				$json['msg'] = "Data Successfully Updated";
			}
			else{
				$json['status'] = 102;
				$json['msg'] = "Data Not Updated";
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
			if(preg_match('/^[ ]*$/', $mail)){

				$json['status'] = 105;
				$json['msg'] = "Please Select Country";

			}
			
			if($date_naissance == NULL){

				$json['status'] = 107;
				$json['msg'] = "Please Enter BOD";

			}



			if(preg_match('/^[ ]*$/', $id_service)){

				$json['status'] = 111;
				$json['msg'] = "Please Select Country";

			}


			if(preg_match('/^[ ]*$/', $specialite)){

				$json['status'] = 110;
				$json['msg'] = "Please Select Country";

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