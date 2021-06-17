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

       
                $query = "INSERT INTO patient (`id_gebruikers`,`id_district`,`naam`,`voornaam`,`nationaliteit`,`id_nummer`,`geslacht`,`adres`,`geboortedatum`,`datum`,`beroep`,`huisarts`) 
                            VALUES ('$sesid','$sesdistrict','$patientnaam','$patientvoornaam','$nationaliteit','$idnummer','$rolepatient','$adres','$gdatum','$odatum','$beroep','$huisarts')";
                    $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                            header("Location: ../view/patient.php?error=succesvol");
                        }
                        else
                        {
                             header("Location: ../view/patient.php?error= niet succesvol");
                        }

                    }
        
    else
{
     header("Location: ../view/patient.php?error= niet succesvol");
}


