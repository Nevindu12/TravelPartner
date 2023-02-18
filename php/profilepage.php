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
<title>Profile Page</title>
<meta name="viewport" content="width=device-width, intial-scale=1.0">	
<link rel="stylesheet" href="../css/profilestyle.css">	
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
					<li><a href="contactus.php">Contact</a></li>
					<li><a href="">Profile</a></li>
				</ul>
			</div>	
			<i class="fa fa-bars" onClick="showMenu()"></i>
		</nav>	
		<h1>Profile</h1>
	</section>
	
	
	<div class="signout">
	
		<a id="ex" href="signout.php"><button type="submit"  class="btn btn-back">Sign Out</button></a>
	
	</div>	
	<div class="cart">
	
		<a id="ex" href="cartpage.php"><button type="submit"  class="btn btn-back">Cart</button></a>
	
	</div>	
	
<!----------------pp change-------------------->	
	<?php
	 
	$con = mysqli_connect("localhost", "root", "", "travelpartner");

                    if (!$con) {
                        die("Connect to a database");
                    }
					
				  	
	$sql ="SELECT * FROM `signup` WHERE `email`= '".$_SESSION["email"]."'";
	
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		$row =mysqli_fetch_assoc($result);
		
		
		
	
		
	?>
	<div class="profile-table2">
	<div class="main-name"><h1 align="center"><?php echo $row["f_name"]?></h1></div>
	<div class="img-containor">
		<div class="pro-pic"><img src="<?php echo $row["path"]?>"  width="200" height="200"></div>
		<div class="button-ED">
			<a href='./addUpropic.php?id=<?php echo $row["email"];?>'><img src='../logos&videos/addpp.png' alt='' width='25' height='25'/></a>
			<a href='../serverside/deletepp.php'><img src='../logos&videos/delete-button.png' alt='' width='25' height='25' /></a>
		</div>
	</div>
	<div class="pro-content">
	<div class="name">
		<div class="lable-pro">
		<h5>Full Name</h5>
		<h5>Email</h5>
		</div>
		<div class="input-pro">
		<input type="text" name="txtFullName" id="txtFullName" value="<?php echo $row["f_name"];?>" readonly> <br>
	
		
		<input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row["email"];?>" readonly> <br>
	
		</div>	
	</div>
	<div class="back-button">
		<a href="fullpage.php"><input name="btn" type="button" class="button" id="btn" value="Back"/></a>
	</div>
	</div>	
	</div>
	
	<?php
	}
	mysqli_close($con);
		 ?>
	
	
<!-------footer------->	
	<section class="footer">
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