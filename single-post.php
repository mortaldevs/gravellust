<?php
    include 'travellust-admin/database.php';
    $reference = $_GET['post_id'];
    $getSinglePost = "select * from blog_posts where post_id='$reference'";
    $run = mysqli_query($connection, $getSinglePost) or die(mysqli_error($connection));
    while($row=mysqli_fetch_array($run)){
        $id = $row[0];
        $title = $row[1];
        $image = $row[2];
        $content = $row[3];
        $cate = $row[4];
        $author = $row[5];
        $pub_date = $row[6];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $title; ?> - Travellust Blog</title>
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
	
	<!-- Home -->

	
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
            <img src="<?= "travellust-admin/assets/img/featured-images/$image" ?>" class="w-100" height="500px" />
            </div>
        </div>
		<div class="container-fluid p-5">
			<div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="post_meta">
					<ul>
						<li>by <?= $author ?></li>
						<li>on <?= $pub_date ?></li>
					</ul>
				</div>
                <img src="<?= "travellust-admin/assets/img/featured-images/$image" ?>" class="w-100 mt-3 mb-3" height="400px" />
                <h1><?= $title ?></h1>
                <p><?= $content ?></p>
                </div>
                <div class="row">
                    <?php

                    ?>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 p-5">
                <div class="p-3 mb-3" style="border:1px solid red">
                    <h4>Popular Categories</h4>
                    <p><a href="#!">Travelling</a></p>
                    <p><a href="#!">Pakistan Culture</a></p>
                </div>
                    <!-- Offer 1 -->
                    <div class="sidebar_offer">
								<div class="sidebar_offer_background" style="background-image:url(images/offer_2.jpg)"></div>
								<div class="sidebar_offer_content">
									<div class="sidebar_offer_destination">bali</div>
									<div class="sidebar_offer_percent">25%</div>
									<div class="sidebar_offer_title">Last Minute Offer</div>
									<div class="sidebar_offer_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris.</div>
									<div class="sidebar_offer_button"><a href="calculator.php">See Offer</a></div>
								</div>
							</div>
                    <!-- Offer 2 -->
                    <div class="sidebar_offer">
								<div class="sidebar_offer_background" style="background-image:url(images/offer_1.jpg)"></div>
								<div class="sidebar_offer_content">
									<div class="sidebar_offer_destination">bali</div>
									<div class="sidebar_offer_percent">38%</div>
									<div class="sidebar_offer_title">Last Minute Offer</div>
									<div class="sidebar_offer_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris.</div>
									<div class="sidebar_offer_button"><a href="calculator.php">See Offer</a></div>
								</div>
							</div>
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