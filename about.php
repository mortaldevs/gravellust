<!DOCTYPE html>
<html lang="en">
<head>
<title>About us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/about_styles.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
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
                                <li class="main_nav_item"><a href="blogs.php">Blogs</a></li>
                                <li class="main_nav_item active"><a href="about.php">About us</a></li>
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.png" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">About us</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.php">Home</a></li>
									<li class="home_breadcrumb">About us</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Find Form -->

    <!--<div class="find">
         Image by https://unsplash.com/@garciasaldana_
		<div class="find_background_container prlx_parent">
			<div class="find_background prlx" style="background-image:url(images/find.jpg)"></div>
		</div>-->
		<!-- <div class="find_background parallax-window" data-parallax="scroll" data-image-src="images/find.jpg" data-speed="0.8"></div> -->
		<!--<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="find_title text-center">Find the Adventure of a lifetime</div>
				</div>
				<div class="col-12">
					<div class="find_form_container">
						<form action="#" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
							<div class="find_item">
								<div>Destination:</div>
								<input type="text" class="destination find_input" required="required" placeholder="Keyword here">
							</div>
							<div class="find_item">
								<div>Adventure type:</div>
								<select name="adventure" id="adventure" class="dropdown_item_select find_input">
									<option>Categories</option>
									<option>Categories</option>
									<option>Categories</option>
								</select>
							</div>
							<div class="find_item">
								<div>Min price</div>
								<select name="min_price" id="min_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<div class="find_item">
								<div>Max price</div>
								<select name="max_price" id="max_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<button class="button find_button">Find</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>-->

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>We are Symbol of Excellence </h2>
						<div>take a look at our story</div>
					</div>
				</div>
			</div>
			<div class="row about_row">
				<div class="col-lg-6 about_col order-lg-1 order-2">
					<div class="about_content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh. Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis orci id lacus convallis tempus eget sit amet metus. Sed finibus, magna at euismod aliquet, enim justo vulputate lorem, sit amet elementum dolor eros sollicitudin dui. Sed ac magna mauris. Nullam lectus odio, viverra vel mi id, interdum imperdiet nulla. </p>
						<div class="button about_button"><a href="#">Read More</a></div>
					</div>
				</div>
				<div class="col-lg-6 about_col order-lg-2 order-1">
					<div class="about_image">
						<img src="images/about.jpg" alt="https://unsplash.com/@sanfrancisco">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones">
		<div class="milestones_background parallax-window" data-parallax="scroll" data-image-src="images/fact_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Fun facts about our Agency</h2>
						<div>take a look</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="milestones_text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh</p>
					</div>
				</div>
					
			</div>
			<div class="row milestones_container">

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_1.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="8">0</div>
						<div class="milestone_text">Mountains Climbed</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_2.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="50">0</div>
						<div class="milestone_text">Places Visited</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_3.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="2094">0</div>
						<div class="milestone_text">Photos Taken</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_4.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="8">0</div>
						<div class="milestone_text">Trips Organized</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Popular services that we offer</h2>
						<div>take a look at these offers</div>
					</div>
				</div>
			</div>
			<div class="row icon_box_container">

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/service_1.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title">Weekend trips</div>
						<p class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adip iscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis.</p>
						<a href="#" class="icon_box_more">Read More</a>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/service_2.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title">Fun leisure trips</div>
						<p class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adip iscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis.</p>
						<a href="#" class="icon_box_more">Read More</a>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/service_3.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title">Event Managements</div>
						<p class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adip iscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis.</p>
						<a href="#" class="icon_box_more">Read More</a>
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
<script src="js/about_custom.js"></script>
</body>
</html>