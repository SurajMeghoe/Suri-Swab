<?php
include "../../db/connection.php";
session_start();

if(isset($_POST['resultaat']))
{
        $id=$_GET['id'];
        $uitslag = $_POST['uitslag'];
        $telefoon = $_POST['telefoon'];
        $ziek = $_POST['ziek'];
        $transport = $_POST['transport'];
        $datum = $_POST['datum'];
        $omscrhrijving = $_POST['omscrhrijving'];
        
        

        $query = "UPDATE resultaat SET datum_resultaat='$datum',uitslag='$uitslag',overleg='$telefoon',ziek='$ziek',omschrijving='$omscrhrijving',transport='$transport' WHERE swabnummer = '$id'";

      $query_run = mysqli_query($conn, $query);

                        if($query_run)
                        {
                           echo '<script type = "text/javascript">';
                           echo 'alert("resultaat update succesvol");';
                           echo 'window.location.href = "../view/resultaat.php" ';
                           echo '</script>';
                        }
                        else
                        {
                             header("Location: ../view/resultaat.php?error= 2niet succesvol");
                        }

                    }
        
    else
{
     header("Location: ../view/resultaat.php?error= 1niet succesvol");
}