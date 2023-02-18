<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("location: loginpage.php");
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, intial-scale=1.0">	
<link rel="stylesheet" href="../css/adminstyle.css">	
</head>

<body>
	<section class="sub-header">
		<nav>
			<h1>Travel Partner</h1>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onClick="hideMenu()"></i>
				<ul>
					<li><a href="fullpage.php">View Site</a></li>
					<li><a href="addingpage.php">Add Images</a></li>
					<li><a href="addguider.php">Add Guiders</a></li>
					<li><a href="contactus.php" id="col4" >Purchase</a></li>
				</ul>
			</div>	
			<i class="fa fa-bars" onClick="showMenu()"></i>
		</nav>	
		<h1>Admin Panel</h1>
	
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