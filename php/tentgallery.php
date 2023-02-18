<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tent Gallery Page</title>
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<link rel="stylesheet" href="../css/tentstyle.css">	
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
					<li><a href="profile.php">Profile</a></li>
				</ul>
			</div>	
			<i class="fa fa-bars" onClick="showMenu()"></i>
		</nav>	
		<h1>Tents</h1>
	</section>
	
<!----------gallery------------->
	
	<div class="gallery" id="gallery">
		<img src="" id="galleryItem" alt="">
		<span onClick="closeImg()">X</span>
	</div>	
		<div class="gallery-item">
			<?php
			$con = mysqli_connect("localhost", "root", "", "travelpartner");  
			
			if (!$con) {
            die("Connect to a database");
				}
			
			$sql = "SELECT * FROM `images`";
			
			 $result = mysqli_query($con, $sql);
			
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					if($row['Category']=='tent'){
					echo "<img id='img-gal' src='".$row['Image']."' alt='' onClick='openImg(this.src)''>";
					}
					
					
					}}

	
			?>
			
		</div>
	
<!------x----gallery-------x------>	
	
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