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
			$json['date_adhesion'] = $select_pre['date_adhesion'];
			$json['date_fin_adhesion'] = $select_pre['date_fin_adhesion'];
			$json['date_payement'] = $select_pre['date_payement'];
			$json['tel'] = $select_pre['tel'];
			$json['adresse'] = $select_pre['adresse'];
			$json['cotisation_annuaire'] = $select_pre['cotisation_annuaire'];
			$json['msg'] = "Success";

		}
		else{

			$json['status'] = 1;
			$json['date_adhesion'] = "NULL";
			$json['date_fin_adhesion'] = "NULL";
			$json['date_payement'] = "NULL";
			$json['tel'] = "NULL";
			$json['adresse'] = "NULL";
			$json['cotisation_annuaire'] = "NULL";
			$json['msg'] = "Fail";

		}

	}
	else{
			$json['status'] = 2;
			$json['date_adhesion'] = "NULL";
			$json['date_fin_adhesion'] = "NULL";
			$json['date_payement'] = "NULL";
			$json['tel'] = "NULL";
			$json['adresse'] = "NULL";
			$json['cotisation_annuaire'] = "NULL";
			$json['msg'] = "Invalid Values Passed";
	}
}
else{
			$json['status'] = 3;
			$json['date_adhesion'] = "NULL";
			$json['date_fin_adhesion'] = "NULL";
			$json['date_payement'] = "NULL";
			$json['tel'] = "NULL";
			$json['adresse'] = "NULL";
			$json['cotisation_annuaire'] = "NULL";
			$json['msg'] = "Invalid Method Found";
}


echo json_encode($json);

?>