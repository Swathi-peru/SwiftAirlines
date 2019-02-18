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

</head>
<?php 
  include $_SERVER["DOCUMENT_ROOT"].'/Airline/core/init.php';
?>
</head>
<!-- header -->
<body id="page4">
<div class="body1">
	<div class="main">
	<header>
	<div class="right">
	<nav>
						<ul id="menu">
							<li><a href="index.php">Passenger Login</a></li>
							<li><a href="adminlogin.php">Admin Login</a></li>
						</ul>
					</nav>
	</div>
			<div class="wrapper">
				<h2>
					<img src="images/logo1.jpg" height = 50 px>
					<a href="index1.php" id="logo1"> </a><span id="slogan">Happy Travelling</span>
				</h2>
				<div class="right">
					<nav>
						<ul id="top_nav">
							<li><a href="index1.php"><img src="images/img1.gif" alt=""></a></li>
							<li><a href="index-4.php"><img src="images/img2.gif" alt=""></a></li>
							<li class="bg_none"><a href="#"><img src="images/img3.gif" alt=""></a></li>
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
			<div class="col1">
			
				<img src = "images/boarding_plane.jpg" width=380 px height=300 px >
			</div>
		</article>
		<article class="col2 pad_1">
					<form action=" " id="Login" method="POST" >
					<h2>Passenger Login</h2>
					<div class="wrapper">
					<h3>Username</h3>
					<input type="text" name="username" placeholder="Enter Username">
					</div>
					<div class="wrapper">
					<h3>Password</h3>
					<input type="password" placeholder="Enter Password" name="psw" required>
					</div>
					<div class="wrapper">
					<input type ="submit" class="button2" name="login" value="login">
					<a href="register.php" class="button2" onClick="document.getElementById('Login').reset()">Register Here</a>
					</div>
					</form>	
		</article>
	</section>
<!-- / content -->
     <?php 
	 if(isset($_POST["username"])=== true && isset($_POST["psw"])=== true)
		{	$myusername = mysqli_real_escape_string($conn,$_POST['username']);
			$mypassword = mysqli_real_escape_string($conn,$_POST['psw']); 
			$q1 = ("SELECT Cid FROM customer WHERE FirstName='$myusername' AND Password='$mypassword'");
			$res =  mysqli_query($conn,$q1);
			$count = mysqli_num_rows($res);
			if($count == 1) {
				echo "<label>logged in</label>";
				header("Location: index1.php");
			}else {
				echo '<script language="javascript">';
						echo 'alert("Your username or password is incorrect")';
						echo '</script>';
			}
		}
		?>
		<input type="hidden" name="myusername" value="<?php $myusername;?>"/>

</div>
<article class="cols" >
	<div class="wrapper">
</div>
</article>
<!-- / footer -->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>