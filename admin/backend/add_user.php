<?php
include "../../db/connection.php";
session_start();

if(isset($_POST['insertuser']))
{
  $naam     = $_POST['naam'];
  $voornaam = $_POST['voornaam'];
  $gdatum   = $_POST['gdatum'];
  $district        = $_POST['district'];
  $username     = $_POST['username'];
  $password           = $_POST['password'];
  $rol         = $_POST['rol'];
 

         $check=mysqli_query($conn, "SELECT * from gebruikers where usernaam='$username' AND password='$password' OR usernaam = '$username'");
        $checkrows=mysqli_num_rows($check);

        if($checkrows>0)
        {
                           echo '<script type = "text/javascript">';
                           echo 'alert(" User bestaat al");';
                           echo 'window.location.href = "../view/admin.php" ';
                           echo '</script>';
        }
        else
        {
                $query = "INSERT INTO gebruikers (`role`, `usernaam`, `password`, `id_district`, `Unaam`, `Uvoornaam`, `geboortedatum`) 
                            VALUES ('$rol ','$username','$password','$district','$naam','$voornaam','$gdatum')";
                    $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                           echo '<script type = "text/javascript">';
                           echo 'alert("user registratie succesvol");';
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
          }

        
    else
{
     header("Location: ../view/admin.php?error= niet succesvol");
}


