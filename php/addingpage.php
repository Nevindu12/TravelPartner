<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("location: loginpage.php");
	}
?>

<html>
<head>
<meta charset="utf-8">
<title>Adding Details</title>
<link rel="stylesheet" type="text/css" href="../css/addingpagestyle.css">
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
					<li><a href="addguider.php" >Add Guiders</a></li>
					<li><a href="contactus.php">Purchase</a></li>
				</ul>
			</div>	
			<i class="fa fa-bars" onClick="showMenu()"></i>
		</nav>
		<h1>Admin Panel</h1>
	</section>
	
	
	
	
	
<div class="content">
        <div class="add">
            <form action="addingpage.php" method="POST" enctype="multipart/form-data">
                <h1>Add Image</h1>
                <input type="text" name="title" id="title" placeholder="Title" required><br>
                <input type="file" name="img" id="img" required><br>
                <input type="text" name="category" id="category" placeholder="Category" required><br>
				<input type="text" name="price" id="price" placeholder="Price" required><br>	
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Description" required></textarea><br>
				
				<?php

                if (isset($_POST["add"])) {

                    $title = $_POST["title"];
                    $upimg = "../Uploads/" .basename($_FILES["img"]["name"]);
                    move_uploaded_file($_FILES["img"]["tmp_name"], $upimg);
                    $category = $_POST["category"];
					$price = $_POST["price"];
                    $description = $_POST["description"];

                    $con = mysqli_connect("localhost", "root", "", "travelpartner");

                    if (!$con) {
                        die("Connect to a database");
                    }
					

                    $sql = "INSERT INTO `images`(`email`, `Title`, `Image`, `Category`, `Description`,`price`) VALUES ('".$_SESSION["email"]."','".$title."','".$upimg."','".$category."','".$description."','".$price."')";

                    if(mysqli_query($con, $sql))
                    {
                        echo "Successfull";
						header("Location: addingpage.php");
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
</body>
</html> 
