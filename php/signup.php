<?php
	session_start();

	$fname =$_POST["fname"];
	$lname = $_POST["lname"];
	$email =$_POST["email"];
	$password = $_POST["password"];

//database connection
$conn = new mysqli('localhost','root','','travelpartner');
if($conn->connect_error)
{
	
	due('connection Failed :'.$conn->connect_error);
} 

$sql = "SELECT * FROM `signup` WHERE `email`= '". $email . "'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
 {
        echo '<script>alert("E-mail already registered")</script> ';
		
		header("location: signuppage.php");
  
       
    
    } 
 else
 {
	$stmt =$conn->prepare("INSERT INTO signup(f_name,l_name,email,password) values(?,?,?,?)");
	$stmt->bind_param("sssi",$fname,$lname,$email,$password);
	$stmt->execute();
	
	echo "Register Done <br> click here to <a href='loginpage.php'> Sign In </a>" ;
	
	
	$stmt->close();
	$conn->close();
}

?>



