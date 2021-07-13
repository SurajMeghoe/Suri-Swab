<?php
include "../../db/connection.php";
session_start();

if(isset($_POST['edit']))
{
  $id=$_GET['id'];
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
//   $sesdistrict     = $_SESSION['district'];
//   $sesid           = $_SESSION['id'];

       
                $query = "UPDATE patient SET naam='$patientnaam',voornaam='$patientvoornaam',nationaliteit='$nationaliteit ',id_nummer='$idnummer',geslacht='$rolepatient',adres='$adres',geboortedatum='$gdatum',datum='$odatum',beroep='$beroep',huisarts='$huisarts' WHERE id_patient = '$id'";
                    $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                           echo '<script type = "text/javascript">';
                           echo 'alert("patient update succesvol");';
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
        
    else
{
     header("Location: ../view/patient.php?error= 1niet succesvol");
}


