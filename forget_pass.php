<?php include('cnx-db.php');
session_start();
$message = $link = '';
if(isset($_POST['submit'])) {
	$email = $_POST['code_rec'];
	$query = "SELECT * FROM comptes WHERE code_rec = '".$email."'";
	$result = $conn->query($query);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		$id = $row['id'];
		$id_encode = base64_encode($id);
		$link = "<a href='Reset_pass.php?MnoQtyPXZORTE=$id_encode' class='btn btn-info btn-sm'>Modifier le mot de passe</a>";

	}
	}else{
		$message = "<div class='alert alert-danger'> code de récupération non valide!</div>";
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
<body  class="bg-secondary">
	                	<!--Fonctionnalité Mot de Passe Oublié -->

		<div class="container w-50 mt-5">
			<form class="bg-light p-5 shadow-lg" method="post">
				<?php echo $message; ?>
				<h1 class="text-success">Mot de Passe Oublié</h1>
				                	<!--Fonction choix de film favori -->

				<label for="question generale">Quel est votre film favori ?</label>
               

				</br>
				<input type="text" name="code_rec" placeholder="votre film favori" class="form-control form-control-sm" required><br>
								                	<!--Fonction choix envoyé -->

				<button type="submit" name="submit" class="btn btn-success btn-sm">Envoyé</button>
								                	<!--Fonction choix retour -->

				<a href='admin.php' class='btn btn-success btn-sm'>Retour</a>

				<?php echo $link; ?>
			</form>
		</div>
</body>
</html>
