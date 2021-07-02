<?php
include "../../db/connection.php";
session_start();

if(isset($_POST['insertdata']))
{
  $triagenummer    = $_POST['triagenummer'];
  $resultaat = $_POST['resultaat'];
  $telefoon   = $_POST['telefoon'];
  $ziek      = $_POST['ziek'];
  $transport     = $_POST['transport'];
  $datum = $_POST['datum'];
  $omscrhrijving           = $_POST['omscrhrijving'];
  $sesid           = $_SESSION['id'];
  $district = $_SESSION['district'];

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
                $query = "INSERT INTO `resultaat`(`triagenummer`, `id_patient`, `id_gebruikers`, `id_district`, `datum`, `uitslag`, `overleg`, `ziek`, `omschrijving`, `transport`) 
                         VALUES ('$triagenummer',(SELECT `id_patient` FROM triage WHERE triagenummer = $triagenummer),'$sesid','$district','$datum','$resultaat','$telefoon','$ziek','$omscrhrijving','$transport')";
                    
                    $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                           echo '<script type = "text/javascript">';
                           echo 'alert("resultaat van patient is gerigistreerd");';
                           echo 'window.location.href = "../view/resultaat.php" ';
                           echo '</script>';
                        }
                        else
                        {
                             header("Location: ../view/resultaat.php?error= 2niet succesvol");
                        }



                    }
          }

        
    else
{
     header("Location: ../view/patient.php?error= 1niet succesvol");
}


