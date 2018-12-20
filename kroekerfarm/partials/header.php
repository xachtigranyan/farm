<!DOCTYPE html>
<html>
	<head>
		<title>Kroeker Farm</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<script src="js/jquery-3.2.1.min.js"></script>
		<!-- <base href="/kroekerfarm/"> -->
	</head> <?php
	$homeurl = '/kroekerfarm/';
	$currentpage = $_SERVER['REQUEST_URI'];
	if($currentpage != $homeurl) {
		$body_class = str_replace(["/", "kroekerfarm", ".php"], "", $currentpage);
	}
	?>
	<body data-current="<?php echo $body_class; ?>">
		<header>
			<div class="header-top">
				<div class="header-top-block">
					<div class="header-top-menu">
						<ul class="clearfix">
							<li><a href="#"> Recipes</a></li>
							<li><a href="#"> Careers</a></li>
							<li><a href="contact-us.php"> Contact us</a></li>
						</ul>
					</div>
					<div class="header-top-social">
						<ul class="clearfix">
							<li>
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="header-main">
				<div class="header-main-content">
					<ul class="main-nav">
						<li data-current="brands"><a href="brands.php">Brands</a></li>
						<li data-current="potatoes"><a href="potatoes.php">Potatoes</a></li>
						<li data-current="contact-us"><a href="contact-us.php">Organic Crops</a></li>
						<li data-current="seed"><a href="seed.php">Seed Potatoes</a></li>
						<li data-current="contact-us"><a href="contact-us.php">Our Story</a></li>
						<li data-current="contact-us"><a href="contact-us.php">How We Grow</a></li>
						<li data-current="contact-us"><a href="contact-us.php">Where To Buy</a></li>
					</ul>
					<div class="header-logo">	
						<a href="/kroekerfarm/"><img src="images/Logo - white text copy.png" alt="Kroeker Farm"></a>
					</div> <?php
					if($currentpage == $homeurl): ?>
						<p class="hompage-text">We’re growing more using less.<br/>We call it farming for the next generation.</p>
						<img src="images/Potatoes-32178.png" alt="kortol" class="kortol"> <?php
					endif; ?>
				</div>
			</div>
		</header>