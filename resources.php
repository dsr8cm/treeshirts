<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)

	Tree-Shirts by Daniel Rayder (dsr8cm), Nikhil Bharani (nb9ez), and John Light (jdl4cx)
-->
<?php
session_start();

if ( isset( $_SESSION['email'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
} else {
    // Redirect them to the login page
    header('Location: index.php');
}
?>
<html>
	<head>
		<title>Additional Resources</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><img width="25" height="25" src="https://theultralinx.com/.image/c_limit%2Ccs_srgb%2Cq_auto:good%2Cw_400/MTI5MDIzNDYzMjcxNzA1MjE5/mangrove1.webp">
					<a href="member-home.html">&nbsp&nbsp Tree-shirts <span></span></a></h1>
					<nav id="nav">
						<ul>
							<li ><a href="member-home.html">Welcome</a></li>
							<li class=""><a href="left-sidebar-member.html">About Us</a></li>
							<li ><a href="contact-member.html">Contact</a></li>
                            <li class="current"><a href="resources.php">Additional Resources</a></li>

							<!-- <li class="submenu">
								<a href="#">Shop</a>
								<ul>
									<li><a href="men-shop.html">Men's</a></li>
									<li><a href="women-shop.html">Women's</a></li>
									<li><a href="children-shop.html">Children</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li class="submenu">
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Dolore Sed</a></li>
											<li><a href="#">Consequat</a></li>
											<li><a href="#">Lorem Magna</a></li>
											<li><a href="#">Sed Magna</a></li>
											<li><a href="#">Ipsum Nisl</a></li>
										</ul>
									</li>
								</ul> -->
							</li>
							<li class=""><a href="children-shop-member.html">Shop</a></li>
							<li><a href="index.php" class="button primary">Logout</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-laptop"></span>
						<h2>Additional Resources</h2>
						<p>Check out these other great organizations to join our fight to save the planet!</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 container">

							<div class="row gtr-150">
								<div class="col-4 col-12-narrower">

									<!-- Sidebar -->
										<div class="sidebar">
											<section>
												<header>
													<h3>Our Partners</h3>
												</header>
												<p>We can't save the planet alone! These other activists are doing great work as well, make sure to give them some love!</p>
												<footer>
													<!-- <ul class="buttons">
														<li><a href="#" class="button small">Learn More</a></li>
													</ul> -->
												</footer>
											</section>

											<section>
												<a href="#" class="image featured"><img src="images/amazonWatch.jpg" alt="" /></a>
												<header>
													<h3>Amazon Watch</h3>
												</header>
												<p>Amazon Watch fights the destruction of the Amazon, supports Indigenous rights, and finds climate justice solutions.</p>
												<a href="https://amazonwatch.org">amazonwatch.org</a>
												<footer>
													<!-- <ul class="buttons">
														<li><a href="#" class="button small">Learn More</a></li>
													</ul> -->
												</footer>
											</section>

											<section>
												<a href="#" class="image featured"><img src="images/actLogo.png" alt="" /></a>
												<header>
													<h4>Amazon Conservation Team</h4>
												</header>
												<p>Amazon Conservation Team works hand-in-hand with Indigenous leaders to ensure the long-term welfare of the Amazon Rainforest.</p>
												<a href="https://www.amazonteam.org">amazonteam.org</a>
												<footer>
													<!-- <ul class="buttons">
														<li><a href="#" class="button small">Learn More</a></li>
													</ul> -->
												</footer>
											</section>

											<section>
												<a href="#" class="image featured"><img src="images/amCon.jpeg" alt="" /></a>
												<header>
													<h5>Amazon Conservation Association</h5>
												</header>
												<p>Amazon Conservation Association has trained hundreds of conservationists who work to support the restoration of the Amazon Rainforest and sustainable Indigenous-led economies. The organization has planted more than 275,000 trees to date. </p>
												<a href="https://www.amazonconservation.org">amazonconservation.org</a>
												<footer>
													<!-- <ul class="buttons">
														<li><a href="#" class="button small">Learn More</a></li>
													</ul> -->
												</footer>
											</section>

										</div>

								</div>
								<div class="col-8 col-12-narrower imp-narrower">

									<!-- Content -->
										<div class="content">
											<section>
												<a href="#" class="image featured"><img src="images/happyPerson.jpg" alt="" /></a>
												<header>
													<h3>Take Action</h3>
												</header>
												<p>Although planting trees is a great first step, it's not the only way that we can save the Amazon rainforests. Each of these organizations has a proven track record of conservation, and they need your help too!</p>
												<p>By donating to and supporting these groups, you can spread our message of peace and love even further! Not only do they work to regrow the rainforests by planting trees, they also take measures to put an end to harmful deforestation by standing up to greedy corporations and finding green solutions to problems that used to be solved by pillaging our planet.</p>
												<p>They also take measures to preserve the rich culture of the indigenous populace of the Amazon rainforest, so that their peaceful and harmonious existence can continue unfettered. By helping the original protectors of the forest, we can hopefully eliminate the need for outside groups to take action for them.</p>
												<p>Take a stand for one of the most beautiful yet vulnerable corners of our world, and do your part to protect the Amazon! </p>
												<a href="#" class="image featured"><img src="images/prettyTrees.jpg" alt="" /></a>
												<a href="#" class="image featured"><img src="images/planting-hands.jpg" alt="" /></a>
												<a href="#" class="image featured"><img src="images/amazon_dudes.jpg" alt="" /></a>
											</section>
										</div>

								</div>
							</div>
						</section>

					<!-- Two -->
					<!-- <section class="wrapper style1 container special">
							<div class="row">
								<div class="col-4 col-12-narrower">

									<section>
										<header>
											<h3>This is Something</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
										<footer>
											<ul class="buttons">
												<li><a href="#" class="button small">Learn More</a></li>
											</ul>
										</footer>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<header>
											<h3>Also Something</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
										<footer>
											<ul class="buttons">
												<li><a href="#" class="button small">Learn More</a></li>
											</ul>
										</footer>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<header>
											<h3>Probably Something</h3>
										</header>
										<p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
										<footer>
											<ul class="buttons">
												<li><a href="#" class="button small">Learn More</a></li>
											</ul>
										</footer>
									</section>

								</div>
							</div>
						</section>

				</article> -->

			<!-- Footer -->
				<!-- <footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands circle fa-google-plus-g"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer> -->

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
