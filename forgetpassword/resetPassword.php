<?php
	require_once "functions.php";

	if (isset($_GET['email']) && isset($_GET['token'])) {
		$conn = new mysqli('localhost', 'root', 'zakidjellouli', 'userd');

		$email = $conn->real_escape_string($_GET['email']);
		$token = $conn->real_escape_string($_GET['token']);

		$sql = $conn->query("SELECT id FROM user WHERE
			email='$email' AND token='$token' AND token<>'' AND tokenExpire > NOW()
		");

		if ($sql->num_rows > 0) {
			$newPassword = generateNewString();
			$newPasswordEncrypted = password_hash($newPassword, PASSWORD_BCRYPT);
			$conn->query("UPDATE user SET token='', password = '$newPasswordEncrypted'
				WHERE email='$email'
			");

			echo "Your New Password Is $newPassword<br><a href='../admin.php'>Click Here To Log In</a>";
		} else
			redirectToLoginPage();
	} else {
		redirectToLoginPage();
	}
?>
