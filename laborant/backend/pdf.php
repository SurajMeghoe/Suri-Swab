<?php
include '../../db/connection.php';
include_once '../../vendor/setasign/fpdf/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(200,20,"Resultaat","0","1","C");

$id=$_GET['id'];
$query = "SELECT * FROM `resultaat` LEFT JOIN patient ON patient.id_patient = resultaat.id_patient LEFT JOIN gebruikers ON gebruikers.id_gebruiker = resultaat.id_gebruikers WHERE swabnummer=$id ";

$result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) 
        {

$datum = $row['datum'];           
$naam = $row['naam'];
$voornaam = $row['voornaam'];
$nationaliteit = $row['nationaliteit'];
$id_nummer = $row['id_nummer'];
$geslacht = $row['geslacht'];
$adres = $row['adres'];
$geboortedatum = $row['geboortedatum'];
$beroep = $row['beroep'];
$huisarts = $row['huisarts'];

$resultaat = $row['uitslag'];

$overleg = $row['overleg'];
$ziek = $row['ziek'];
$omschrijving = $row['omschrijving'];
$transport = $row['transport'];

$Unaam = $row['Unaam'];
$Uvoornaam = $row['Uvoornaam'];

$pdf->setLeftMargin(30);
$pdf->setTextColor(0,0,0);
$pdf->SetFont("Arial","B",12);

$pdf->Cell(20,10,"Swabnummer:","0","0","");
$pdf->Cell(20,10,$row['swabnummer'],"0","0","R");
$pdf->Ln(8);
$pdf->MultiCell(160,6,"Datum Onderzoek:$datum 
Naam:                     $naam          
Voornaam:             $voornaam
Nationaliteit:          $nationaliteit
ID/paspoort num:  $id_nummer
Geslacht:                $geslacht
Adres:                     $adres
Geboortedatum:    $geboortedatum
Beroep:                   $beroep
Huisarts:                 $huisarts
","LRTB","L",false);
$pdf->Ln(0);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(160,20,"Uitstag Swab:   $resultaat","1","0","");
$pdf->Ln(20);
$pdf->MultiCell(160,6,"Telefonisch overleg patient:$overleg
Patient voelt zicht ziek:        $ziek
Besluit transport:                  $transport 
Opmerking:                            $omschrijving
","LRTB","L",false);
$pdf->Ln(0);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(160,20,"Naam Onderzoeker:   $Unaam $Uvoornaam","1","0","");
            
            }
    }
        else
        {
            echo "error";
        }
date_default_timezone_set('America/Argentina/Buenos_Aires'); 
                    $date = date('Y-m-d h-i-sa');

$filename = 'Resultaat_'.$naam.'_'. $voornaam."_".$date.'.pdf';
$path = "../../download/resultaat/$filename";

$pdf->Output($path,'F');
                           
                           echo '<script type = "text/javascript">';
                           echo 'alert("download succesvol");';
                           echo 'window.location.href = "../view/resultaat.php" ';
                           echo '</script>';

?>