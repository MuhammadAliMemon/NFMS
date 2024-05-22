<?php
   session_start();
   require 'connection.php';
   require 'controller/StaffController.php';
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      // username and password sent from form
      $sUsername = mysqli_real_escape_string($DBConnect,$_POST['inputUsername']);
      $sPassword = mysqli_real_escape_string($DBConnect,$_POST['inputPassword']); 
      $staffName = loginStaff($DBConnect, $sUsername, $sPassword);

      if($staffName != null) {
         header("location: dashboard.php");
      }
      else {
         header("location: login.php?error=loginfailed");
      }
   }
?>