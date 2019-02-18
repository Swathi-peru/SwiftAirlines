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
	table,th,td,tr {
				color: white;
				border: 1px solid white;
				padding: 20px;
				text-align: left;
			}
	tr:hover {background-color: #05e3fc;}
	tr:nth-child(even) {background-color: #000000;}
</style>
</head>
<body id="page11">
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
						<ul id="menu">
							<li id="menu_active"><a href="adminindex.php">Back</a></li>
						</ul>
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
	<form action=" " id="Delete" method="POST" >
		<article class="col1">
			<div class="col1">
				<br><br><br>
				<img src = "images/logo1.jpg" >
				<div class="box1">
					<div class="pad_1">
						<div class="wrapper">
							<p class="pad_bot2">The lure of flying is the lure of beauty </p>
							<p><span class="right">Amelia Earheart</span>&nbsp;<br></p>
						</div>
					</div>
				</div>
			</div>	
			<br>
		</article>
		<article class="col2 pad_1">
			<h1>Enter flight number of the flight to be deleted</h1>
					<div class="wrapper">
					<h3><b>Flight No</b></h3>
					<input type="text" name="fno" placeholder="Enter Flight No." required>
					</div>
					<div class="wrapper">
					<center><input type ="submit" class="button2" name="delete" value="DELETE FLIGHT"></center>
					</div>
		</article>
		</form>
		<?php 
	if (isset($_POST['fno'])===true)
		{
			$FlightNo=$_POST['fno'];
			$delete="CALL deletedata('".$FlightNo. "')";
			(mysqli_query($conn,$delete));
			$res =mysqli_affected_rows($conn);
			if($res>0)
			{
				echo '<script language="javascript">';
						echo 'alert("This flight details are deleted")';
						echo '</script>';
			}	
			else
			{
				echo '<script language="javascript">';
						echo 'alert("Flight details not found")';
						echo '</script>';
			}	
		}	
		?>
				