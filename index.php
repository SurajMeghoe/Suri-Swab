<?php 
  session_start();

  if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email'])) { 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
    <title>Suri Swab</title>
  </head>
  <body>

  <a href="./laborant/loginindex.php">
    <div class="col-2 offset-1" style="height: 20px; ">
                      <button class="btn1 mt-3 mb-5" name="assistent">Assistent</button>
                    </div>
            </a>      
 <br>
    <section class="Form my-4 mx-5">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-5">
          <img src="./assistent/img/assistent6.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7 px-5 pt-5">
          
          <div class="col-sm">
                  <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                <?=htmlspecialchars($_GET['error'])?>
              </div>
                <?php } ?>
          
          </div>
              <h1 class="font-weight-bold py-3">Logo</h1>
              <h4>Sign into your account</h4>
              <form action="./assistent/backend/loginprocess.php" method="post">
                  <div class="form-row">
                      <div class="col-lg-7">
                           <input type="text" name="username"  value="<?php if(isset($_GET['username']))echo(htmlspecialchars($_GET['username'])) ?>" placeholder=" User Name" class="form-control my-3 p-4" >
                      </div>
                  </div>
                  <div class="form-row">
                    <div class="col-lg-7">
                       <input type="password" name="password" placeholder=" Password" class="form-control my-3 p-4" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-7">
                      <button class="btn1 mt-3 mb-5" name="login">Login</button>
                    </div>
                </div>
                <a href="#">Forgot Password ?</a>
                <p>Don't have an account? <a href="#">Register here</a></p>
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
   header("Location: login.php");
}
 ?>
