<?php 
session_start();
include '../../db/connection.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
	
	$usernaam = $_POST['username'];
	$password = $_POST['password'];

	if (empty($usernaam)) {
		header("Location: ../../index.php?error=username is required");
	}else if (empty($password)){
		header("Location: ../../index.php?error=Password is required&email=$usernaam");
	}else {
		$stmt = $conn->prepare("SELECT * FROM gebruikers LEFT JOIN district ON gebruikers.id_district = district.id_district WHERE usernaam=?");
		$stmt->execute([$usernaam]);

		if ($stmt->rowCount() === 1) {
			$user = $stmt->fetch();

			$user_id = $user['id_gebruiker'];
            $user_iddistrict = $user['id_district'];
			$user_naam = $user['usernaam'];
			$user_password = $user['password'];
			

			if ($usernaam === $user_naam) {
				if (password_verify($password, $user_password)) {
					$_SESSION['user_id'] = $user_id;
					$_SESSION['user_usernaam'] = $user_naam;
					$_SESSION['user_iddistrict'] = $user_district;

					header("Location: ../../login.php");

				}else {
					header("Location: ../../index.php?error=Incorect User name or password&email=$usernaam");
				}
			}else {
				header("Location: ../../index.php?error=Incorect User name or password&email=$usernaam");
			}
		}else {
			header("Location: ../../index.php?error=Incorect User name or password&email=$usernaam");
		}
	}
}
