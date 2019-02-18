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

<style type='text/css'>
            h3, h4, h5, h6 {
                font-family: sans-serif;
                color: white;
            }
        </style>
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
							<li id="menu_active"><a href="index1.php">Home</a></li>
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
<?php 
  include $_SERVER["DOCUMENT_ROOT"].'/Airline/core/init.php';
?>
<div  class = "col2" id= "Delete">
				<?php
				$t1=$_GET['t1'];
				$t2=$_GET['t2'];
				$name=$_GET['name'];
				$Cnum=$_GET['Cnum'];
				$CVV=$_GET['Cnum'];
				$Price=$_GET['price'];
				$q11 = "INSERT INTO carddetails(Cid,TicketId,Cname,CVV,Cnum,Price) VALUES ('$t2','$t1','$name','$Cnum','$CVV','$Price')";
				if(mysqli_query($conn,$q11))
			{ echo '<script language="javascript">';
						echo 'alert("Amount paid to Swift Airlines")';
						echo '</script>';
						
			}
			else echo mysqli_error($conn);
?>
</div>