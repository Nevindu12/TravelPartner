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
<title>Add Guider</title>
<meta name="viewport" content="width=device-width, intial-scale=1.0">	
<link rel="stylesheet" type="text/css" href="../css/addingpagestyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
</head>

<body>
	
	<section class="sub-header">
		<nav>
			<h1>Travel Partner</h1>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onClick="hideMenu()"></i>
				<ul>
					<li><a href="#">Dashboar</a></li>
					<li><a href="fullpage.php">View Site</a></li>
					<li><a href="addingpage.php">Add Images</a></li>
					<li><a href="addguider.php">Add Guiders</a></li>
					<li><a href="contactus.php">Purchase</a></li>
				</ul>
			</div>	
			<i class="fa fa-bars" onClick="showMenu()"></i>
		</nav>
		<h1>Admin Panel</h1>
	</section>
	
	
	<div class="content">
        <div class="add">
            <form action="addguider.php" method="POST" enctype="multipart/form-data">
                <h1>Add Guider</h1>
				<lable>Choose profile picture</lable><br>
                <input type="file" name="pp" id="pp" placeholder="Profile picture" required><br>
                <input type="text" name="name" id="name" placeholder="name" required><br>
                <textarea name="bio" id="bio" cols="30" rows="10" placeholder="Add bio" required></textarea><br>
				
				<?php

                if (isset($_POST["add"])) {
					
					$pp = "../guidpp/" .basename($_FILES["pp"]["name"]);
                    move_uploaded_file($_FILES["pp"]["tmp_name"], $pp);
                    $name = $_POST["name"];
                    $bio = $_POST["bio"];

                    $con = mysqli_connect("localhost", "root", "", "travelpartner");

                    if (!$con) {
                        die("Connect to a database");
                    }
					

                    $sql = "INSERT INTO `guider`(`email`, `pp`, `bio`, `name`) VALUES ('".$_SESSION["email"]."','".$pp."','".$bio."','".$name."')";

                    if(mysqli_query($con, $sql))
                    {
                        echo "Successfull";
						header("Location: addguider.php");
                    }
                    else
                    {
                        echo "Error";
                    }
				  }
                ?>
				
				<input class="button" name="cancel" type="reset" value="Cancel">
				<input class="button" name="add" id="add" type="submit" value="Add">
				
			</form>
		</div>
		
		<div class="signout">
	
		<a id="ex" href="loginpage.php"><button type="submit"  class="btn btn-back">Sign Out</button></a>
	
	</div>	
		
		
	</div>
	
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