<?php
	session_start();
	if(!isset($_SESSION['email'])){
		header("location: loginpage.php");
	}
?>
<?php

	 $con = mysqli_connect("localhost", "root", "", "travelpartner");

                    if (!$con) {
                        die("Connect to a database");
                    }
$id = $_GET['id'];

	$sql = "SELECT * FROM `images` WHERE `imgid`= '".$_GET['id']."'";

$result = mysqli_query($con, $sql);


	if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$sql1 = "INSERT INTO `cart`(`imgid`,`email`, `Description`, `price`,`Image`) VALUES ('".$_GET["id"]."','".$_SESSION["email"]."','".$row['Description']."','".$row['price']."','".$row['Image']."')";
					
					$result1 = mysqli_query($con, $sql1);
						
					
					
					}}

	header('location:../php/cartpage.php?id={$id}')

	
?>


