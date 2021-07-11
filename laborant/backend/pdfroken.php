<?php
session_start();
include '../../db/connection.php';
include_once '../../laborant/backend/pdf_mc_table.php';

$pdf = new PDF_MC_Table();
$pdf->AddPage();
$pdf->SetFont("Arial","",16);
$district=$_SESSION['districtn'];
$pdf->Cell(190,20,"Patienten Roken Positief $district","0","1","C");
$pdf->SetWidths(Array(20,35,35,35,35,35));

$pdf->SetLineHeight(5);

$sql="SELECT * FROM resultaat LEFT JOIN triage ON triage.triagenummer = resultaat.triagenummer LEFT JOIN patient ON patient.id_patient = resultaat.id_patient WHERE resultaat.id_gebruikers = '".$_SESSION['id']."' AND roken='ja' AND uitslag = 'positief'";


$pdf->SetFont("Arial","B",16);
$pdf->Cell(20,5,"No.",1,0);
$pdf->Cell(35,5,"Naam",1,0);
$pdf->Cell(35,5,"Voornaam",1,0);
$pdf->Cell(35,5,"Adres",1,0);
$pdf->Cell(35,5,"ID_Nummer",1,0);
$pdf->Cell(35,5,"uitslag",1,0);

$pdf->Ln();

$pdf->SetFont("Arial","",16);

foreach($conn->query($sql) as $row)
{


    $pdf->Row(Array(
            $row['swabnummer'],
            $row['naam'],
            $row['voornaam'],
            $row['adres'],
            $row['id_nummer'],
            $row['uitslag'],
            
    ));
}

date_default_timezone_set('America/Belize'); 
                    $date = date('Y-m-d h-i-sa');

$filename = 'ResultaatRoken_'."_".$date.'.pdf';
$path = "../../download/roken/$filename";

$pdf->Output($path,'F');
                           
                           echo '<script type = "text/javascript">';
                           echo 'alert("download succesvol");';
                           echo 'window.location.href = "../view/rook.php" ';
                           echo '</script>';
?>