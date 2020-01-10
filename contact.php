<?php
    include 'travellust-admin/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travellust project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;  /* The height is 400 pixels */
            width: 100%;  /* The width is the width of the web page */
        }
    </style>
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
                                <li class="main_nav_item"><a href="about.php">About us</a></li>
                                <li class="main_nav_item active"><a href="contact.php">Contact</a></li>
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact_background.png" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Contact</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.php">Home</a></li>
									<li class="home_breadcrumb">Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="contact_title">Get in touch</div>
					<div class="contact_subtitle">say hello</div>
				</div>
			</div>
			<div class="row contact_content">
				<div class="col-lg-5">
					<div class="contact_text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh. Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis orci id lacus convallis tempus eget sit amet metus.</p>
					</div>
					<div class="contact_info">
						<div class="contact_info_box">i</div>
						<div class="contact_info_container">
							<div class="contact_info_content">
								<ul>
									<li>Address:  Street# 1, Block-A, Younus Town, Faisalabad</li>
									<li>Phone:  +92 308 57 49 580</li>
									<li>Email:  travellustclub@gmail.com</li>
								</ul>
							</div>
							<div class="contact_info_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="https://www.pinterest.com/travellustclub/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="https://www.facebook.com/TravellustClub/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="https://twitter.com/TravellustClub"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact_form_container">
						<form method="post" action="contact.php" id="contact_form" class="clearfix">
							<input id="contact_input_name" name="con_name" class="contact_input contact_input_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
							<input id="contact_input_email" name="con_email" class="contact_input contact_input_email" type="text" placeholder="E-mail" required="required" data-error="E-mail is required.">
							<input id="contact_input_subject" name="con_sub" class="contact_input contact_input_subject" type="text" placeholder="Subject">
							<textarea id="contact_input_message" name="con_msg" class="contact_message_input contact_input_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button id="contact_send_btn" type="submit" name="contact" class="contact_send_btn trans_200">Send</button>
						</form>
					</div>
				</div>
			</div>
			<div class="row contact_map">
				<!-- Google Map -->

				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map"></div>
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
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var faisalabad = {lat: 31.4504, lng: 73.1350};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: faisalabad});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: faisalabad, map: map});
    }
</script>
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
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCR17C-wsRf4Gr3ZktBPzcvLdiK7Z_eoMA&callback=initMap">
</script>
<script src="js/contact_custom.js"></script>
</body>
</html>

<?php
	if(isset($_POST['contact'])){
		$name = $_POST['con_name'];
		$email = $_POST['con_email'];
		$subject = $_POST['con_sub'];
		$message = $_POST['con_msg'];

		$insertContact = "insert into contacts(contact_name,contact_email,contact_subject,contact_message) values ('$name','$email','$subject','$message')";
		$run = mysqli_query($connection, $insertContact) or die(mysqli_error($connection));
		if($run){
			echo "<script>alert('Thanks for contacting to us...!Your Message has been sent...!')</script>";
			echo "<script>window.open('contact.php','_self')</script>";
		} else {
			echo "<script>alert('There somes some error...!')</script>";
			echo "<script>window.open('contact.php','_self')</script>";
		}
	}
?>