<?php
	session_start();

if (isset($_POST["btnsubmit"]))
{
	$email = $_POST["email"];
	$password = $_POST["password"];
	
    $valid = false;

    $con = mysqli_connect("localhost", "root", "", "travelpartner");

    if (!$con) {
	
        die("Connect to a database");
	}
		
   $sql= "SELECT * FROM `signup` WHERE `email`='".$email."' AND `password`='".$password."' ";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) 
		
	{
        $valid = true;
		while($row = mysqli_fetch_assoc($result))
         {
          
          if($row['user_type']=='admin')
          {
           
           header("Location: adminpanel.php");
          }
          else{
           header("Location: fullpage.php");
          }
         }
    }
	
}
else 
{
    $valid = false;
	
}
if ($valid) 
{
	
    $_SESSION["email"] = $email;
}
else 
{
    echo "Please enter correct usernamr and password <br> click here to <a 	href='loginpage.php'> try again</a>";
	
}
	

?>

