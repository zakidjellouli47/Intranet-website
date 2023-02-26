<?php

include_once('config.php');
$user_fun = new Userfunction();

$json = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['date_naissance']) && isset($_POST['mail'])){

		$username = $user_fun->htmlvalidation($_POST['nom']);
		$email = $user_fun->htmlvalidation($_POST['prenom']);
		$country = $user_fun->htmlvalidation($_POST['date_naissance']);
		$bod = $user_fun->htmlvalidation($_POST['mail']);
	

		if((!preg_match('/^[ ]*$/', $username)) && (!preg_match('/^[ ]*$/', $email)) && (!preg_match('/^[ ]*$/', $country)) && (!preg_match('/^[ ]*$/', $gender)) && ($bod != NULL)){

			$field_val['nom'] = $username;
			$field_val['prenom'] = $email;
			$field_val['date_naissance'] = $country;
			$field_val['mail'] = $bod;
			

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

			if(preg_match('/^[ ]*$/', $username)){

				$json['status'] = 103;
				$json['msg'] = "Please Enter Username";

			}
			if(preg_match('/^[ ]*$/', $email)){

				$json['status'] = 104;
				$json['msg'] = "Please Enter Email";

			}
			if(preg_match('/^[ ]*$/', $country)){

				$json['status'] = 105;
				$json['msg'] = "Please Select Country";

			}
			if(preg_match('/^[ ]*$/', $bod)){

				$json['status'] = 106;
				$json['msg'] = "Please Choice Gender";

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