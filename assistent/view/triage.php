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
          <li class="nav-item active ">
            <a class="nav-link" href="./triage.php" style="background-color: #29c2cc">
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
            <a class="navbar-brand" href="javascript:;"> Triage</a>
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
                  <h4 class="card-title ">Triage registratie</h4>
                  <p class="card-category"> Gegevens van elk patient
                  </p>
                </div>
                <div class="col-md-4">
                <input type="text" value="" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search...">
                </div>
                <!-- <div class="col-md-2">
                <button type="submit" class="btn btn-white btn-round btn-just-icon float-left">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>  
                </div> -->
<div class="col-md-4">
           <button type="button" class="btn btn-primary float-right btn-dark" data-bs-toggle="modal" data-bs-target="#patientModal">
             patient registratie
                </button>
                           </div>
                           </div>   
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="myTable">
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
                        <th>
                          acties
                        </th>
                      </thead>
                      <tbody>
                      <?php
                      $sql = "SELECT * from patient where id_gebruikers = '".$_SESSION['id']."' AND id_district = '".$_SESSION['district']."'";
                      
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
                                                <td>

                                                <a href="#" class="view" data-id="<?php echo $row['id_patient']; ?>"><i class="material-icons">visibility</i></a>
                                                <a href="#" class="edit" data-id="<?php echo $row['id_patient']; ?>"><i class="material-icons text-info">edit</i></a>
                                                 
                                                </td>
                                                
                      </tr>
                                    <?php
                                        }
                                    } else {
                                      echo "error";
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
  <!-- modal insert begin-->
  
  
<div class="modal fade" id="patientModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Patient registratie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../../assistent/backend/patientregistratie.php" method="POST">
      <div class="modal-body">
        
<div class="row g-3">   
          <div class="col-md-6">
            <label for="patientnaam" class="form-label">Naam</label>
            <input type="text" class="form-control" name="patientnaam" required>
          </div>
       <div class="col-md-6">
          <label for="patientvoornaam" class="form-label">Voornaam</label>
          <input type="text" class="form-control" name="patientvoornaam" required>
       </div>
    </div> 

    <div class="row g-3">   
          <div class="col-md-6">
            <label for="nationaliteit" class="form-label">Nationaliteit</label>
            <input type="text" class="form-control" name="nationaliteit" required>
          </div>
       <div class="col-md-6">
          <label for="idnummer" class="form-label">ID_nummer</label>
          <input type="text" class="form-control" name="idnummer" required>
       </div>
    </div>

    <div class="row g-3">   
          <div class="col-md-6">
            <select class="form-select" aria-label="Default select example" name="rolepatient" required>
              <option selected>Selecteer uw geslacht</option>
              <option value="m">man</option>
              <option value="v">vrouw</option>  
            </select>
          </div>
       <div class="col-md-6">
          <label for="adres" class="form-label">Adres</label>
          <input type="text" class="form-control" name="adres" required>
       </div>
    </div>

    <div class="row g-3">   
          <div class="col-md-6">
            <label for="gdatum" class="form-label">Geboorte datum</label>
            <input type="date" class="form-control" name="gdatum" required>
          </div>
       <div class="col-md-6">
          <label for="beroep" class="form-label">Beroep</label>
          <input type="text" class="form-control" name="beroep" required>
       </div>
    </div>

    <div class="row g-3">   
          <div class="col-md-6">
            <label for="huisarts" class="form-label">Huisarts</label>
            <input type="text" class="form-control" name="huisarts" required>
          </div>
       <div class="col-md-6">
          <label for="odatum" class="form-label">Datum onderzoek</label>
          <input type="date" class="form-control" name="odatum" required>
       </div>
    </div>
    <br>
    <div class="row g-3">   
          <div class="col-md-6">
            <label for="huisarts" class="form-label">Onderzoeker</label>
            <?=$_SESSION['usernaam']?>
          </div>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
      </div>
      </form>
    </div>
  </div>
</div>
  <!-- modal insert eind -->

  <!-- modal edit begin -->
  <div class="modal fade" id="patientModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Patient registratie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../../assistent/backend/edit_patient.php" method="POST">
       <input type="hidden" name="edit_id" id="edit_id">
      <div class="modal-body">
        
<div class="row g-3">   
          <div class="col-md-6">
            <label for="patientnaam" class="form-label">Naam</label>
            <input type="text" class="form-control" name="patientnaam" id="patientnaam" required>
          </div>
       <div class="col-md-6">
          <label for="patientvoornaam" class="form-label">Voornaam</label>
          <input type="text" class="form-control" name="patientvoornaam" id="patientvoornaam"  required>
       </div>
    </div> 

    <div class="row g-3">   
          <div class="col-md-6">
            <label for="nationaliteit" class="form-label">Nationaliteit</label>
            <input type="text" class="form-control" name="nationaliteit" id="nationaliteit"  required>
          </div>
       <div class="col-md-6">
          <label for="idnummer" class="form-label">ID_nummer</label>
          <input type="text" class="form-control" name="idnummer" id="idnummer"  required>
       </div>
    </div>

    <div class="row g-3">   
          <div class="col-md-6">
            <select class="form-select" aria-label="Default select example" name="rolepatient" id="rolepatient"  required>
              <option selected>Selecteer uw geslacht</option>
              <option value="m">man</option>
              <option value="v">vrouw</option>  
            </select>
          </div>
       <div class="col-md-6">
          <label for="adres" class="form-label">Adres</label>
          <input type="text" class="form-control" name="adres" id="adres"  required>
       </div>
    </div>

    <div class="row g-3">   
          <div class="col-md-6">
            <label for="gdatum" class="form-label">Geboorte datum</label>
            <input type="date" class="form-control" name="gdatum" id="gdatum"  required>
          </div>
       <div class="col-md-6">
          <label for="beroep" class="form-label">Beroep</label>
          <input type="text" class="form-control" name="beroep" id="beroep"  required>
       </div>
    </div>

    <div class="row g-3">   
          <div class="col-md-6">
            <label for="huisarts" class="form-label">Huisarts</label>
            <input type="text" class="form-control" name="huisarts" id="huisarts"  required>
          </div>
       <div class="col-md-6">
          <label for="odatum" class="form-label">Datum onderzoek</label>
          <input type="date" class="form-control" name="odatum" id="odatum"  required>
       </div>
    </div>
    <br>
    <div class="row g-3">   
          <div class="col-md-6">
            <label for="huisarts" class="form-label">Onderzoeker</label>
            <?=$_SESSION['usernaam']?>
          </div>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="insertdata" class="btn btn-primary">Bewerk</button>
      </div>
      </form>
    </div>
  </div>
</div>
  <!-- modal insert eind -->
  <!-- modal edit eind -->


  <!-- bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- all scripts -->
  <script src="../../scripts/script.php"></script>
<!--search box -->
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script>

 $(document).on('click', '.edit', function(e) {
        var id = $(this).data('id');
        $('#edit').modal('show');
        get_row(id);
    });

     function get_row(id) {
        $.ajax({
            type: 'POST',
            url: '../../assistent/backend/fetch_patient.php',
            data: {
                id: id
            },
              dataType: 'json',
            success: function(response) 
            {
               $('#patientnaam').val(response.naam);
               $('#patientvoornaam').val(response.voornaam);
               $('#nationaliteit').val(response.nationaliteit);
               $('#idnummer').val(response.id_nummer);
               $('#rolepatient').val(response.geslacht);
               $('#adres').val(response.adres);
               $('#gdatum').val(response.geboortedatum);
               $('#beroep').val(response.datum);
               $('#huisarts').val(response.beroep);
               $('#odatum').val(response.huisarts);
                $('#edit_id').val(response.admin_id)
            }
        });
     }
</script>
</body>

</html>