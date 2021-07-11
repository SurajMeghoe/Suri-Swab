<?php
include '../../db/connection.php';
include_once '../../vendor/setasign/fpdf/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(200,20,"Triage","0","1","C");
//tabel

$id=$_GET['id'];
$query = "SELECT * FROM `triage` LEFT JOIN patient ON triage.id_patient = patient.id_patient LEFT JOIN gebruikers ON triage.id_gebruikers = gebruikers.id_gebruiker WHERE triagenummer=$id";

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

$ziekten = $row['ziekten'];
$contact_ziek = $row['contact_ziek'];
$bewezen= $row['bewezen'];
$roken= $row['roken'];

$hoesten= $row['hoesten'];
$kortademigheid = $row['kortademig'];
$keelpijn = $row['keelpijn'];
$koorts= $row['koorts'];
$rillingen = $row['rillingen'];
$hoofdpijn = $row['hoofdpijn'];
$spierpijn = $row['spierpijn'];
$misselijkheid = $row['misselijkheid'];
$diarree = $row['diarree'];
$Vsmaak = $row['Vsmaak'];
$Vreuk = $row['Vreuk'];
$Asymp= $row['Asymp'];

$dhoesten= $row['dhoesten'];
$dkortademigheid = $row['dkortademigheid'];
$dkeelpijn = $row['dkeelpijn'];
$dkoorts= $row['dkoorts'];
$drillingen = $row['drillingen'];
$dhoofdpijn = $row['dhoofdpijn'];
$dspierpijn = $row['dspierpijn'];
$dmisselijkheid = $row['dmisselijkheid'];
$ddiarree = $row['ddiarree'];
$dsmaak = $row['dsmaak'];
$dreuk = $row['dreuk'];
$dsymptomen= $row['dsymptomen'];

$omschrijving = $row['omschrijving'];
$Zindruk = $row['Zindruk'];
$Momschrijving = $row['Momschrijving'];
$swab = $row['swab'];
$gnaam = $row['Unaam'];
$uvoornaam = $row['Uvoornaam'];

$pdf->setLeftMargin(30);
$pdf->setTextColor(0,0,0);
$pdf->SetFont("Arial","B",12);

$pdf->Cell(20,10,"Triagenummer:","0","0","");
$pdf->Cell(20,10,$row['triagenummer'],"0","0","R");
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
$pdf->Ln(8);
$pdf->Cell(45,10," Contact gehad met?","1","0","");
$pdf->Cell(45,10," Datum","1","0","");
$pdf->Cell(70,10," omscrhijf contact","1","0","");
$pdf->Ln(10);
$pdf->Cell(45,10, $row['contact_naam'],"1","0","");
$pdf->Cell(45,10, $row['contact_datum'],"1","0","");
$pdf->Cell(70,10, $row['contact_omschrijving'],"1","0","");
$pdf->Ln(11);
$pdf->Cell(20,10,"Meerdere contact personen:","0","0","");
$pdf->Ln(12);
$pdf->Cell(160,15, $row['contact'],"LRTB","0","");
$pdf->Ln(14);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,10,"Chronische ziekten/onderliggende aandoening:","0","0","");
$pdf->Ln(4);
$pdf->SetFont("Arial","",12);
$pdf->Cell(88,10,"$ziekten","0","0","L");
$pdf->Ln(1);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,20,"Heeft u in de afgelopen 14 dagen contact gehad met iemand die ziek was?","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(140,20,"$contact_ziek","0","0","R");
$pdf->Ln(5);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,20,"Heeft u een huisgenoot/partner met een bewezen of verdachte COVID-19? ","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(140,20,"$bewezen","0","0","R");
$pdf->Ln(5);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,20,"Rookt u?","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(10,20,"$roken","0","0","R");
$pdf->Ln(6);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,20,"Symptomen","0","0","");
$pdf->Ln(7);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,20,"Hoesten","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(55,20,"$hoesten  $dhoesten","0","0","R");
$pdf->Ln(8);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,15,"Kortademigheid","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(55,15,"$kortademigheid  $dkortademigheid","0","0","R");
$pdf->Ln(9);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,8,"Keelpijn","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(55,8,"$keelpijn  $dkeelpijn","0","0","R");
$pdf->Ln(5);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,8,"Koorts(gevoel)","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(55,8,"$koorts  $dkoorts","0","0","R");
$pdf->Ln(5);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,8,"Koude rillingen","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(55,8,"$rillingen  $drillingen","0","0","R");
$pdf->Ln(5);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,8,"Hoofdpijn","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(55,8,"$hoofdpijn  $dhoofdpijn","0","0","R");
$pdf->Ln(5);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,8,"Spierpijn","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(55,8,"$spierpijn  $dspierpijn","0","0","R");
$pdf->Ln(5);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,8,"Misselijkheid","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(55,8,"$misselijkheid  $dmisselijkheid","0","0","R");
$pdf->Ln(5);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,8,"Diarree","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(55,8,"$diarree  $ddiarree","0","0","R");
$pdf->Ln(5);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,8,"Veranderde Smaak","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(55,8,"$Vsmaak  $dsmaak","0","0","R");
$pdf->Ln(5);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,8,"Veranderde reuk","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(55,8,"$Vreuk  $dreuk","0","0","R");
$pdf->Ln(5);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,8,"Andere symptomen","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(55,8,"$Asymp  $dsymptomen","0","0","R");
$pdf->Ln(6);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,8,"opmerkingen:","0","0","");
$pdf->Ln(6);
$pdf->SetFont("Arial","",12);
$pdf->Cell(80,21,"$omschrijving","1","0","");
$pdf->Ln(30);
$pdf->Cell(160,0,"","1","0","");
$pdf->Ln(0);
$pdf->SetFont("Arial","I",12);
$pdf->Cell(20,10,"Dit strookje is bestemd voor de onderzoeker:","0","0","");
$pdf->Ln(6);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,10,"Maakt de persoon een zieke indruk?","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(63,10,"$Zindruk","0","0","R");
$pdf->Ln(6);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(25,10,"Opmerking:","0","0","L");
$pdf->SetFont("Arial","",12);
$pdf->Ln(7);
$pdf->Cell(160,20,"$Momschrijving","1","0","");
$pdf->Ln(20);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,10,"Swab afgenomen:","0","0","");
$pdf->SetFont("Arial","",12);
$pdf->Cell(27,10,"$swab","0","0","R");
$pdf->Ln(5);
$pdf->SetFont("Arial","B",12);
$pdf->Cell(20,10,"Naam Onderzoeker:","0","0","");
$pdf->Cell(70,10,"$gnaam $uvoornaam ","0","0","C");
        }
    }
        else
        {
            echo "error";
        }

date_default_timezone_set('America/Belize'); 
                    $date = date('Y-m-d h-i-sa');

$filename = 'Triage_'.$naam.'_'. $voornaam."_".$date.'.pdf';
$path = "../../download/traige/$filename";
$pdf->Output($path,'F');
                           
                           echo '<script type = "text/javascript">';
                           echo 'alert("download succesvol");';
                           echo 'window.location.href = "../view/triage.php" ';
                           echo '</script>';
?>