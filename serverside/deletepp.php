<?php session_start();
 $con = mysqli_connect("localhost", "root", "", "travelpartner");
	if (!$con) {
		die("Connect to a database");
    }

if(!isset($_SESSION["email"]))
{
 header("location: ../php/loginpage.php");
}

$email =$_SESSION["email"];

 
       
//sql quary
  
  $sql= "UPDATE `singup` SET `path`= null WHERE `email` ='".$email."'";
      
  if(mysqli_query($con,$sql))
   {
    echo "file deleted";
       
   }
    else
    {
     echo "please select the file again !!!!";
    }
     header('location: ../php/profilepage.php');

?>