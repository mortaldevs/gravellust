<!DOCTYPE html>
<html lang="en">
<head>
<title>Travellust Club</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travellust project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
                                <li class="main_nav_item active"><a href="index.php">Home</a></li>
                                <li class="main_nav_item"><a href="calculator.php">Calculator</a></li>
                                <li class="main_nav_item"><a href="blogs.php">Blogs</a></li>
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
		<div class="home_background" style="background-image:url(images/video.png)"></div>
		<div class="home_content">
			<div class="home_content_inner">
				<div class="home_text_large">Travellust</div>
				<div class="home_text_small">Travel to new worlds</div>
			</div>
		</div>
	</div>

	<!-- Find Form -->

<!--	<div class="find">
		 Image by https://unsplash.com/@garciasaldana_
		<div class="find_background parallax-window" data-parallax="scroll" data-image-src="images/find.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="find_title text-center">Calculate the Adventure of a lifetime</div>
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
							<button class="button find_button">Calculate</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Top Destinations -->

	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Top destinations in Pakistan</h2>
						<div>take a look at these destinations</div>
					</div>
				</div>
			</div>
			<div class="row top_content">

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="#">
							<div class="top_item_image"><img src="images/top_1.png" alt="https://unsplash.com/@sgabriel"></div>
							<div class="top_item_content">
								<div class="top_item_price">Hunza,</div>
								<div class="top_item_text">Gilgit Baltistan</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="#">
							<div class="top_item_image"><img src="images/top_2.png" alt="https://unsplash.com/@jenspeter"></div>
							<div class="top_item_content">
								<div class="top_item_price">Kumrat Valley,</div>
								<div class="top_item_text">Khyber Pakhtunkhwa</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="#">
							<div class="top_item_image"><img src="images/top_3.png" alt="https://unsplash.com/@anikindimitry"></div>
							<div class="top_item_content">
								<div class="top_item_price">Skardu,</div>
								<div class="top_item_text">Gilgit Baltistan</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						<a href="#">
							<div class="top_item_image"><img src="images/top_4.png" alt="https://unsplash.com/@hellolightbulb"></div>
							<div class="top_item_content">
								<div class="top_item_price">Neelum Valley,</div>
								<div class="top_item_text">Azad Kashmir</div>
							</div>
						</a>	
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Last -->

	<!--<div class="last">
		 Image by https://unsplash.com/@thanni
		<div class="last_background parallax-window" data-parallax="scroll" data-image-src="images/last.jpg" data-speed="0.8"></div>

		<div class="container">
			<div class="row">
				<div class="last_logo"><img src="images/last_logo.png" alt=""></div>
				<div class="col-lg-6 last_col">
					<div class="last_item">
						<div class="last_item_content">
							<div class="last_subtitle">maldive</div>
							<div class="last_percent">50%</div>
							<div class="last_title">Last Minute Offer</div>
							<div class="last_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel.</div>
							<div class="button last_button"><a href="calculator.php">See Offer</a></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 last_col">
					<div class="last_item">
						<div class="last_item_content">
							<div class="last_subtitle">bali</div>
							<div class="last_percent">38%</div>
							<div class="last_title">Last Minute Offer</div>
							<div class="last_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar sed mauris eget tincidunt. Sed lectus nulla, tempor vel.</div>
							<div class="button last_button"><a href="calculator.php">See Offer</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Video -->

	<div class="video_section d-flex flex-column align-items-center justify-content-center">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="video_background parallax-window" data-parallax="scroll" data-image-src="images/home.png" data-speed="0.8"></div>
		<div class="video_content">
			<div class="video_title">A day in Pakistan</div>
			<div class="video_subtitle">A video made by Bleed Green</div>
			<div class="video_play">
				<a  class="video" href="https://www.youtube.com/watch?v=vWfM-tSJUYo">
					<svg version="1.1" id="Layer_1" class="play_button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="140px" height="140px" viewBox="0 0 140 140" enable-background="new 0 0 140 140" xml:space="preserve">
						<g id="Layer_2">
							<circle class="play_circle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" cx="70.333" cy="69.58" r="68.542"/>
							<polygon class="play_triangle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" points="61.583,56 61.583,84.417 84.75,70 	"/>
						</g>
					</svg>
				</a>
			</div>
		</div>
	</div>

	<!-- Popular -->

	<div class="popular">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Popular destinations in 2020</h2>
						<div>take a look at these destinations</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="popular_content d-flex flex-md-row flex-column flex-wrap align-items-md-center align-items-start justify-content-md-between justify-content-start">
						
						<!-- Popular Item -->
						<div class="popular_item">
							<a href="calculator.php">
								<img src="images/popular_1.png" alt="image by Egzon Bytyqi">
								<div class="popular_item_content">
									<div class="popular_item_price">Fairy Meadows,</div>
									<div class="popular_item_title">Gilgit Baltistan</div>
								</div>
							</a>	
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="calculator.php">
								<img src="images/popular_2.png" alt="https://unsplash.com/@michael75">
								<div class="popular_item_content">
									<div class="popular_item_price">Sapat Beach,</div>
									<div class="popular_item_title">Balochistan</div>
								</div>
							</a>	
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="calculator.php">
								<img src="images/popular_3.png" alt="https://unsplash.com/@sapegin">
								<div class="popular_item_content">
									<div class="popular_item_price">Attabad Lake,</div>
									<div class="popular_item_title">Gilgit Baltistan</div>
								</div>
							</a>	
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="calculator.php">
								<img src="images/popular_4.png" alt="https://unsplash.com/@kensuarez">
								<div class="popular_item_content">
									<div class="popular_item_price">Panjpeer Rocks,</div>
									<div class="popular_item_title">Punjab</div>
								</div>
							</a>
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="calculator.php">
								<img src="images/popular_5.png" alt="https://unsplash.com/@noahbasle">
								<div class="popular_item_content">
									<div class="popular_item_price">Gorakh Hill Station,</div>
									<div class="popular_item_title">Sindh</div>
								</div>
							</a>
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="calculator.php">
								<img src="images/popular_6.png" alt="https://unsplash.com/@seb">
								<div class="popular_item_content">
									<div class="popular_item_price">Kalam Valley,</div>
									<div class="popular_item_title">Khyber Pakhtunkhwa</div>
								</div>
							</a>
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="calculator.php">
								<img src="images/popular_7.png" alt="https://unsplash.com/@nevenkrcmarek">
								<div class="popular_item_content">
									<div class="popular_item_price">Shounter Lake,</div>
									<div class="popular_item_title">Azad Kashmir</div>
								</div>
							</a>	
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="calculator.php">
								<img src="images/popular_8.png" alt="https://unsplash.com/@bergeryap87">
								<div class="popular_item_content">
									<div class="popular_item_price">Makran Coastal Highway,</div>
									<div class="popular_item_title">Balochistan</div>
								</div>
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Special -->

	<div class="special">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Cultures</h2>
						<div>take a look at these Cultures</div>
					</div>
				</div>
			</div>
		</div>
		<div class="special_content">
			<div class="special_slider_container">
				<div class="owl-carousel owl-theme special_slider">
					
					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item">
							<div class="special_item_background"><img src="images/special_1.png" alt="https://unsplash.com/@garciasaldana_"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Truck Art</div>
								<div class="special_title"><a href="calculator.php">Culture</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_2.png" alt="https://unsplash.com/@varshesh"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Food</div>
								<div class="special_title"><a href="calculator.php">Culture</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_3.png" alt="https://unsplash.com/@paulgilmore_"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Dress</div>
								<div class="special_title"><a href="calculator.php">Culture</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_4.png" alt="https://unsplash.com/@hellolightbulb"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Music</div>
								<div class="special_title"><a href="calculator.php">Culture</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_5.png" alt="https://unsplash.com/@dnevozhai"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Sports</div>
								<div class="special_title"><a href="calculator.php">Culture</a></div>
							</div>
						</div>
					</div>

				</div>

				<div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
					<img src="images/special_slider.png" alt="">
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>