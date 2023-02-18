<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, intial-scale=1.0">	
<link rel="stylesheet" href="../css/contactstyle.css">
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
					<li><a href="aboutpage.php">About Us</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="profilepage.php">Profile</a></li>
				</ul>
			</div>	
			<i class="fa fa-bars" onClick="showMenu()"></i>
		</nav>	
		<h1>Contact Us</h1>
	</section>
	
<!----------contact us---------->
	
	<section class="location">
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.260598270894!2d79.84192432203403!3d6.91269262008293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25942414af9a1%3A0x782f4cfc829b5483!2sBank%20of%20Ceylon%20(BOC)%20Merchant%20Tower!5e0!3m2!1sen!2slk!4v1655306751777!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		
	</section>
	
	<section class="cont-us">
		
		<div class="row">
			<div class="cont-col">
				<div>
					<i class="fa fa-home"></i>
					<span>
						<h5>No23, Hawlock city, Colombo</h5>
						<p>Visit us</p>
					</span>
				</div>
				<div>
					<i class="fa fa-phone"></i>
					<span>
						<h5>+94702370698</h5>
						<p>Call us</p>
					</span>
				</div>
				<div>
					<i class="fa fa-envelope-o"></i>
					<span>
						<h5>travelpartnercom@gmail.com</h5>
						<p>Email us your query</p>
					</span>
				</div>
			</div>
			
			
			
		<div class="cont-col">
				<form action="contactemail.php" method="post">
					<input type="text" name="name" placeholder="Enter your name" required>
					<input type="email" name="email" placeholder="Enter your email address" required>
					<input type="text" name="subject" placeholder="Enter your subject" required>
					<textarea rows="8" name="message" placeholder="Message" required></textarea>
					<button type="submit" class="submit red-btn">Send message</button>
				</form>
		</div>
		</div>
		
	</section>
	
	
	<!-----------footer--------------->
	
	<section class="footer">
		<hr>
		<h4>About Us</h4>
		<p>A travel agency is a private retailer or public service that provides <br>travel and tourism-related services to the general public on behalf of accommodation or travel <br>suppliers to offer different kinds of travelling packages for each destination.</p>
		<div class="icons">
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-instagram"></i>
		</div>
		<p>powerd by ©travelpartner</p>
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
