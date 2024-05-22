<?php
  session_start();
  if(isset($_SESSION['login_user'])) {
    header("location: dashboard.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Nabati Foods - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/cover.css" rel="stylesheet">
    <link href="dist/css/customstyle.css" rel="stylesheet">
    <link href="dist/css/notify.css" rel="stylesheet">
    <link href="dist/css/custom-login.css" rel="stylesheet">

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="inner cover" align="center">
            <div class="col-sm-12">
              <div class="col-sm-6 col-sm-offset-3">
                <img src="dist/images/logo.png" width="100%" />
              </div>
            </div>
<!--             <h1 class="cover-heading">ONLINE ATTENDANCE</h1>
            <p class="lead">MANAGEMENT SYSTEM</p> -->
            <div class="col-sm-12">
              <div class="col-sm-6 col-sm-offset-3">
                <form class="form-signin" method="post" id="loginForm" action="signin.php">
                  <h2 class="form-signin-heading">Enter Credentials</h2>
                  <label for="inputEmail" class="sr-only">Username</label>
                  <input type="text" id="inputUsername" name="inputUsername" class="form-control loginform transparent-input" placeholder="Username" required="" autofocus="">
                  <label for="inputPassword" class="sr-only">Password</label>
                  <input type="password" id="inputPassword" name="inputPassword" class="form-control loginform transparent-input" placeholder="Password" required="">
                  <br>
                  <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
                </form>
              </div>
            </div>
          </div>


        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/notify.js"></script>
    <script src="dist/js/custom-login.js"></script>
<?php
    if(isset($_GET['error'])) {
?>
  <script>
    $.notify('<b>Login Failed. Please try again.</b>', 'danger');
  </script>
<?php
  }
?>
  </body>
</html>