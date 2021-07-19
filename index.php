<!-- <?php
// echo  md5("1234")
?> -->

<?php 
  session_start();
  if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {  
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
     <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <title>Suri Swab</title>
  </head>
  <body>

      
 <br>
    <section class="Form my-4 mx-5">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-5">
          <img src="./admin/img/login.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7 px-5 pt-5">
          
          <div class="col-sm">
                  <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                <?=htmlspecialchars($_GET['error'])?>
              </div>
                <?php } ?>
          
          </div>
              <h1 class="font-weight-bold py-3">Welkom bij Suri Swab</h1>
              
              <form action="./admin/backend/loginprocess.php" method="post">
                  <div class="form-row">
                      <div class="col-lg-7">
                           <input type="text" name="username"  value="<?php if(isset($_GET['username']))echo(htmlspecialchars($_GET['username'])) ?>" placeholder=" Usernaam" class="form-control my-3 p-4" >
                      </div>
                  </div>
                  <div class="form-row">
                    <div class="col-lg-7">
                       <input type="password" name="password" placeholder="Wachtwoord" class="form-control my-3 p-4" >
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col-lg-7">
                            <select class="form-select mb-3"
                              name="role" 
                              aria-label="Default select example">
                              <option selected value="admin">Admin</option>
                              <option value="assistent">Assistent</option>
                              <option value="laborant">Laborant</option>
                           </select>
                    </div>
                </div>
                
                
                <div class="form-row">
                    <div class="col-lg-7">
                      <button class="btn1 mt-3 mb-5" name="login">Login</button>
                    </div>
                </div>
                
                
              </form>
             </div>
        </div>
      </div>
    </section>
    





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
}else {
   header("Location: ./index.php");
}
 ?>
