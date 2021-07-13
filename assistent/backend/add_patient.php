<?php
include "../../db/connection.php";
session_start();

if(isset($_POST['insertdata']))
{
  $patientnaam     = $_POST['patientnaam'];
  $patientvoornaam = $_POST['patientvoornaam'];
  $nationaliteit   = $_POST['nationaliteit'];
  $idnummer        = $_POST['idnummer'];
  $rolepatient     = $_POST['rolepatient'];
  $adres           = $_POST['adres'];
  $gdatum          = $_POST['gdatum'];
  $beroep          = $_POST['beroep'];
  $huisarts        = $_POST['huisarts'];
  $odatum          = $_POST['odatum'];
  $sesdistrict     = $_SESSION['district'];
  $sesid           = $_SESSION['id'];

         $check=mysqli_query($conn, "SELECT * from patient where  naam='$patientnaam' AND voornaam='$patientvoornaam' ");
        $checkrows=mysqli_num_rows($check);

        if($checkrows>0)
        {
                           echo '<script type = "text/javascript">';
                           echo 'alert("Patient is al reeds geregistreerd");';
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
                           echo '<script type = "text/javascript">';
                           echo 'alert("Vul alles in!");';
                           echo 'window.location.href = "../view/patient.php" ';
                           echo '</script>';
                        }

                    }
          }

        
    else
{
     header("Location: ../view/patient.php?error= 1niet succesvol");
}


