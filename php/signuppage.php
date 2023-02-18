<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Signup page</title>
<link rel="stylesheet" type="text/css" href="../css/signupstyle.css">	
<script type="text/javascript">
//------------------------------------------------------- 
	function validateFirstName()
	{
	//Read the value and assign to the variable
		var fname = document.getElementById("txtf_name").value;
	//CHeck whether value exsists or not
		if(fname=="" || fname== null)
			{
				alert("Please enter your first name");
				return false;
			}
		return true;
	}
//------------------------------------------------------- 
	function validateLastName()
	{
	//Read the value and assign to the variable
		var lname = document.getElementById("txtl_name").value;
	//CHeck whether value exsists or not
		if(lname=="" || lname== null)
			{
				alert("Please enter your last name");
				return false;
			}
		return true;
	}	
//--------------------------------------------------------
	function validateEmail()
	{
		var email = document.getElementById("txtemail").value;
		
		var len = email.length;
		var at = email.indexOf("@");
		var dt = email.lastIndexOf(".");
		
		if((at<2) || ((dt-at)<2) || ((len-dt)<2))
			{
				alert("Please enter valid email address");
				return false;
			}
		return true;
	}
//------------validate()-----------------------------
	function validate()
	{
		if(validateFirstName() && validateLastName && validateEmail())
			{
				alert("Reservation has been Added");
			}
	}
</script>	
</head>

<body>
	
	<div class="navbar">
		<a href="../Welcome page.html"><img src="../logos&videos/TraveL PARTNER.png" class="logo" alt=""></a>

			<ul>
				<li><a href="../Welcome page.html">Home</a></li>
				<li><a href="#">Gallery</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Profile</a></li>

			</ul>
	</div>
	<div class="form" >
		<h1>Signup</h1>
		<form action="signup.php" method="post">
			<div class="card">
				<input type="text" id="txtf_name" name="fname" required>
				<label>First Name</label>
				<span></span>
			</div>
			<div class="card">
				<input type="text" id="txtl_name" name="lname" required>
				<label>Last Name</label>
				<span></span>
			</div>
			<div class="card">
				<input type="gmail" id="txtemail" name="email" required>
				<label>Mail ID</label>
				<span></span>
			</div>
			<div class="card">
				<input type="password" id="password" name="password" maxlength="10" min="8" required>
				<label> New Password</label>
				<span></span>
			</div>
			<input type="submit" value="Signup" onClick="validate()">
			<div class="signupbtn">
				continue with google <li><a href="https://support.google.com/mail/answer/8494?hl=en&co=GENIE.Platform%3DDesktop"><img src="../logos&videos/google.png" alt=""/></a></li>	
			</div>
		</form>	
	</div>
	
	<ul class="backbtn">
		<li><a href="loginpage.php">Signin</a></li>
	</ul>
</body>
</html>
