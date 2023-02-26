<?php

include_once('config.php');
$user_fun = new Userfunction();

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(isset($_POST['date_adhesion']) && isset($_POST['date_fin_adhesion']) && isset($_POST['date_payement']) && isset($_POST['adresse']) && isset($_POST['tel']) && isset($_POST['cotisation_annuaire'])  && isset($_POST['dataval'])){


        
		$date_adhesion = $user_fun->htmlvalidation($_POST['date_adhesion']);
		$date_fin_adhesion = $user_fun->htmlvalidation($_POST['date_fin_adhesion']);
		$date_payement = $user_fun->htmlvalidation($_POST['date_payement']);
		$adresse = $user_fun->htmlvalidation($_POST['adresse']);
		$tel = $user_fun->htmlvalidation($_POST['tel']);
		$cotisation_annuaire  =  $user_fun->htmlvalidation($_POST['cotisation_annuaire']);
		$update_id = $user_fun->htmlvalidation($_POST['dataval']);

		if(($date_adhesion!= NULL) && ($date_fin_adhesion!= NULL)  && ($date_payement!= NULL)  && (!preg_match('/^[ ]*$/', $adresse)) && (!preg_match('/^[ ]*$/', $tel)) && (!preg_match('/^[ ]*$/', $cotisation_annuaire)) ){

			$condition['id'] = $update_id;


            $field_val['date_adhesion'] = $date_adhesion;
			$field_val['date_fin_adhesion'] = $date_fin_adhesion;
			$field_val['date_payement'] = $date_payement;
			$field_val['adresse'] = $adresse;
			$field_val['tel'] = $tel;
			$field_val['cotisation_annuaire'] = $cotisation_annuaire;
				

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

			

			if($date_adhesion == NULL){

				$json['status'] = 105;
				$json['msg'] = "Please Enter BOD";

			}

			if($date_fin_adhesion == NULL){

				$json['status'] = 106;
				$json['msg'] = "Please Enter BOD";

			}

			if($date_payement == NULL){

				$json['status'] = 107;
				$json['msg'] = "Please Enter BOD";

			}
			
	
			if(preg_match('/^[ ]*$/', $adresse)){

				$json['status'] = 104;
				$json['msg'] = "Please Select Country";

			}


			if(preg_match('/^[ ]*$/', $tel)){

				$json['status'] = 103;
				$json['msg'] = "Please Select Country";

			}

			if(preg_match('/^[ ]*$/', $cotisation_annuaire)){

				$json['status'] = 109;
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