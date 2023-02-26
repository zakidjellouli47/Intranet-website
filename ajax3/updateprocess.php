<?php

include_once('config.php');
$user_fun = new Userfunction();

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
	if(isset($_GET['checkid']) && $_GET['checkid'] > 0){

		$update_ch_id = $user_fun->htmlvalidation($_GET['checkid']);

		$condition0['id'] = $update_ch_id;
		$select_pre = $user_fun->select_assoc("adherent", $condition0);

		if($select_pre){

			$json['status'] = 0;
			$json['id_service'] = $select_pre['id_service'];
			$json['nom'] = $select_pre['nom'];
			$json['prenom'] = $select_pre['prenom'];
			$json['date_naissance'] = $select_pre['date_naissance'];
			$json['mail'] = $select_pre['mail'];
			$json['specialite'] = $select_pre['specialite'];
			$json['msg'] = "Success";

		}
		else{

			$json['status'] = 1;
			$json['id_service'] = "NULL";
			$json['nom'] = "NULL";
			$json['prenom'] = "NULL";
			$json['date_naissance'] = "NULL";
			$json['mail'] = "NULL";
			$json['specialite'] = "NULL";
			$json['msg'] = "Fail";

		}

	}
	else{
			$json['status'] = 2;
			$json['id_service'] = "NULL";
			$json['nom'] = "NULL";
			$json['prenom'] = "NULL";
			$json['date_naissance'] = "NULL";
			$json['mail'] = "NULL";
			$json['specialite'] = "NULL";
			$json['msg'] = "Invalid Values Passed";
	}
}
else{
			$json['status'] = 3;
			$json['id_service'] = "NULL";
			$json['nom'] = "NULL";
			$json['prenom'] = "NULL";
			$json['date_naissance'] = "NULL";
			$json['mail'] = "NULL";
			$json['specialite'] = "NULL";
			$json['msg'] = "Invalid Method Found";
}


echo json_encode($json);

?>