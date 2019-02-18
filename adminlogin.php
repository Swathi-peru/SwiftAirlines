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
<style type='text/css'>
            h1,h3, h4, h5, h6 {
                font-family: sans-serif;
                color: black;
            }
        </style>
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
							<li><a href="index.php">Passenger Login</a></li>
							<li><a href="adminlogin.php">Admin Login</a></li>
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
<div class="main">
<!-- content -->
	<section id="content">
		<article class="col1">
			<div class="col1">
			
				<img src = "images/boarding_plane.jpg" width=380 px height=300 px >
			</div>
		</article>
		
		<article class="col2 pad_1">
					<form action=" " id="Login" method="POST" >
					<h1>Admin Login</h1>
					<div class="wrapper">
					<label><b><h1>Username</h1></b></label>
					<input type="text" name="username" placeholder="Enter Username">
					</div>
					<div class="wrapper">
					<label for="psw"><b><h1>Password</h1></b></label>
					<input type="password" placeholder="Enter Password" name="psw" required>
					</div>
					<div class="wrapper">
					<input type ="submit" class="button2" name="login" value="login">
					</div>
					</form>	
		</article>
	</section>
<!-- / content -->
</div>
<?php
	$admin="swift";
	$pass="admin123";
	if(isset($_POST["username"])=== true && isset($_POST["psw"])=== true)
		{	$myusername = mysqli_real_escape_string($conn,$_POST['username']);
			$mypassword = mysqli_real_escape_string($conn,$_POST['psw']); 
			if($myusername===$admin && $mypassword===$pass) {
				echo "<label>logged in</label>";
				header("Location: adminindex.php");
			}else {?>
				<h1> Your Login Name or Password is invalid </h1>
				<?php
			}
		}
?>		