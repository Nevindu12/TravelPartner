<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Page</title>
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<link rel="stylesheet" href="../css/aboutstyle.css">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
</head>

<body>
	<section class="sub-header">
		<nav>
			<a href="../Welcome page.html"><img src="../logos&videos/TraveL PARTNER.png" alt=""></a>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onClick="hideMenu()"></i>
				<ul>
					<li><a href="fullpage.php">Home</a></li>
					<li><a href="gallerypage.php">Gallery</a></li>
					<li><a href="servicespage.php">Services</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="contactus.php">Contact</a></li>
					<li><a href="profilepage.php">Profile</a></li>
				</ul>
			</div>	
			<i class="fa fa-bars" onClick="showMenu()"></i>
		</nav>	
		<h1>About Us</h1>
	</section>

<!-------------content---------->
	<section class="aboutus">
		<div class="row">
			<div class="about-col">
				<h1>Sri Lanka's best Travel company</h1>
				<p>A travel agency is a private retailer or public service that provides travel and tourism-related services to the general public on behalf of accommodation or travel suppliers to offer different kinds of travelling packages for each destination. A travel agency is a private retailer or public service that provides travel and tourism-related services to the general public on behalf of accommodation or travel suppliers to offer different kinds of travelling packages for each destination.
				</p>
				
				<a id="ex" href="fullpage.php"><button type="submit" class="btn btn-back">EXPLORE NOW</button></a>	
			
			</div>
			<div class="about-col">
				<img src="../logos&videos/aboutwal2.jpeg" alt="">
			</div>
			
		</div>
		
	</section>
	
<!-------footer------->	
	<section class="footer">
		<hr>
		<h4>About Us</h4>
		<p>A travel agency is a private retailer or public service that provides <br>travel and tourism-related services to the general public on behalf of accommodation or travel <br>suppliers to offer different kinds of travelling packages for each destination.</p>
		<div class="icons">
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-instagram"></i>
		</div>
		<p>powerd by ©travelpartner 2022</p>
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
