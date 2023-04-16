<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>POE.Gov.sl | Dash Board</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="images/favicon.png" /> -->
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <!-- <a class="navbar-brand brand-logo me-5" href="index.html"><img src="images/logo.svg" class="me-2" alt="logo"/></a> -->
        <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a> -->
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <!-- <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div> -->
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown me-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
              <i class="ti-email mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              
              
              <!-- <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a> -->
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="ti-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
             
              <!-- <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a> -->
            
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="ti-user menu-icon"></i>
              <span class="menu-title">Arrival</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.php"> Daily Arrivals</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.php"> Monthly Arrivals</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons1.php"> Yearly Arrivals</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography1.php"> Total Arrivals</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Departure</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.php"> Daily Departure </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login1.php"> Monthly Departure </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login12.php"> Yearly Departure </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.php"> Total Departure </a></li>
              </ul>
            </div>
          </li> 
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">POE DASHBOARD</h4>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                      <i class="ti-clipboard btn-icon-prepend"></i>TRACK PLF
                    </button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
            </div>
            <div class="col-md-3 grid-margin stretch-card">
            
            </div>
            <div class="col-md-3 grid-margin stretch-card">
             
            </div>
          </div>
          <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
              <div class="card border-bottom-0">
                <div class="card-body pb-0">
                  <p class="card-title">ARRIVALS</p>
                  <div class="d-flex flex-wrap mb-5">
                    <div class="me-5 mt-3">
                      <p class="text-muted">Daily</p>
                      <?php
                      require('connection.php');

                      $query = "SELECT id FROM arrival ORDER BY id";
                      $query_run = mysqli_query($con, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h3> '.$row.'</h3>';
                      ?>
                      <!-- <h3>362</h3> -->
                    </div>
                    <div class="me-5 mt-3">
                      <p class="text-muted">Monthly</p>
                      <?php
                      require('connection.php');

                      $query = "SELECT id FROM arrival ORDER BY id";
                      $query_run = mysqli_query($con, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h3> '.$row.'</h3>';
                      ?>
                    </div>
                    <div class="me-5 mt-3">
                      <p class="text-muted">Yearly</p>
                      <?php
                      require('connection.php');

                      $query = "SELECT id FROM arrival ORDER BY id";
                      $query_run = mysqli_query($con, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h3> '.$row.'</h3>';
                      ?>
                    </div>
                    <div class="mt-3">
                      <p class="text-muted">Total</p>
                      <?php
                      require('connection.php');

                      $query = "SELECT id FROM arrival ORDER BY id";
                      $query_run = mysqli_query($con, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h3> '.$row.'</h3>';
                      ?>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card border-bottom-0">
                <div class="card-body pb-0">
                  <p class="card-title">DEPARTURES</p>
                  <div class="d-flex flex-wrap mb-5">
                    <div class="me-5 mt-3">
                      <p class="text-muted">Daily</p>
                      <?php
                      require('connection.php');

                      $query = "SELECT id FROM departure ORDER BY id";
                      $query_run = mysqli_query($con, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h3> '.$row.'</h3>';
                      ?>
                    </div>
                    <div class="me-5 mt-3">
                      <p class="text-muted">Monthly</p>
                      <?php
                      require('connection.php');

                      $query = "SELECT id FROM departure ORDER BY id";
                      $query_run = mysqli_query($con, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h3> '.$row.'</h3>';
                      ?>
                    </div>
                    <div class="me-5 mt-3">
                      <p class="text-muted">Yearly</p>
                      <?php
                      require('connection.php');

                      $query = "SELECT id FROM departure ORDER BY id";
                      $query_run = mysqli_query($con, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h3> '.$row.'</h3>';
                      ?>
                    </div>
                    <div class="mt-3">
                      <p class="text-muted">Total</p>
                      <?php
                      require('connection.php');

                      $query = "SELECT id FROM departure ORDER BY id";
                      $query_run = mysqli_query($con, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h3> '.$row.'</h3>';
                      ?>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          </div>
          <div class="row">
           
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="#" target="_blank">Point of Entry </a><?php echo date('Y') ?></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="#" target="_blank"> Ministry of Health and Sanitation</span></a>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

