<!DOCTYPE html>
<html lang="en">
<head>
<title>Calculator</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travellust project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
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
                                <li class="main_nav_item active"><a href="calculator.php">Calculator</a></li>
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
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/video.png" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Offers</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.php">Home</a></li>
									<li class="home_breadcrumb">Offers</li>
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
			<div class="find_background prlx" style="background-image:url(images/video.png)"></div>
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

	<!-- Offers -->

	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Top destinations in Europe</h2>
						<div>take a look at these offers</div>
					</div>
				</div>
			</div>
			<div class="row filtering_row">
				<div class="col">
					<div class="sorting_group_1">
						<ul class="item_sorting">
							<li>
								<span class="sorting_text">Filter by</span>
								<i class="fa fa-angle-down"></i>
								<ul>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Show All</span></li>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Name</span></li>
								</ul>
							</li>
							<li>
								<span class="sorting_text">Stars</span>
								<i class="fa fa-angle-down"></i>
								<ul>
									<li class="item_filter_btn" data-filter="*"><span>Show All</span></li>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Ascending</span></li>
									<li class="item_filter_btn" data-filter=".rating_1"><span>1</span></li>
									<li class="item_filter_btn" data-filter=".rating_2"><span>2</span></li>
									<li class="item_filter_btn" data-filter=".rating_3"><span>3</span></li>
									<li class="item_filter_btn" data-filter=".rating_4"><span>4</span></li>
									<li class="item_filter_btn" data-filter=".rating_5"><span>5</span></li>
								</ul>
							</li>
							<li>
								<span class="sorting_text">Price</span>
								<i class="fa fa-angle-down"></i>
								<ul>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
									<li class="item_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
								</ul>
							</li>
							<li>
								<span class="sorting_text">Facility</span>
								<i class="fa fa-angle-down"></i>
								<ul>
									<li><span>Facility</span></li>
									<li><span>Facility</span></li>
									<li><span>Facility</span></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="sorting_group_2 clearfix">
						<ul>
							<li>Airplane X</li>
							<li>5 stars X</li>
							<li>Romantic X</li>
						</ul>
						<div class="sorting_icons clearfix">
							<div class="detail_view"><i class="fa fa-bars" aria-hidden="true"></i></div>
							<div class="box_view"><i class="fa fa-th-large" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="items item_grid clearfix">

						<!-- Item -->
						<div class="item clearfix rating_5">
							<div class="item_image"><img src="images/top_1.jpg" alt=""></div>
							<div class="item_content">
								<div class="item_price">From $890</div>
								<div class="item_title">Paris, France</div>
								<ul>
									<li>1 person</li>
									<li>4 nights</li>
									<li>3 star hotel</li>
								</ul>
								<div class="rating rating_5" data-rating="5">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="item_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh. Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis orci id lacus convallis tempus eget sit amet metus.</div>
								<div class="item_more_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- Item -->
						<div class="item clearfix rating_3">
							<div class="item_image"><img src="images/top_2.jpg" alt=""></div>
							<div class="item_content">
								<div class="item_price">From $290</div>
								<div class="item_title">Cinque Terre</div>
								<ul>
									<li>1 person</li>
									<li>4 nights</li>
									<li>3 star hotel</li>
								</ul>
								<div class="rating rating_3" data-rating="3">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="item_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh. Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis orci id lacus convallis tempus eget sit amet metus.</div>
								<div class="item_more_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- Item -->
						<div class="item clearfix rating_4">
							<div class="item_image"><img src="images/top_3.jpg" alt=""></div>
							<div class="item_content">
								<div class="item_price">From $590</div>
								<div class="item_title">Italian Riviera</div>
								<ul>
									<li>1 person</li>
									<li>4 nights</li>
									<li>3 star hotel</li>
								</ul>
								<div class="rating rating_4" data-rating="4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="item_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh. Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis orci id lacus convallis tempus eget sit amet metus.</div>
								<div class="item_more_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- Item -->
						<div class="item clearfix rating_5">
							<div class="item_image"><img src="images/top_4.jpg" alt=""></div>
							<div class="item_content">
								<div class="item_price">From $490</div>
								<div class="item_title">Santorini, Greece</div>
								<ul>
									<li>1 person</li>
									<li>4 nights</li>
									<li>3 star hotel</li>
								</ul>
								<div class="rating rating_5" data-rating="5">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<div class="item_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh. Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis orci id lacus convallis tempus eget sit amet metus.</div>
								<div class="item_more_link"><a href="#">Read More</a></div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="pages">
						<ul class="pages_list">
							<li class="page active"><a href="#">01.</a></li>
							<li class="page"><a href="#">02.</a></li>
							<li class="page"><a href="#">03.</a></li>
							<li class="page"><a href="#">04.</a></li>
						</ul>
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
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>
</body>
</html>