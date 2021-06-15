<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body{
        text-align: center;
    }
    </style>
</head>
<body>
<h1> admin </h1>
    <h2> <?=$_SESSION['id']?></h2>
	<h3><?php echo $_SESSION['id']; ?> </h3>
    Click here to <a href = "./../admin/backend/logout.php">Logout</a>
    
</body>
</html>