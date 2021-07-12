<?php
include "../../db/connection.php";
session_start();

if(isset($_POST['btn-add']))
{
     
  $patientnummer = $_POST['patientnummer'];
        $sesid           = $_SESSION['id'];
        $datumtriage = $_POST['datumtriage'];
        $cziekten = $_POST['cziekten'];
        $contact_naam = $_POST['contact_naam'];
        $cdatum = $_POST['cdatum'];
        $comscrhrijving = $_POST['comscrhrijving'];
        $cmomscrhrijving = $_POST['cmomscrhrijving'];
        $hpcovid = $_POST['hpcovid'];
        $c14 = $_POST['c14'];
        $roken = $_POST['roken'];

        $hoesten = $_POST['hoesten'];
        $kortademigheid = $_POST['kortademigheid'];
        $keelpijn = $_POST['keelpijn'];
        $koorts= $_POST['koorts'];
        $rillingen = $_POST['rillingen'];
        $hoofdpijn = $_POST['hoofdpijn'];
        $spierpijn = $_POST['spierpijn'];
        $misselijkheid = $_POST['misselijkheid'];
        $diarree = $_POST['diarree'];
        $smaak = $_POST['smaak'];
        $reuk = $_POST['reuk'];
        $symptomen = $_POST['symptomen'];

        $ccomscrhrijving = $_POST['ccomscrhrijving'];
        $ziek = $_POST['ziek'];
        $oomscrhrijving = $_POST['oomscrhrijving'];
        $swab = $_POST['swab'];

        $dhoesten = $_POST['dhoesten'];
        $dkortademigheid= $_POST['dkortademigheid'];
        $dkeelpijn = $_POST['dkeelpijn'];
        $dkoorts = $_POST['dkoorts'];
        $drillingen= $_POST['drillingen'];
        $dhoofdpijn = $_POST['dhoofdpijn'];
        $dspierpijn = $_POST['dspierpijn'];
        $dmisselijkheid = $_POST['dmisselijkheid'];
        $ddiarree = $_POST['ddiarree'];
        $dsmaak = $_POST['dsmaak'];
        $dreuk = $_POST['dreuk'];
        $dsymptoom = $_POST['dsymptoom'];
        $sesdistrict     = $_SESSION['district'];

        $check=mysqli_query($conn, "SELECT * from triage where id_patient='$patientnummer'");
        $checkrows=mysqli_num_rows($check);

        if($checkrows>0)
        {
                           echo '<script type = "text/javascript">';
                           echo 'alert("triage lijst van deze patient bestaat al");';
                           echo 'window.location.href = "../view/triage.php" ';
                           echo '</script>';
        }
        
        else
        {
                $query = "INSERT INTO `triage`(`id_patient`, `id_gebruikers`, `datum_traige`, `ziekten`, `contact_naam`, `contact_datum`, `contact_omschrijving`, `contact`, `bewezen`,`contact_ziek`, `roken`, `hoesten`, `kortademig`, `keelpijn`, `koorts`, `rillingen`, `hoofdpijn`, `spierpijn`, `misselijkheid`, `diarree`, `Vsmaak`, `Vreuk`, `Asymp`, `omschrijving`, `Zindruk`, `Momschrijving`, `swab`, `dhoesten`, `dkortademigheid`, `dkeelpijn`, `dkoorts`, `drillingen`, `dhoofdpijn`, `dspierpijn`, `dmisselijkheid`, `ddiarree`, `dsmaak`, `dreuk`, `dsymptomen`)
                            VALUES ('$patientnummer','$sesid','$datumtriage','$cziekten','$contact_naam','$cdatum',' $comscrhrijving',' $cmomscrhrijving','$hpcovid','$c14','$roken','$hoesten','$kortademigheid','$keelpijn','$koorts','$rillingen','$hoofdpijn','$spierpijn','$misselijkheid','$diarree','$smaak','$reuk','$symptomen','$ccomscrhrijving','$ziek','$oomscrhrijving','$swab','$dhoesten','$dkortademigheid','$dkeelpijn','$dkoorts','$drillingen','$dhoofdpijn','$dspierpijn','$dmisselijkheid ','$ddiarree','$dsmaak','$dreuk','$dsymptoom')";
                    $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                           echo '<script type = "text/javascript">';
                           echo 'alert("patient registratie succesvol");';
                           echo 'window.location.href = "../view/triage.php" ';
                           echo '</script>';
                        }
                        else
                        {
                           echo '<script type = "text/javascript">';
                           echo 'alert("patient nummer komt niet voor");';
                           echo 'window.location.href = "../view/triage.php" ';
                           echo '</script>';
                        }

                        


                    }
               }
        
    else
{
     header("Location: ../view/triage.php?error= 1niet succesvol");
}