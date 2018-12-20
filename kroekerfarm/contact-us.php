<?php include_once("partials/header.php");
$base_url = "http://" . $_SERVER['SERVER_NAME'] . ":8080/kroekerfarm"; ?>
		
<main id="contact-us" data-base-url="<?php echo $base_url; ?>">
	<div class="contact-header">
		<h1>Contact Us</h1>
	</div>
	<p>
		Kroeker Farms Ltd.<br><span>777 Circle K Drive</span><br>Winkler, MB  R6W 0K7
	</p>
	<p>
		email <span>info@kroekerfarms.com</span><br>
		phone <span>1.204.325.4333</span>
	</p>
	<div id="map"></div>
</main>

<script type="text/javascript" src="js/map-init.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7-VUp-2L1Qw7W04z_yz83m_R7uZ85xd8&callback=initMap"></script>

<?php include_once("partials/footer.php"); ?>