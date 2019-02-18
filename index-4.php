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
<style type='text/css'>
            h1,h3, h4, h5, h6 {
                font-family: sans-serif;
                color: black;
            }
        </style>
		<?php 
  include $_SERVER["DOCUMENT_ROOT"].'/Airline/core/init.php';
?>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page5" style="background-image:url("http://localhost/Airline/site/images/Airlines.jpg")>
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.php" id="logo">SWIFT AIRLINES</a><span id="slogan">Happy Travelling</span></h1>
				<div class="right">
					<nav>
						<ul id="top_nav">
							<li><a href="index.php"><img src="images/img1.gif" alt=""></a></li>
							<li><a href="index-4.php"><img src="images/img2.gif" alt=""></a></li>
							<li><a href="#"><img src="images/img3.gif" alt=""></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="index-1.php">About Us</a></li>
							<li id="menu_active"><a href="index-4.php">Contacts</a></li>
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
				<h3>Contact Us</h3>
				<span class="cols">
					Country:<br>
					City:<br>
					Telephone:<br>
					Email:
				</span>
				India<br>
				Bangalore <br>
				+954 5635600<br>
				<a href="mailto:">swathi@gmail.com</a>
			</div>
		</article>
		<article class="col2 pad_left1">
			<h1>Contact Form</h1>
			<form id="ContactForm" action="" method ="GET">
				<div>
					<div class="wrapper">
						<div class="bg"><input type="text" name ="uname" class="input" /></div>
						<h3>Your Name:</h3><br />
					</div>
					<div class="wrapper">
						<div class="bg"><input type="text" name ="e_mail" class="input" /></div>
						<h3>Your E-mail:</h3><br />
					</div>
					<div class="wrapper">
						<div class="bg"><input type = "text" name="data" class="input"/>
						</div>
						<h3>Your Message:</h3><br />
					</div>
					<a href="#" class="button2" onClick="document.getElementById('ContactForm').submit()">submit</a>
					
				</div>
			</form>
		</article>
	</section>
<!-- / content -->
</div>
<div class="body2">
	<div class="main">
		<?php 
	 if(isset($_GET["uname"])=== true && isset($_GET["e_mail"])=== true )
		{	$uname = $_GET['uname'];
			$e_mail = $_GET['e_mail'];
			$data =$_GET['data'];
			$q10 = "INSERT INTO contacts (`name`,`email`,`data`) VALUES ('$uname','$e_mail','$data')";
			if(mysqli_query($conn,$q10))
			{ echo "Thank you for your feedback";}
			
		}
		?>
<!-- footer -->
		
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>