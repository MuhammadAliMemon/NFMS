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

    <title>Nabati Foods</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/cover.css" rel="stylesheet">

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="inner cover">
            <div class="col-sm-12">
              <div class="col-sm-6 col-sm-offset-3">
                <img src="dist/images/logo.png" width="100%" />
              </div>
            </div>

            <p class="lead">
              <a href="login.php" class="btn btn-lg btn-default">LOG IN</a>
            </p>
          </div>
            <div class="mastfoot">
              <div class="inner">
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
  </body>
</html>
