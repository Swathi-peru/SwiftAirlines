<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
<?php 
  include $_SERVER["DOCUMENT_ROOT"].'/Airline/core/init.php';
?>

</head>
<!-- header -->
<body id="page4">
<div class="body1">
	<div class="main">
	<header>
			<div class="wrapper">
				<h1>
					<img src="images/logo1.jpg" height = 50 px>
					<a href="index1.php" id="logo1"> </a><span id="slogan">Happy Travelling</span>
				</h1>
				<div class="right">
					<nav>
						<ul id="top_nav">
							<li><a href="index1.php"><img src="images/img1.gif" alt=""></a></li>
							<li><a href="index-4.php"><img src="images/img2.gif" alt=""></a></li>
							<li class="bg_none"><a href="#"><img src="images/img3.gif" alt=""></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
							<li><a href="index-1.php">FAQ</a></li>
							<li><a href="index-4.php">Contacts</a></li>
							<li><a href="index.php">Login/Register</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>
<div class="main">
	<div id="banner">
		<div class="text1">
			<span>SOMETHING SPECIAL<br> IN THE AIR</span><p></p>
		</div>
		
	</div>
</div>
<!-- / header -->
<div class="main">
<!-- content -->
<section id="content">
		<article class="col1">
		<div class="pad_1">
		<form action=" " id="Register" method="GET" >
					<h1>USER REGISTERATION</h1>
					<div class="wrapper">
					<h3>First name</h3>
					<input type="text" name="FirstName" placeholder="Enter First Name" required pattern="[A-Za-z]+">
					</div>
					<div class="wrapper">
					<h3>Last name</h3>
					<input type="text" name="LastName" placeholder="Enter Last Name" required pattern="[A-Za-z]+">
					</div>
					<div class="wrapper">
					<h3>Phone No</h3>
					<input type="text" name="PhoneNo" placeholder="Enter Phone Number" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]">
					</div>
					<div class="wrapper">
					<h3>Mail</h3>
					<input type="text" name="Mail" placeholder="Enter email id" pattern="[A-Za-z]+@[A-Za-z]+.com">
					</div>
					<div class="wrapper">
					<h3>Address</h3>
					<input type="text" name="Address" placeholder="Enter Address">
					</div>
					<div class="wrapper">
					<h3>Password</h3>
					<input type="password" placeholder="Enter Password" name="Password" required>
					</div>
					<div class="wrapper">
					<input type ="submit" class="button2" name="register" value="register">
					</div>
					<?php 
	 if(isset($_GET["FirstName"])=== true && isset($_GET["LastName"])=== true 
		&& isset($_GET["PhoneNo"])===true && isset($_GET["Mail"])===true
		&& isset($_GET["Address"])===true && isset($_GET["Password"])=== true)
		{	$FirstName = mysqli_real_escape_string($conn,strtolower($_GET['FirstName']));
			$LastName = mysqli_real_escape_string($conn,strtolower($_GET['LastName']));
			$PhoneNo = mysqli_real_escape_string($conn,$_GET['PhoneNo']); 
			$Mail = mysqli_real_escape_string($conn,strtolower($_GET['Mail'])); 
			$Address = mysqli_real_escape_string($conn,strtolower($_GET['Address'])); 
			$Password = mysqli_real_escape_string($conn,$_GET['Password']);
			$q3 = "SELECT FirstName FROM customer WHERE FirstName='$FirstName'";
			$res1 =  mysqli_query($conn,$q3);
			$count1= mysqli_num_rows($res1);
			if ($count1 == 0)
			{$q2 ="INSERT INTO customer(FirstName,LastName,PhoneNo,`Mail`,Address,Password)VALUES('$FirstName','$LastName','$PhoneNo','$Mail','$Address','$Password')";
			if(mysqli_query($conn,$q2))
			{   
				echo '<script language="javascript">';
				echo 'alert("Thank you for registering with SWIFT AIRLINES ")';
				header("Location: index1.php");
				echo '</script>';
			}}
			else 
			{
				echo '<script language="javascript">';
						echo 'alert("Please try another username as this username already exists")';
						echo '</script>';
			}
		}
		?>
					</form>	
					</div>
		</article>
		<article class="col2">
		<div class="pad_1">
		<h1>Welcome to our Website!</h1>
		<br><br><br>
			<h3>Services offered by Swift Airlines</h5>
              <h5>Travel across any 4 metro cities in India</h5>
              <h5>Free 3 course meals for every passenger</h5>
              <h5>Free Wi-Fi services offered during your flight</h5>
              <h5>UpArrivCity 25 Kg Baggage limit for every passenger</h5>
              <h5>Unlimited Food and Alcohol in Business Class</h5>
              <h5>Avail wheelchairs and emergency services for disabled at free of cost</h5>
		</div>	
		<div class="wrapper">
				<article class="cols">
				<div class ="pad_1">
					<br><br>
					 <img src="http://localhost/Airline/images/service.jpg" width=250 px height=200 px>
					 </div>
				</article>
				<div class="box1">
					<div class="pad_1">
						<div class="wrapper">
							<p class="pad_bot2">The lure of flying is the lure of beauty </p>
							<p><span class="right">Amelia Earheart</span>&nbsp;<br></p>
						</div>
					</div>
				</div>
		</div>	
			<div class="wrapper">
				<br><br><br><br>
				<h1>Exciting offers and much more</h1>
				<br><br><br>
			</div>
		</article>
</section>		
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>