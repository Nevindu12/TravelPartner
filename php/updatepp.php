<?php session_start();
	if(!isset($_SESSION['email'])){
		header("location: loginpage.php");
	}


$email = $_GET["id"];
				  
				  $image ="../userpp/".basename($_FILES["fileImage"]["name"]);
				  move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
				  
				  $con = mysqli_connect("localhost", "root", "", "travelpartner");

                    if (!$con) {
                        die("Connect to a database");
                    }
				  
				  	
//sql quary
					$sql= "UPDATE `signup` SET  `path`= '".$image."' 
					WHERE `email` = '".$email."' ";
				  
				  if(mysqli_query($con,$sql))
					{
						echo "file updated Sucessfully";
					  	header('location: profilepage.php');
					}
				  	else
				  	{
					  	echo "please select the file again !!!!";
					}
					

?>


