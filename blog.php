<?php
    include 'travellust-admin/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travallust project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/news_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_container d-flex flex-row align-items-center justify-content-start">

                        <!-- Logo -->
                        <div class="logo_container">
                            <div class="logo">
                                <div class="logo_image"><img src="images/company.jpg" alt=""></div>
                                <div class="logo" style="margin-left: 15px">
                                    <div>Travellust</div>
                                    <div>Adventure Club Pakistan</div>
                                </div>
                            </div>
                        </div>

                        <!-- Main Navigation -->
                        <nav class="main_nav ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item"><a href="index.php">Home</a></li>
                                <li class="main_nav_item"><a href="calculator.php">Calculator</a></li>
                                <li class="main_nav_item active"><a href="blogs.php">Blogs</a></li>
                                <li class="main_nav_item"><a href="about.php">About us</a></li>
                                <li class="main_nav_item"><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>

                        <!-- Search -->
                        <div class="search">
                            <form action="#" class="search_form">
                                <input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">
                                <button type="submit" class="search_button ml-auto ctrl_class"><img src="images/search.png" alt=""></button>
                            </form>
                        </div>

                        <!-- Hamburger -->
                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

        <?php include "menu.php"; ?>

	</div>
	
	<!-- Home -->

	<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/blogs.png" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Blogs</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.php">Home</a></li>
									<li class="home_breadcrumb">Blogs</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
                <?php
                    $getPosts = "select * from blog_posts where status='published'";
                    $runQuery = mysqli_query($connection, $getPosts) or die(mysqli_error($connection));
                    while($row = mysqli_fetch_assoc($runQuery)){
                        $postID = $row['post_id'];
                        $image = $row['featured_image'];
                        $title = $row['post_title'];
                        $category = $row['post_category'];
                        $author = $row['post_by'];
                        $published_date = $row['published_date'];

                    echo "<div class='col-lg-4 col-md-4 col-sm-1'>
                            <div class='card mb-4'>
                                <a href='single-post.php?post_id=$postID'><img src='travellust-admin/assets/img/featured-images/$image' class='card-img-top w-100' height='250px' /></a>
                                <div class='card-body'>
                                    <h5 class='card-title'><a href='single-post.php?post_id=$postID' class='text-dark'>$title</a></h5>
                                    <a href='single-post.php?post_id=$postID'>Read Post</a>
                                    <br>
                                    <small>BY: $author</small>
                                    </div>
                                <div class='card-footer'>
                                <small>Published On: $published_date</small>
                                <small class='pull-right'>Category: $category</small>    
                                </div>
                            </div>
                          </div>
                    ";
                    }
                ?>
            </div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="newsletter_background" style="background-image:url(images/newsletter.png)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="newsletter_content">
						<div class="newsletter_title text-center">Subscribe to our Newsletter</div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
									<input type="email" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
									<button type="submit" id="newsletter_button" class="newsletter_button">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
    <?php include "footer.php"; ?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/news_custom.js"></script>
</body>
</html>