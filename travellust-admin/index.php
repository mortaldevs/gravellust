<?php
  include 'database.php';
  session_start();
  if(!$_SESSION['email']){
    header('location: logout.php?logout=true');
    exit;
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
   Travellust - Admin Dashboard
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
          <li class="nav-item active  ">
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
          <li class="nav-item">
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
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <?php
                  $result = mysqli_query($connection, "select count(1) FROM blog_posts WHERE status='published'");
                  $row = mysqli_fetch_array($result);
                  
                  $total = $row[0];
                  ?> 
                  <p class="card-category">All Posts</p>
                  <h3 class="card-title"><?= $total; ?> Posts</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">supervised_user_circle</i>
                  </div>
                  <?php
                  $result = mysqli_query($connection, "select count(1) FROM newsletter");
                  $row = mysqli_fetch_array($result);
                  $total = $row[0];
                  ?> 
                  <p class="card-category">Subscribers</p>
                  <h3 class="card-title"><?= $total ?> Users</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">local_post_office</i>
                  </div>
                  <?php
                  $result = mysqli_query($connection, "select count(1) FROM contacts");
                  $row = mysqli_fetch_array($result);
                  $total = $row[0];
                  ?> 
                  <p class="card-category">Contacts</p>
                  <h3 class="card-title"><?= $total ?> Users</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">delete</i>
                  </div>
                  <?php
                  $result = mysqli_query($connection, "select count(1) FROM blog_posts WHERE status='trashed'");
                  $row = mysqli_fetch_array($result);
                  
                  $total = $row[0];
                  ?>  
                  <p class="card-category">Trashed Posts</p>
                  <h3 class="card-title"><?= $total; ?> Posts</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">Quick Menu:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item" id="btnall">
                          <a href="#!" id="posts" class="nav-link" data-toggle="tab">
                            <i class="material-icons">library_books</i> Posts
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#!" id="trashes" data-toggle="tab">
                            <i class="material-icons">delete</i> Trashed Posts
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#!" id="newsletter" data-toggle="tab">
                            <i class="material-icons">supervised_user_circle</i> Newsletter Entries
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#!" id="messages" data-toggle="tab">
                            <i class="material-icons">local_post_office</i> Contacts Form Entries
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table" id="post-tbl">
                        <thead class="bg-primary text-light text-center">
                        <tr>
                        <th>Post Image</th>
                        <th>Post Title</th>
                        <th>Published Date</th>
                        <th>Actions</th>
                        </tr>
                        </thead>
                        <?php
                        $getPosts = "select * from blog_posts where status='published' ORDER BY post_id DESC";
                        $runQuery = mysqli_query($connection, $getPosts) or die(mysqli_error($connection));
                        while($row=mysqli_fetch_assoc($runQuery)){
                        $post_id = $row['post_id'];
                        $image = $row['featured_image'];
                        $title = $row['post_title'];
                        $published_date = $row['published_date'];
                        ?>
                        <tbody class="text-center">
                        <td class="w-25">
                        <img src="<?= "assets/img/featured-images/$image" ?>" class="img-fluid" width="70px" height="70px">
                        <p><small><a href="update-featured-image.php?img_id=<?= $post_id ?>" class="btn-link">Change </a></small></p>
                        </td>
                        <td class="w-50"><?= $title; ?></td>
                        <td><?= $published_date; ?></td>
                        <td>
                        <a onclick="return confirm('Do you really want to delete this blog post...?')" href="del-post.php?delete=<?= $post_id; ?>" class="btn-link"><i class="material-icons text-danger">delete</i></a>
                        <a href="edit-post.php?edit_id=<?= $post_id; ?>" class="btn-link"><i class="material-icons text-success">create</i></a>
                        </td>
                        </tbody>
                        <?php } ?>
                      </table>
                      <table class="table" id="trsh-tbl">
                        <thead class="bg-danger text-light text-center">
                        <tr>
                        <th>Post Image</th>
                        <th>Post Title</th>
                        <th>Published Date</th>
                        <th>Actions</th>
                        </tr>
                        </thead>
                        <?php
                        $getPosts = "select * from blog_posts where status='trashed' ORDER BY post_id DESC";
                        $runQuery = mysqli_query($connection, $getPosts) or die(mysqli_error($connection));
                        while($row=mysqli_fetch_assoc($runQuery)){
                        $post_id = $row['post_id'];
                        $image = $row['featured_image'];
                        $title = $row['post_title'];
                        $published_date = $row['published_date'];
                        ?>
                        <tbody class="text-center">
                        <td class="w-25">
                        <img src="<?= "assets/img/featured-images/$image" ?>" class="img-fluid" width="70px" height="70px">
                        <p><small><a href="update-featured-image.php?img_id=<?= $post_id ?>" class="btn-link">Change </a></small></p>
                        </td>
                        <td class="w-50"><?= $title; ?></td>
                        <td><?= $published_date; ?></td>
                        <td>
                        <a onclick="return confirm('Do you really want to Restore this blog post...?')" href="restore-post.php?restore_post=<?= $post_id; ?>" class="btn btn-success btn-sm">Restore</a>
                        </td>
                        </tbody>
                        <?php } ?>
                      </table>
                      <table class="table" id="news-tbl">
                        <thead class="bg-info">
                        <tr>
                        <th>Subscriber Email Address</th>
                        <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <?php
                        $getSubscribers = "select * from newsletter";
                        $runQuery1 = mysqli_query($connection, $getSubscribers) or die(mysqli_error($connection));
                        while($row1=mysqli_fetch_assoc($runQuery1)){
                        $sub_id = $row1['subscriber_id'];
                        $sub_email = $row1['subscriber_email'];
                        ?>
                        <tbody>
                        <td><?= $sub_email ?></td>
                        <td class="text-right">
                        <button class="btn btn-sm btn-danger">Spam</button>
                        </td>
                        </tbody>
                        <?php } ?>
                      </table>
                      <table class="table" id="contact-tbl">
                        <thead class="bg-success">
                        <tr>
                        <th>Contacts</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
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
      $('#trsh-tbl').hide();
      $('#news-tbl').hide();
      $('#contact-tbl').hide();
    $(document).ready(function(){
      $('#posts').click(function(){
        $('#trsh-tbl').hide();
        $('#news-tbl').hide();
        $('#contact-tbl').hide();
        $('#post-tbl').show(500);
      });
      $('#trashes').click(function(){
        $('#news-tbl').hide();
        $('#contact-tbl').hide();
        $('#post-tbl').hide();
        $('#trsh-tbl').show(500);
      });
      $('#newsletter').click(function(){
        $('#contact-tbl').hide();
        $('#post-tbl').hide();
        $('#trsh-tbl').hide();
        $('#news-tbl').show(500);
      });
      $('#messages').click(function(){
        $('#post-tbl').hide();
        $('#trsh-tbl').hide();
        $('#news-tbl').hide();
        $('#contact-tbl').show(500);
      });
    });
  </script>
</body>

</html>
