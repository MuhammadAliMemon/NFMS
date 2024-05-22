      <div class="header clearfix">
        <span class="pull-left" style="font-size:35px;cursor:pointer" onclick="openNav()">&#9776;</span>

        <!-- <h3 class="text-muted pull-left">OAMS</h3> -->
        <a class="navbar-brand" href="#">
          <img src="dist/images/logo-side.png" height="90%">
        </a>
        <nav>
          <ul class="nav nav-pills pull-right">
           <a href="profile-settings.php" class="btn btn-success btn-profile" role="button">
             <?php
                echo $_SESSION['login_user'];
              ?>
             <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
           </a>

           <a href="logout.php" class="btn btn-danger btn-logout" role="button">
             Log Out <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
           </a>

          </ul>
        </nav>
      </div>