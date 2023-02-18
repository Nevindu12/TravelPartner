
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login page</title>
<meta name="viewport" content="width=device-width, intial-scale=1.0">	
<link rel="stylesheet" type="text/css" href="../css/loginstyle.css">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	
<script>	
//-------------------validate UserName------------------------------------ 
	function validateUname()
	{
	//Read the value and assign to the variable
		var uname = document.getElementById("txtUserName").value;
	//CHeck whether value exsists or not
			if(uname=="admin")
			{
				
				return true;
			}
		else
		{
			alert("Please enter your user name");
			return false;
		}
		
	}
//-----------validate()---------------
	function validate()
	{
		if(validateUname())
			{
				alert("Reservation has been Added");
			}
		
	}
</script>
</head>

<body>	
	
	<div class="navbar">
		
		<a href="../Welcome page.html"><img src="../logos&videos/TraveL PARTNER.png" class="logo"></a>
		
		<ul>
			<li><a href="../Welcome page.html">Home</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Profile</a></li>

		</ul>
	</div>
	
	<div class="form">
		<h1>Sign in</h1>
		<form action="login.php" method="post">
			<div class="card">
				<input type="gmail" id="txtemail" name="email" required>
				<label>E-Mail</label>
				<span></span>
			</div>
			<div class="card">
				<input type="password" name="password" required>
				<label>Password</label>
				<span></span>
			</div>
			<div class="forgotpw">forgot password?</div>
			<div class="chk">
				<input type="checkbox" name="remember" value="1"  >
				<label>Remember me</label>
				<span></span>
			</div>
			<br>
			<input type="submit" value="Sign in" name="btnsubmit" onClick="validate()">
			<div class="signbtn">
				not a member? <a href="signuppage.php">signup</a>	
			</div>	
		</form>	
	</div>	
	<ul class="backbtn">
		<li><a href="../Welcome page.html">Back</a></li>
	</ul>
	
</body>
</html>
