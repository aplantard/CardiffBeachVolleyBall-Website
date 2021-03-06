<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Venue Hire</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal-default-theme.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="remodal-bg">

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo"><img src="images/logo.PNG"></a>
					</header>

				<!-- Nav -->
				<nav id="nav">
					<ul class="links">
						<li><a href="index.php">Home</a></li>
						<li><a href="donate.php">Donate</a></li>
						<li><a href="theTeam.php">Meet The Team</a></li>
						<li><a href="#">Play</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="events.php">Events</a></li>
						<li><a href="#">Training</a></li>
						<li><a href="venuehire.php">Venue Hire</a></li>
						<li class="active"><a href="gallery.php">Gallery</a></li>
					</ul>
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>	
						<li><a href="#" class="icon fa-youtube"><span class="label">Youtube</span></a></li>
					</ul>
				</nav>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="major">
									<h1>Gallery</h1>
								</header>
								<div class="grid js-masonry row gtr-50 gtr-uniform" data-masonry-options='{ "itemSelector": ".col-4", "columnWidth": ".col-4", "percentPosition":"true"}'>
									<div class="col-4">
										<span class="image fit">
											<a href="#Modal" onclick="$('.carrousel').slick('slickGoTo',0)"><img src="images/gallery/gallery1.jpg"></a>
										</span>
									</div>
									<div class="col-4">
										<span class="image fit">
											<a href="#Modal" onclick="$('.carrousel').slick('slickGoTo',1)"><img src="images/gallery/gallery2.jpg"></a>
										</span>
									</div>
									<div class="col-4">
										<span class="image fit">
											<a href="#Modal" onclick="$('.carrousel').slick('slickGoTo',2)"><img src="images/gallery/gallery3.jpg"></a>
										</span>
									</div>
									<div class="col-4">
										<span class="image fit">
											<a href="#Modal" onclick="$('.carrousel').slick('slickGoTo',3)"><img src="images/gallery/gallery4.jpg"></a>
										</span>
									</div>
									<div class="col-4">
										<span class="image fit">
											<a href="#Modal" onclick="$('.carrousel').slick('slickGoTo',4)"><img src="images/gallery/gallery5.jpg"></a>
										</span>
									</div>
									<div class="col-4">
										<span class="image fit">
											<a href="#Modal" onclick="$('.carrousel').slick('slickGoTo',5)"><img src="images/gallery/gallery6.jpg"></a>
										</span>
									</div>
									<div class="col-4">
										<span class="image fit">
											<a href="#Modal" onclick="$('.carrousel').slick('slickGoTo',5)"><img src="images/gallery/gallery7.jpg"></a>
										</span>
									</div>
									<div class="col-4">
										<span class="image fit">
											<a href="#Modal" onclick="$('.carrousel').slick('slickGoTo',5)"><img src="images/gallery/gallery8.jpg"></a>
										</span>
									</div>
									<div class="col-4">
										<span class="image fit">
											<a href="#Modal" onclick="$('.carrousel').slick('slickGoTo',5)"><img src="images/gallery/gallery9.jpg"></a>
										</span>
									</div>
								</div>
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
						</section>
						<section class="split contact">
								<section class="alt">
									<h3>Address</h3>
									<div>
										<p>Victoria Park Canton Cardiff CF5 1EY</p>
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2089.2266056264484!2d-3.2199301939208507!3d51.48526670702068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486e1b4749af9e8d%3A0xa4c4eabddf38a1a9!2sCardiff+Beach+Volleyball!5e0!3m2!1sen!2suk!4v1533047268321" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</section>
								<section>
									<h3>Phone</h3>
									<div>
										<h4>office</h4>
										<p><a href="tel:02920 569 875">02920 569 875</a></p>
										<h4>General Enquiries</h4>
										<p><a href="tel:0789 9902 556">Mike Constantinou : 0789 9902 556</a></p>
										<p><a href="tel:0754 5938 071">Carl Harwood : 0754 5938 071</a></p>
										<h4>Training Classes</h4>
										<p><a href="tel:0790 0672 499">Julia Constantinou : 0790 0672 499</a></p>
									</div>
								</section>
								<section>
									<h3>Email</h3>
									<div>
										<h4>General</h4>
										<p><a href="mailto:cardiffbeachvolleyball@gmail.com">cardiffbeachvolleyball@gmail.com</a></p>
										<h4>Training</h4>
										<p><a href="mailto:cardiffbeachvolleyballtraining@gmail.com">cardiffbeachvolleyballtraining@gmail.com</a></p>
									</div>
								</section>
								<section>
									<h3>Social</h3>
									<ul class="icons alt">
										<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="https://www.facebook.com/groups/1455629078075388/	" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="https://www.youtube.com/channel/UCKGjhBvi7PCV72vW1-3NTGQ" class="icon alt fa-youtube"><span class="label">Youtube</span></a></li>
									</ul>
								</section>
							</section>
					</footer>

				<!-- Copyright -->
				<?php
						include('copyright.php');
					?>

					<div class="remodal" data-remodal-id="Modal">
						<button data-remodal-action="close" class="remodal-close"></button>
						<div class="carrousel">
							<img src="images/gallery/gallery1.jpg">
							<img src="images/gallery/gallery2.jpg">
							<img src="images/gallery/gallery3.jpg">
							<img src="images/gallery/gallery4.jpg">
							<img src="images/gallery/gallery5.jpg">
							<img src="images/gallery/gallery6.jpg">
							<img src="images/gallery/gallery7.jpg">
							<img src="images/gallery/gallery8.jpg">
							<img src="images/gallery/gallery9.jpg">
						</div>
						<div class="minicarrousel">
							<img src="images/gallery/gallery1.jpg">
							<img src="images/gallery/gallery2.jpg">
							<img src="images/gallery/gallery3.jpg">
							<img src="images/gallery/gallery4.jpg">
							<img src="images/gallery/gallery5.jpg">
							<img src="images/gallery/gallery6.jpg">
							<img src="images/gallery/gallery7.jpg">
							<img src="images/gallery/gallery8.jpg">
							<img src="images/gallery/gallery9.jpg">
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
			<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$('.carrousel').slick({
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows: true,
						fade: true,
						asNavFor: '.minicarrousel',
						adaptiveHeight: true
					});
					$('.minicarrousel').slick({
						slidesToShow: 3,
  						slidesToScroll: 1,
  						asNavFor: '.carrousel',
						centerMode: true,
						arrows: false,
  						focusOnSelect: true,
					});
				});
			</script>

	</body>
</html>