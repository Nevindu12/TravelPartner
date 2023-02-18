<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Services Page</title>
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<link rel="stylesheet" href="../css/servicestyle.css">	
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
					<li><a href="#">Services</a></li>
					<li><a href="aboutpage.php">About Us</a></li>
					<li><a href="contactus.php">Contact</a></li>
					<li><a href="profilepage.php">Profile</a></li>
				</ul>
			</div>	
			<i class="fa fa-bars" onClick="showMenu()"></i>
		</nav>	
		<h1>Our Services</h1>
	</section>

<!-------------content---------->
	<section class="Services">
		<h1>Services We Offer</h1>
		<div class="para">
			<p>boer ijspug jsdfnoi lskadfoj klsdlfjp fjs; sofjo ojskfm ojs;fj s.ms;of </p>
		</div>	
		
		<div class="row">
			<div class="serv-col">
				<ul>
					<li><a href="./cameragallery.php"><h3>Rent Cameras</h3>
					<p>A DSLR camera works by use of a reflex mirror (or prism) that reflects light into the optical viewfinder, allowing the photographer to capture the image they're seeing in front of them. Light passes through the lens and is reflected hafdl dafknpf off a mirror or prism inside the camera body.</p>
					</a></li>	
				</ul>	
			</div>	
			<div class="serv-col">
				<ul>
					<li><a href="./tentgallery.php"><h3>Rent Tents</h3>
						<p>A DSLR camera works by use of a reflex mirror (or prism) that reflects light into the optical viewfinder, allowing the photographer to capture the image they're seeing in front of them. Light passes through the lens and is reflected hlief sdnihd off a mirror or prism inside the camera body.</p>
					</a></li>
				</ul>	
			</div>	
			<div class="serv-col">
				<ul>
					<li><a href="./guidergallery.php"><h3>Guiding</h3>
						<p>A DSLR camera works by use of a reflex mirror (or prism) that reflects light into the optical viewfinder, allowing the photographer to capture the image they're seeing in front of them. Light passes through the lens and is reflected nldskn sdfnk off a mirror or prism inside the camera body.</p>
					</a></li>
				</ul>	
			</div>			
		</div>
	</section>
	
<!-----------------facilities------------------------->	
	
	<section class="facilities">
		<h1>Our Facilities</h1>
		<div class="para">
			<p>boer ijspug jsdfnoi lskadfoj klsdlfjp fjsg sofjo ojskfm ojsfj sms;of</p>
		</div>
		
		<div class="row">
			<div class="facili-col">
				<img src="../logos&videos/facilitiecamera.jpg" alt="">
				<h3>High Quality Cameras</h3>
				<p>A DSLR camera works by use of a reflex mirror (or prism) that reflects light into the optical viewfinder, allowing the photographer to capture the image they're seeing in front of them. Light passes through the lens and is reflected hafdl dafknpf off a mirror or prism inside the camera body.</p>
				</div>
			<div class="facili-col">
				<img src="../logos&videos/facilitietent.jpg" alt="">
				<h3>High Quality Tents</h3>
				<p>A DSLR camera works by use of a reflex mirror (or prism) that reflects light into the optical viewfinder, allowing the photographer to capture the image they're seeing in front of them. Light passes through the lens and is reflected hafdl dafknpf off a mirror or prism inside the camera body.</p>
				</div>
			<div class="facili-col">
				<img src="../logos&videos/facilitieguider.jpg" alt="">
				<h3>Professional  Guiders</h3>
				<p>Tour guides familiarize people with the history, functions, and customs of a particular region or establishment. Though customers typically include foreigners on vacation, virtually any person can attend a tour.</p>
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
		<p>powerd by ©nevindu</p>
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
