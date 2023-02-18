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
<title>Cart Page</title>
<meta name="viewport" content="width=device-width, intial-scale=1.0">	
<link rel="stylesheet" href="../css/cart.css">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
</head>

<body>
	
	<h1><i class="fa fa-shopping-cart" ></i></h1>
	<div class="crt">
			<?php
			$con = mysqli_connect("localhost", "root", "", "travelpartner");  
			
			if (!$con) {
            die("Connect to a database");
				}
			
			$sql = "SELECT * FROM `cart` WHERE `email` = '".$_SESSION["email"]."'";
			
			 $result = mysqli_query($con, $sql);
			
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<section>
					
					<div>
						<img src='".$row['Image']."' alt=''>
						<p>".$row['Description']."</p>
						<h6>$".$row['price']."</h6>
						<span></span>
						<a href='../Order Form.html'><button>Buy now</button></a>
					</div>
					
					</section>	";
					}}
	

			?>
		</div>
	
	<div class="select">
		
	</div>
	
	
</body>
</html>


<!------------------java script----------------->
	
	<script type="text/javascript">
	
	var noti = document.querySelector('h1');
	var select = document.querySelector('.select');
	var button = document.getElementsByTagName('button');
	
	for(but of button)
	{
		
		but.addEventListener('click',(e)=>{
			var add = Number(noti.getAttribute('data-count')||0);
			noti.setAttribute('data-count', add + 1);
			noti.classList.add('zero');
			
			
			
			//----------------
			var parent = e.target.parentNode;
			var clone = parent.cloneNode(true);
			select.appendChild(clone);
			clone.lastElementChild.innerText = "Buy-now";
			if (clone) {
				noti.onclick = ()=>{
					select.classList.toggle('display');
				}
			}
		});
	}
		
	
</script>





























