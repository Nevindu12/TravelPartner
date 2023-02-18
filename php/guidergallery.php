<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Guider Gallery Page</title>
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<link rel="stylesheet" href="../css/guiderstyle.css">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
</head>

<body>
	
	<section class="sub-header">
		<nav>
			<a href="../Welcome page.html"><img src="../logos&videos/TraveL PARTNER.png" alt=""></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onClick="hideMenu()"></i>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="gallerypage.php">Gallery</a></li>
					<li><a href="servicespage.php">Services</a></li>
					<li><a href="aboutpage.php">About Us</a></li>
					<li><a href="contactus.php">Contact</a></li>
					<li><a href="profilepage.php">Profile</a></li>
				</ul>
			</div>	
			<i class="fa fa-bars" onClick="showMenu()"></i>
		</nav>	
		<h1>Guiders</h1>
	</section>
	
<!-------guider-------->
	
	<section class="guider">
		<h1>Our Guiders</h1>
		<br>
		<div class="row">
			
			<?php
			$con = mysqli_connect("localhost", "root", "", "travelpartner");  
			
			if (!$con) {
            die("Connect to a database");
				}
			
			$sql = "SELECT * FROM `guider`";
			
			 $result = mysqli_query($con, $sql);
			
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<div class='guider-col'>
					<img src='".$row['pp']."' alt=''>
				<div>
					<p>'".$row['bio']."'</p>
					<h3>'".$row['name']."'</h3>
					<br>
					<i class='fa fa-star'></i>
					<i class='fa fa-star'></i>
					<i class='fa fa-star'></i>
					<i class='fa fa-star'></i>
					<i class='fa fa-star-o'></i>
					<a href='' class='hire'>Hire</a>
				</div>
			</div>";
					
					}}

			?>
			
			
			
		</div>
			
	</section>
	
	
	
<!-------footer------->	
	<section class="footer">
		<h4>About Us</h4>
		<p>A travel agency is a private retailer or public service that provides <br>travel and tourism-related services to the general public on behalf of accommodation or travel <br>suppliers to offer different kinds of travelling packages for each destination.</p>
		<div class="icons">
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-instagram"></i>
		</div>
		<p>powerd by @nevindu</p>
	</section>
	
	

<!----------------------javaScript---------------->	
	<script>
		var navLinks = document.getElementById("navLinks");
		
		function showMenu(){
			navLinks.style.right = "0";
		}
		function hideMenu(){
			navLinks.style.right = "-200px";
		}
	</script>
	
</body>
</html>