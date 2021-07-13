<?php
include "../../db/connection.php";
session_start();

if(isset($_POST['edituser']))
{
  $id=$_GET['id'];
  $naam     = $_POST['naam'];
  $voornaam = $_POST['voornaam'];
  $gdatum          = $_POST['gdatum'];
  $usernaam          = $_POST['username'];
  $password       = $_POST['password'];
  $role          = $_POST['rol'];
  $district          = $_POST['district'];
//   $sesdistrict     = $_SESSION['district'];
//   $sesid           = $_SESSION['id'];

       
                $query = "UPDATE gebruikers SET Unaam='$naam',Uvoornaam='$voornaam',role='$role',usernaam='$usernaam ',password='$password',geboortedatum='$gdatum',id_district='$district' WHERE id_gebruiker = '$id'";
                    $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                           echo '<script type = "text/javascript">';
                           echo 'alert("user update succesvol");';
                           echo 'window.location.href = "../view/admin.php" ';
                           echo '</script>';
                        }
                        else
                        {
                           echo '<script type = "text/javascript">';
                           echo 'alert("Vul alles in!");';
                           echo 'window.location.href = "../view/admin.php" ';
                           echo '</script>';
                        }

                    }
        
    else
{
     header("Location: ../view/admin.php?error= 1niet succesvol");
}


