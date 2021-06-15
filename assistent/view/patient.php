<?php
include '../../db/conn.php';
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
  <link href="../../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
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
          <li class="nav-item active">
            <a class="nav-link" href="./patient.php" style="background-color: #29c2cc">
              <i class="material-icons">medication</i>
              <p>patient</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./triage.php">
              <i class="material-icons">content_paste</i>
              <p>Triage </p>
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
            <a class="navbar-brand" href="javascript:;"> Patient</a>
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
                  <a class="dropdown-item" href="#"><?php echo $_SESSION['user_usernaam']; ?></a>
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../backend/logout.php">Log out</a>
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
              <div class="card">
                <div class="card-header card-header-primary" style="background: #29c2cc">
                  <h4 class="card-title ">Patient informatie
                  <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#add" style="background: #000000">
                                patient toevoegen
                            </button>
                  </h4>
                  <p class="card-category"> Gegevens van elk patient
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Naam
                        </th>
                        <th>
                          Voornaam
                        </th>
                        <th>
                          geboortedatum
                        </th>
                        <th>
                          geslacht
                        </th>
                      </thead>
                      <tbody>
                      <?php
                      $sql = "SELECT * from patient where id_gebruikers = '".$_SESSION['user_id']."'";
                      
                      $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    
                      ?>
                      <tr>
                                                <td><?php echo $row['id_patient']; ?></td>
                                                <td><?php echo $row['naam']; ?></td>
                                                <td><?php echo $row['voornaam']; ?></td>
                                                <td><?php echo $row['geboortedatum']; ?></td>
                                                <td><?php echo $row['geslacht']; ?></td>
                                                
                      </tr>
                                    <?php
                                        }
                                    } else {
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
      
      <!-- page content eind -->
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- all scripts -->
  <script src="../../scripts/script.php"></script>
  
  
</body>

</html>