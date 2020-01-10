<?php
  include 'database.php';
  session_start();
  if(!$_SESSION['email']){
    header('location: logout.php?logout=true');
    exit;
  }
  $getAdmin = "select * from admin_login";
  $run = mysqli_query($connection, $getAdmin) or die(mysqli_error($connection));
  while($row = mysqli_fetch_array($run)){
        $admin_id = $row[0];
        $email = $row[1];
        $pass = $row[2];
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../images/favicon.png">
  <link rel="icon" type="image/png" href="../images/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Edit Featured Image - Travellust
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#!" class="simple-text logo-normal">
          TRAVELLUST
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add-post.php">
              <i class="material-icons">library_add</i>
              <p>Add Blog Post</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="posts.php">
              <i class="material-icons">library_books</i>
              <p>All Blog Posts</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="profile.php">
              <i class="material-icons">account_box</i>
              <p>My Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="upload_form.php">
              <i class="material-icons">image</i>
              <p>Media</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="material-icons">power_settings_new</i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid bg-white p-5">
          <h3>Admin Profile</h3>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row form-group">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="username">Admin Name:</label>
                        <input type="text" value="Travellust" class="form-control text-primary text-center" disabled>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="email">Admin Email:</label>
                        <input type="text" value="<?= $email ?>" class="form-control text-primary text-center" disabled>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm" id="btn">Change Email & Password</button>
                <form method="post" action="profile.php?user_id=<?= $admin_id ?>" id="change">
                <div class="row form-group">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="new mail">New Email:</label>
                        <input type="text" name="new-email" class="form-control text-primary">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="password">New Password:</label>
                        <input type="password" name="new-password" class="form-control text-primary">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-success pull-right" name="update-details" type="submit">Change Details</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src=""></script>
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function(){
        $('#change').hide();
        $('#btn').click(function(){
            $('#change').show(500);
        });
    });
  </script>
</body>
</html>

<?php
    if(isset($_POST['update-details'])){
        $user_id = $_POST['user_id'];
        $email = $_POST['new-email'];
        $pass  = $_POST['new-pass'];
        
        $queryUpdate = "update admin_login set email='$email', password='$pass' where user_id='$user_id'";
        $runQuery = mysqli_query($connection, $queryUpdate) or die(mysqli_error($connection));
        if($runQuery){
            echo "<script>alert('Admin Credentials Updated Successfully...!')</script>";
            echo "<script>window.open('profile.php', '_self')</script>";
        } else {
            echo "<script>alert('There is an error in the code...!')</script>";
        }
    }
?>
