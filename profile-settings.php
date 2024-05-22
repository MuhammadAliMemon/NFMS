<?php
  session_start();
  if(!isset($_SESSION['login_user'])) {
    header("location: login.php");
  }
  require 'controller/StaffController.php';
  require 'connection.php';
  // require 'dto/StaffDto.php';

  $staffDTO = getStaffProfile($DBConnect, $_SESSION['login_id']);
      // echo "<script>console.log( 'Debug Objects: " . $staffDTO->getDesignation() . "' );</script>";

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

    <title>Nabati Foods - Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/jumbotron.css" rel="stylesheet">
    <link href="dist/css/custom-panel.css" rel="stylesheet">
    <link href="dist/css/profile-settings.css" rel="stylesheet">

  </head>

  <body>
    <?php include 'components/sidebar.php'?>
    <div class="container">
      <?php include 'components/header.php'?>
      <div class="jumbotron">
        <h2><b>
          <?php
            echo $staffDTO->getName();
          ?> </b>
        </h2>
        <h2>
          <?php
            echo $staffDTO->getDesignation();
          ?>
        </h2>
        <button id="editProfile" type="button" class="btn btn-default btn-sm">Edit Profile</button>
        <button id="changePassword" type="button" class="btn btn-default btn-sm">Change Password</button>

              <br><br>
        <!-- <p class="lead">Here you can manage...</p> -->
          <div id="editProfileDiv" style="display: none">
              <h3>Edit Profile</h3>

              <form class="form-horizontal" action="/action_page.php">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                    </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success pull-right">Update</button>
                    <button type="button" id="cancelEditProfile" class="btn btn-default pull-right" style="margin-right: 5px;">Cancel</button>
                  </div>
                </div>
              </form>
          </div>

          <div id="changePasswordDiv" style="display: none">
              <h3>Change Password</h3>

              <form class="form-horizontal" action="/action_page.php">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="currentPassword">Current:</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="currentPassword" placeholder="Enter Current Password" name="currentPassword">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="newPassword">New:</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="newPassword" placeholder="Enter New Password" name="newPassword">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="confirmPassword">Confirm:</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="confirmPassword" placeholder="Enter Name" name="confirmPassword">
                    </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success pull-right">Change</button>
                    <button type="button" id="cancelChangePassword" class="btn btn-default pull-right" style="margin-right: 5px;">Cancel</button>
                  </div>
                </div>
              </form>
          </div>

      </div>

      <!-- <div class="row marketing">
        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div> -->

      <footer class="footer">
        <p>&copy; Nabati Foods Management System.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="dist/js/custom-panel.js"></script>
    <script src="dist/js/profile-settings.js"></script>
  </body>
</html>
