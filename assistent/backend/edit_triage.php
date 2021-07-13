<?php
include "../../db/connection.php";
session_start();

if(isset($_POST['edit']))
{
        $id=$_GET['id'];
        
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

        $query = "UPDATE triage SET datum_traige='$datumtriage',ziekten='$cziekten',contact_naam='$contact_naam',contact_datum='$cdatum',contact_omschrijving='$comscrhrijving',contact='$cmomscrhrijving',bewezen='$hpcovid',contact_ziek='$c14',roken='$roken',hoesten='$hoesten',kortademig='$kortademigheid',keelpijn='$keelpijn',koorts='$koorts',rillingen='$rillingen',hoofdpijn='$hoofdpijn',spierpijn='$spierpijn',misselijkheid='$misselijkheid',diarree='$diarree',Vsmaak='$smaak',Vreuk='$reuk',Asymp='$symptomen',omschrijving='$ccomscrhrijving',Zindruk='$ziek',Momschrijving='$oomscrhrijving',swab='$swab',dhoesten='$dhoesten',dkortademigheid='$dkortademigheid',dkeelpijn='$dkeelpijn',dkoorts='$dkoorts',drillingen='$drillingen',dhoofdpijn='$dhoofdpijn',dspierpijn='$dspierpijn',dmisselijkheid='$dmisselijkheid',ddiarree='$ddiarree',dsmaak='$dsmaak',dreuk='$dreuk',dsymptomen='$dsymptoom' WHERE triagenummer = '$id'";

      $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                           echo '<script type = "text/javascript">';
                           echo 'alert("Triage update succesvol");';
                           echo 'window.location.href = "../view/triage.php" ';
                           echo '</script>';
                        }
                        else
                        {
                           echo '<script type = "text/javascript">';
                           echo 'alert("Vul alles in!");';
                           echo 'window.location.href = "../view/triage.php" ';
                           echo '</script>';
                        }

                    }
        
    else
{
     header("Location: ../view/triage.php?error= 1niet succesvol");
}