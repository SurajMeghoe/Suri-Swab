<?php
include "../../db/connection.php";
session_start();

if(isset($_POST['insertdata']))
{
  $triagenummer    = $_POST['triagenummer'];
  $resultaat = $_POST['resultaat'];
  $telefoon   = $_POST['telefoon'];
  $ziek      = $_POST['ziek '];
  $transport     = $_POST['transport'];
  $omscrhrijving           = $_POST['omscrhrijving'];
 

        $check=mysqli_query($conn, "SELECT * from resultaat where  triagenummer='$triagenummer '");
        $checkrows=mysqli_num_rows($check);

        if($checkrows>0)
        {
                           echo '<script type = "text/javascript">';
                           echo 'alert("Patient heeft al een uitslag");';
                           echo 'window.location.href = "../view/patient.php" ';
                           echo '</script>';
        }
        else
        {
                $query = "INSERT INTO patient (`id_gebruikers`,`id_district`,`naam`,`voornaam`,`nationaliteit`,`id_nummer`,`geslacht`,`adres`,`geboortedatum`,`datum`,`beroep`,`huisarts`) 
                            VALUES ('$sesid','$sesdistrict','$patientnaam','$patientvoornaam','$nationaliteit','$idnummer','$rolepatient','$adres','$gdatum','$odatum','$beroep','$huisarts')";
                    $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                           echo '<script type = "text/javascript">';
                           echo 'alert("patient registratie succesvol");';
                           echo 'window.location.href = "../view/patient.php" ';
                           echo '</script>';
                        }
                        else
                        {
                             header("Location: ../view/patient.php?error= 2niet succesvol");
                        }

                    }
          }

        
    else
{
     header("Location: ../view/patient.php?error= 1niet succesvol");
}


