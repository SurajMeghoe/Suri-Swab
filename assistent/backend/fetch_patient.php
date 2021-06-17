<?php
include "../../db/connection.php";
session_start();

if(isset($_POST["id_patient"]))
{
    $id_patient = $_POST["id_patient"];
    $query = "SELECT * FROM patient WHERE id_patient = '$id_patient'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
}

?>