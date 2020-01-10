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

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Posts -->
				<div class="col-lg-9">
					<div class="news_posts">
						
						<!-- News Post -->
						<div class="news_post">
							<div class="post_title"><a href="blog.php">Trek to Mushakpuri Top</a></div>
							<div class="post_meta">
								<ul>
									<li>by admin</li>
									<li>August 31, 2019</li>
									<li><a href="#">3 comments</a></li>
								</ul>
							</div>
							<div class="post_image">
								<img src="images/news_1.png" alt="https://unsplash.com/@simonmigaj">
								<a href="#"><div class="post_image_box text-center">+</div></a>
							</div>
							<div class="post_text">
								<p>The trekking is 1 hour from doonga gali and takes more time from Lalazar National Park. Its worth to trek and see such a gorgeous view on the Mushkpuri top. We went from doonga gali track and came back from Lalazar track.</p>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="post_title"><a href="#">Trek to Aanso Lake.</a></div>
							<div class="post_meta">
								<ul>
									<li>by admin</li>
									<li>June 27, 2019</li>
									<li><a href="#">3 comments</a></li>
								</ul>
							</div>
							<div class="post_image">
								<img src="images/news_2.png" alt="https://unsplash.com/@mfggomez">
								<a href="#"><div class="post_image_box text-center">+</div></a>
							</div>
							<div class="post_text">
								<p>Ansoo Lake is located in Kaghan Valley of District Mansehra, Khyber Pakhtunkhwa, Pakistan. It is located at an altitude of 13,927 feet (4245 meters) above sea level and considered among one of the highest lakes of Himalayas. The lake is situated near Malika Parbat, the highest mountain of Kaghan Valley.</p>
							</div>
						</div>

						<!-- News Post -->
						<div class="news_post">
							<div class="post_title"><a href="#">A day in Khewra mines</a></div>
							<div class="post_meta">
								<ul>
									<li>by admin</li>
									<li>April 12, 2018</li>
									<li><a href="#">3 comments</a></li>
								</ul>
							</div>
							<div class="post_image">
								<img src="images/news_3.png" alt="https://unsplash.com/@claudiotrigueros">
								<a href="#"><div class="post_image_box text-center">+</div></a>
							</div>
							<div class="post_text">
								<p>The Khewra Salt Mine is located in Khewra, north of Pind Dadan Khan, an administrative subdivision of Jhelum District, Punjab Region, Pakistan. The mine is located in the Salt Range, an outer range of the Himalaya Mountains which rises from the Indo-Gangetic Plain. It is Pakistan's largest, the world's 2nd largest.</p>
							</div>
						</div>

					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-3">
					<div class="sidebar">
						<div class="sidebar_search">
							<input type="search" class="sidebar_search_input" placeholder="Search">
						</div>

						<!-- Featured Posts -->
						<div class="sidebar_featured">

							<!-- Featured Post -->
							<div class="sidebar_featured_post">
								<div class="sidebar_featured_image"><img src="images/sidebar_featured_1.png" alt=""></div>
								<div class="sidebar_featured_title"><a href="#">Top destinations in Northern Areas</a></div>
								<div class="sidebar_featured_meta">
									<ul>
										<li>by admin</li>
										<li>September 21, 2019</li>
										<li><a href="#">3 comments</a></li>
									</ul>
								</div>
							</div>

							<!-- Featured Post -->
							<div class="sidebar_featured_post">
								<div class="sidebar_featured_image"><img src="images/sidebar_featured_2.png" alt=""></div>
								<div class="sidebar_featured_title"><a href="#">Best beaches in Balochistan</a></div>
								<div class="sidebar_featured_meta">
									<ul>
										<li>by admin</li>
										<li>April 22, 2019</li>
										<li><a href="#">3 comments</a></li>
									</ul>
								</div>
							</div>

							<!-- Featured Post -->
							<div class="sidebar_featured_post">
								<div class="sidebar_featured_image"><img src="images/sidebar_featured_3.png" alt=""></div>
								<div class="sidebar_featured_title"><a href="#">Historical Places around Pakistan</a></div>
								<div class="sidebar_featured_meta">
									<ul>
										<li>by admin</li>
										<li>September 31, 2019</li>
										<li><a href="#">3 comments</a></li>
									</ul>
								</div>
							</div>

						</div>

						<!-- Offers -->
						<div class="sidebar_offers">

							<!-- Offer -->
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

							<!-- Offer -->
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

						</div>

						<!-- Sidebar Quote -->
						<div class="sidebar_quote">
							<div class="quote_box"><img src="images/quote.png" alt=""></div>
							<div class="quote_text"><span>“Traveling</span> – it leaves you speechless, then turns you into a storyteller.”</div>
						</div>
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