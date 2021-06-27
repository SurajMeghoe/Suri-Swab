<?php
include "../../db/connection.php";
session_start();
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$role = test_input($_POST['role']);

	if (empty($username)) {
		header("Location: ../../index.php?error=User Name is Required");
	}else if (empty($password)) {
		header("Location: ../../index.php?error=Password is Required");
	}else {

		// Hashing the password
		//$password = md5($password);
        
        $sql = "SELECT * FROM gebruikers LEFT JOIN district ON gebruikers.id_district = district.id_district WHERE usernaam='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password && $row['role'] == $role) {
				if ($row['role'] == "admin"){

        		
        		$_SESSION['id'] = $row['id_gebruiker'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['usernaam'] = $row['usernaam'];
				$_SESSION['district'] = $row['id_district'];
				$_SESSION['districtn'] = $row['districtnaam'];

        		header("Location: ../../admin/view/dashboard.php");
				}
				else if ($row['role'] == "assistent")
				{
				
        		$_SESSION['id'] = $row['id_gebruiker'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['usernaam'] = $row['usernaam'];
				$_SESSION['district'] = $row['id_district'];
				$_SESSION['districtn'] = $row['districtnaam'];
                 header("Location: ../../assistent/view/dashboard.php");
				}
				else if ($row['role'] == "laborant")
				{
				
        		$_SESSION['id'] = $row['id_gebruiker'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['usernaam'] = $row['usernaam'];
				$_SESSION['district'] = $row['id_district'];
				$_SESSION['districtn'] = $row['districtnaam'];
                    header("Location: ../../laborant/view/dashboard.php");
				}
				else
				{
					header("Location: ../../index.php?error=10Incorect User name or password");
				}
        	}else {
        		header("Location: ../../index.php?error=1Incorect User name or password");
        	}
        }else {
        	header("Location: ../../index.php?error=2Incorect User name or password");
        }

	}
	
}else {
	header("Location: ../../index.php");
}