<?php
include '../../db/connection.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Suri Swab
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="../../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
  <!-- material icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!-- data tables -->
 <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
 
</head>

<body class="">
  <!-- navbar side begin -->
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg" >
       <div class="logo"><a href="" class="simple-text logo-normal">
          Suri Swab
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item   ">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./patient.php">
              <i class="material-icons">medication</i>
              <p>patient</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./triage.php" style="background-color: #29c2cc">
              <i class="material-icons">content_paste</i>
              <p>Triage </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./rook.php" >
              <i class="material-icons">smoking_rooms</i>
              <p>Rook patient</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- navbar side eind -->

    
    <div class="main-panel">
     <!-- Navbar top begin-->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Triage</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
           
            <ul class="navbar-nav">
              
             <!-- logout -->
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#"><?php echo $_SESSION['usernaam']; ?></a>
                  <a class="dropdown-item" href="#"><?php echo $_SESSION['role']; ?></a>
                  <a class="dropdown-item" href="#"><?php echo $_SESSION['districtn']; ?></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../../admin/backend/logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- navbar top eind -->

<!-- page content begin -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
                    <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert" style="background: green">
                            <?=htmlspecialchars($_GET['error'])?>
                          </div>
                    <?php } ?>
              </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary" style="background: #29c2cc">
                  <div class="row">
                    <div class="col-md-4">
                        <h4 class="card-title ">Triage Gegevens</h4>
                        <p class="card-category">Triage lijst van elk patient</p>
                        
                       </div>
                          <div class="col-md-4">
                              
                          </div>
                                         
    
    <div class="col-md-4 ">
          <span class="pull-right"><a href="#triageModal" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Triage registratie</a></span>
               
            </div>
                </div>   
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="myTable">
                      <thead class=" text-primary">
                        <th>
                          Traigenummer
                        </th>
                        <th>
                          Patient Naam
                        </th>
                        <th>
                          ID Nummer
                        </th>
                        <th>
                          Swab
                        </th>
                        <th>
                          Acties
                        </th>
                      </thead>
                      <tbody>
                      <?php
                      $sql = "SELECT * FROM triage LEFT JOIN patient ON triage.id_patient = patient.id_patient WHERE triage.id_gebruikers = '".$_SESSION['id']."'";
                      
                      $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    
                      ?>
                      <tr>
                                                <td><?php echo $row['triagenummer']; ?></td>
                                                <td><?php echo $row['naam']; ?></td>
                                                <td><?php echo $row['id_nummer']; ?></td>
                                                <td><?php echo $row['swab']; ?></td>
                                                <td>
                                                <a href="#view<?php echo $row['triagenummer']; ?>" data-toggle="modal" class="btn btn-primary material-icons">visibility</a>
                                                 <?php include('../../assistent/modal/view_triage_modal.php'); ?>
                                                <a href="#edittriage<?php echo $row['triagenummer']; ?>" data-toggle="modal" class="btn btn-warning material-icons">edit</a>
                                                <?php include('../../assistent/modal/edit_triage_modal.php'); ?>
                                                <a href="../../assistent/backend/pdf.php?id=<?php echo $row['triagenummer']; ?>"  class="btn btn-success material-icons" >file_download</a>
                                                
                                                </td>
                                                
                      </tr>
                                    <?php
                                        }
                                    } else {
                                      echo "";
                                    }
                                    ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
           <?php include('../../assistent/modal/add_triage_modal.php'); ?>


  <!-- bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

  <!--datatables bootstrap 4 -->
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

  <!-- filter scripts -->
  <!--<script src="../../assets/js/jquery-3.5.1.js"></script>-->
  <script>
  $(document).ready(function() {
    $('#myTable').DataTable();
} );
  </script>                            

  <!-- all scripts -->
  <script src="../../scripts/script.php"></script>
         
         
 
</body>

</html>