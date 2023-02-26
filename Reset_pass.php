<?php include('cnx-db.php');
session_start();
$id = $_GET['MnoQtyPXZORTE'];
$message = $Home = '';
$_SESSION['user'] = $id;
if ($_SESSION['user'] == '') {
		header("location:forget_pass.php");
}
else
{
if(isset($_POST['submit'])) {
	$password = $_POST['mot_de_passe'];
	$Repassword = $_POST['Repassword'];

	if ($password !== $Repassword) {
		$message = "<div class='alert alert-danger'>Le mot de passe ne correspond pas!</div>";
	}
	else{
	$id_decode = base64_decode($id);
	$query = "UPDATE comptes SET mot_de_passe = '$password' WHERE id = '$id_decode' ";
	$result = $conn->query($query);
		if($result){
			$message = "<div class='alert alert-success'>Votre mot de passe a bien été réinitialisé.</div>";
			$Home = "<a href='admin.php' class='btn btn-success btn-sm'>Connexion</a>";
	}else{
		$message = "<div class='alert alert-danger'>Échec de la réinitialisatin du mot de passe..!!</div>";
	}
	}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>forget Password</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-secondary">
		<div class="container w-50 mt-5">
			<form class="bg-light p-5 shadow-lg" method="post">
				<?php echo $message; ?>
				<h1 class="text-success">Mot De Passe Oublié</h1>
				<label for="Mot De Passe">Mot De Passe</label>
				<input type="password" name="mot_de_passe" placeholder="Mot De Passe" class="form-control form-control-sm" required><br>
				<label for="password">Retaper Le Mot de Passe</label>
				<input type="password" name="Repassword" placeholder="Retaper Le Mot de Passe" class="form-control form-control-sm" required><br>
				<button type="submit" name="submit" class="btn btn-success btn-sm">réinitialiser le mot de passe</button> <?php echo $Home; ?>
			</form>
		</div>
</body>
</html>
