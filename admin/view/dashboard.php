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
  <link href="../../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
 
</head>

<body class="">
  <!-- navbar side begin -->
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
       <div class="logo"><a href="" class="simple-text logo-normal" >
          Suri swab
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="./dashboard.php" style="background-color: #29c2cc">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./admin.php">
              <i class="material-icons">admin_panel_settings</i>
              <p>user registration</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./patient.php">
              <i class="material-icons">medication</i>
              <p>patient</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./triage.php">
              <i class="material-icons">content_paste</i>
              <p>Triage</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./rook.php">
              <i class="material-icons">smoking_rooms</i>
              <p>Rook patient</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./resultaat.php">
              <i class="material-icons">feed</i>
              <p>Resultaat</p>
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
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
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
      <!-- begin cards -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon" >
                  <div class="card-icon">
                    <i class="material-icons">masks</i>
                  </div>
                  <p class="card-category">Aantal positieven vandaag</p>
                  <h3 class="card-title">
                     <?php
                     date_default_timezone_set('America/Argentina/Buenos_Aires');
                    $date = date('y/m/d');
                    $result = mysqli_query($conn, "SELECT COUNT(uitslag) as total FROM resultaat WHERE uitslag = 'positief' AND datum_resultaat = '$date'");
                            $data = mysqli_fetch_assoc($result);
                            echo $data['total']; ?>    
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                      <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">biotech</i>
                  </div>
                  <p class="card-category">Aantal positieven</p>
                  <h3 class="card-title"> <?php 
                    
                    $result = mysqli_query($conn, "SELECT COUNT(uitslag) as total FROM resultaat WHERE uitslag = 'positief'");
                            $data = mysqli_fetch_assoc($result);
                            echo $data['total']; ?>  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     Covid pandemie
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">sick</i>
                  </div>
                  <p class="card-category">Totaal aantal testen (24 uur)</p>
                  <h3 class="card-title"><?php 
                   date_default_timezone_set('America/Argentina/Buenos_Aires');
                    $date = date('y/m/d');
                    $result = mysqli_query($conn, "SELECT COUNT(swab) as total FROM triage WHERE swab = 'ja' AND datum_traige = '$date'");
                            $data = mysqli_fetch_assoc($result);
                            echo $data['total']; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                      <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <!-- end cards -->
          <!-- tabel district -->
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning" style="background: #29c2cc">
                  <h4 class="card-title">Employees Stats</h4>
                  <p class="card-category">New employees on 15th September, 2016</p>
                </div>
                <div class="card-body table-responsive">
                  
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>district naam</th>
                      <th>aantal positieven</th>
                      
                    </thead>
                    <tbody>
                       <?php
                    date_default_timezone_set('America/Argentina/Buenos_Aires');
                    $date = date('y/m/d');
                    $sql = "SELECT district.id_district,district.districtnaam AS districtnaam, Count(resultaat.uitslag) AS COUNT FROM district LEFT OUTER JOIN resultaat ON resultaat.id_district = district.id_district WHERE resultaat.uitslag = 'positief' AND resultaat.datum_resultaat = '$date' GROUP BY districtnaam";
                     
                      
                      $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    
                      ?>
                      <tr>
                                                <td><?php echo $row['id_district']; ?></td>
                                                <td><?php echo $row['districtnaam']; ?></td>
                                                <td><?php echo $row['COUNT']; ?></td>
                                                
                                                
                                                
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
  </div>
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- all scripts -->
  <script src="../../scripts/script.php"></script>
</body>

</html>