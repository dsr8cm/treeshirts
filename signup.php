<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sign In</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="contact is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
          <h1 id="logo"><img width="25" height="25" src="https://theultralinx.com/.image/c_limit%2Ccs_srgb%2Cq_auto:good%2Cw_400/MTI5MDIzNDYzMjcxNzA1MjE5/mangrove1.webp">
          <a href="index.php">&nbsp&nbsp Tree-shirts <span></span></a></h1>
          <nav id="nav">
						<ul>
							<li><a href="index.php">Welcome</a></li>
              				<li><a href="left-sidebar.html">About Us</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="resources.php">Additional Resources</a></li>
              <!-- <li class="submenu">
								<a href="#">Shop</a>
								<ul>
                  <li><a href="men-shop.html">Men's</a></li>
									<li><a href="women-shop.html">Women's</a></li>
									<li><a href="children-shop.html">Children</a></li>
                </ul>-->
              </li>
              <li><a href="signin.html" class="button primary">Sign In</a></li>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-envelope"></span>
						<h2>Sign up and join the family!</h2>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
									<form id="insert" name="insert" action="signup.php" method="POST">
										<?php include 'submit.php'; $error = '';?>
										<div class="row gtr-50">
											<div class="col-12">
												<center>Use the form below to sign up for your account.</center>
											</div>
											<div class="col-12">
												<input type="text" name="username" placeholder="Name" required pattern = '^[a-zA-Z]*$' required pattern = '/^$|\s+/'/>
                      </div>
											<div class="col-12">
												<input type="text" name="email" placeholder="Email Address" required pattern = '^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$'/>
											</div>
											<div class="col-12">
												<input type="text" name="address" placeholder="Address" required pattern = '^\d+\s[A-z]+\s[A-z]+'/>
                      </div>
                      <div class="col-12">
												<input type="text" name="city" placeholder="City" required pattern = '^[a-zA-Z]*$'/>
                      </div>
											<!-- <div class="col-12">
												<input type="text" name="subject" placeholder="State" />
                      </div> -->

										<style>
											/* The container must be positioned relative: */
											.custom-select {
												position: relative;
												font-family: Arial;
											}

											.custom-select select {
												display: none; /*hide original SELECT element: */
											}

											.select-selected {
												background-color: #ffffff;
											}

											/* Style the arrow inside the select element: */
											.select-selected:after {
												position: absolute;
												content: "";
												top: 14px;
												right: 10px;
												width: 0;
												height: 0;
												border: 6px solid transparent;
												border-color: #fff transparent transparent transparent;
											}

											/* Point the arrow upwards when the select box is open (active): */
											.select-selected.select-arrow-active:after {
												border-color: transparent transparent #fff transparent;
												top: 7px;
											}

											/* style the items (options), including the selected item: */
											.select-items div,.select-selected {
												color: #bfbfbf;
												padding: 8px 16px;
												border: 1px solid transparent;
												border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
												cursor: pointer;
											}

											/* Style items (options): */
											.select-items {
												position: absolute;
												background-color: #ffffff;
												top: 100%;
												left: 0;
												right: 0;
												z-index: 99;
											}

											/* Hide the items when the select box is closed: */
											.select-hide {
												display: none;
											}

											.select-items div:hover, .same-as-selected {
												background-color: rgba(0, 0, 0, 0.1);
											}
										</style>

												<div class="custom-select" style="width:200px;">
												<select name = "myList">
													<option value = "Alabama">Alabama</option>
													<option value = "Alaska">Alaska</option>
													<option value = "Arizona">Arizona</option>
													<option value = "Arkansas">Arkansas</option>
													<option value = "California">California</option>
													<option value = "Colorado">Colorado</option>
													<option value = "Connecticut">Connecticut</option>
													<option value = "Delaware">Delaware</option>
													<option value = "Florida">Florida</option>
													<option value = "Georgia">Georgia</option>
													<option value = "Hawaii">Hawaii</option>
													<option value = "Idaho">Idaho</option>
													<option value = "Illinois">Illinois</option>
													<option value = "Indiana">Indiana</option>
													<option value = "Iowa">Iowa</option>
													<option value = "Kansas">Kansas</option>
													<option value = "Kentucky">Kentucky</option>
													<option value = "Louisiana">Louisiana</option>
													<option value = "Maine">Maine</option>
													<option value = "Maryland">Maryland</option>
													<option value = "Massachusetts">Massachusetts</option>
													<option value = "Michigan">Michigan</option>
													<option value = "Minnesota">Minnesota</option>
													<option value = "Mississippi">Mississippi</option>
													<option value = "Missouri">Missouri</option>
													<option value = "Montana">Montana</option>
													<option value = "Nebraska">Nebraska</option>
													<option value = "Nevada">Nevada</option>
													<option value = "New Hampshire">New Hampshire</option>
													<option value = "New Jersey">New Jersey</option>
													<option value = "New Mexico">New Mexico</option>
													<option value = "New York">New York</option>
													<option value = "North Carolina">North Carolina</option>
													<option value = "North Dakota">North Dakota</option>
													<option value = "Ohio">Ohio</option>
													<option value = "Oklahoma">Oklahoma</option>
													<option value = "Oregon">Oregon</option>
													<option value = "Pennsylvania">Pennsylvania</option>
													<option value = "Rhode Island">Rhode Island</option>
													<option value = "South Carolina">South Carolina</option>
													<option value = "South Dakota">South Dakota</option>
													<option value = "Tennessee">Tennessee</option>
													<option value = "Texas">Texas</option>
													<option value = "Utah">Utah</option>
													<option value = "Vermont">Vermont</option>
													<option value = "Virginia">Virginia</option>
													<option value = "Washington">Washington</option>
													<option value = "West Virginia">West Virginia</option>
													<option value = "Wisconsin">Wisconsin</option>
													<option value = "Wyoming">Wyoming</option>
												</select>
											</div>

											<script>
												var x, i, j, selElmnt, a, b, c;
												/* Look for any elements with the class "custom-select": */
												x = document.getElementsByClassName("custom-select");
												for (i = 0; i < x.length; i++) {
  												selElmnt = x[i].getElementsByTagName("select")[0];
  												/* For each element, create a new DIV that will act as the selected item: */
  												a = document.createElement("DIV");
  												a.setAttribute("class", "select-selected");
  												a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  												x[i].appendChild(a);
  												/* For each element, create a new DIV that will contain the option list: */
  												b = document.createElement("DIV");
  												b.setAttribute("class", "select-items select-hide");
  												for (j = 1; j < selElmnt.length; j++) {
    												/* For each option in the original select element, create a new DIV that will act as an option item: */
    												c = document.createElement("DIV");
    												c.innerHTML = selElmnt.options[j].innerHTML;
    												c.addEventListener("click", function(e) {
        										/* When an item is clicked, update the original select box, and the selected item: */
        											var y, i, k, s, h;
        											s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        											h = this.parentNode.previousSibling;
        											for (i = 0; i < s.length; i++) {
          											if (s.options[i].innerHTML == this.innerHTML) {
            											s.selectedIndex = i;
            											h.innerHTML = this.innerHTML;
            											y = this.parentNode.getElementsByClassName("same-as-selected");
            											for (k = 0; k < y.length; k++) {
              											y[k].removeAttribute("class");
            											}
            											this.setAttribute("class", "same-as-selected");
            											break;
          											}
        											}
        											h.click();
    												});
    												b.appendChild(c);
  												}
  												x[i].appendChild(b);
  												a.addEventListener("click", function(e) {
    												/* When the select box is clicked, close any other select boxes, and open/close the current select box: */
    												e.stopPropagation();
    												closeAllSelect(this);
    												this.nextSibling.classList.toggle("select-hide");
    												this.classList.toggle("select-arrow-active");
  												});
												}

												function closeAllSelect(elmnt) {
  												/* A function that will close all select boxes in the document, except the current select box: */
  												var x, y, i, arrNo = [];
  												x = document.getElementsByClassName("select-items");
  												y = document.getElementsByClassName("select-selected");
  												for (i = 0; i < y.length; i++) {
    												if (elmnt == y[i]) {
      												arrNo.push(i)
    											} else {
      												y[i].classList.remove("select-arrow-active");
    												}
  												}
  												for (i = 0; i < x.length; i++) {
    												if (arrNo.indexOf(i)) {
      												x[i].classList.add("select-hide");
    											}
  											}
											}

											/* If the user clicks anywhere outside the select box, then close all select boxes: */
											document.addEventListener("click", closeAllSelect);
										</script>

                      <div class="col-12">
												<input type="text" name="zip" placeholder="Zip Code" required pattern = '^[0-9]{5}$'/>
											</div>
											<div class="col-12">
												<input type="password" name="password" placeholder="Password" />
											</div>
                      <br>
											<div class="col-12">
												<ul class="buttons">
													<li><input type="submit" class="special" value="Sign Up" /></li>
												</ul>
											</div>
											</form>
                      <br>
                      <div class="col-12">
                        <center>Already have an account? Sign in <a href="signin.html">here</a>!</center>
                      </div>
										</div>

								</div>

						</section>

				</article>

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
