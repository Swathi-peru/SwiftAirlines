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
    h3, h4, h5, h6 {
                font-family: sans-serif;
                color: white;
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
	<form action="check.php" id="modify" method="POST" >
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
			<img src = "images/page2_img1.jpg" width=350 px height= 200 px>	
			<br>
			<img src = "images/page3_img2.jpg" width=350 px height= 200 px>
			<br>
			<img src = "images/page3_img1.jpg" width=350 px height= 200 px>
		</article>
		<article class="col2 pad_1">
		<h1>Enter flight details to be modified</h1>
					<br>
					<div class="wrapper">
					<h3><b>Flight No</b></h3>
					<input type="text" name="fno" placeholder="Enter Flight No." required>
					</div>
					<div class="wrapper">
					<h3 for="data"><b>Attribute to be modified</b></h3>
					<input type="text" placeholder="SELECT" name="data" list="attributes" onchange="yesnoCheck(this);" required>
					<datalist id="attributes" >
						<option value="Departue From">
						<option value="Arrival To">
						<option value="Departure Date">
						<option value="Arrival Date">
						<option value="Departure Time">
						<option value="Arrival Time">
						<option value="Economy Seats">
						<option value="business Seats">
						<option value="Economy Seat Price">
						<option value="business Seat Price">
					</datalist>
					</div>
					<div id="dpf" style="display: none;">
					<h3><b>Departure from</b></h3> <input type="text" placeholder="From" name="dpf" /><br />
					</div>
					<div id="dsf" style="display: none;">
					<h3 for="dsf"><b>Arrival to</b></h3>
					<input type="text" placeholder="to" name="dsf" required />
					</div>
					<br>
					<div id="dpd" style="display: none;">
					<div class="form-group">
						<div class="bg">
					<h3 for="dpd"><b>Departure date</b></h3>
					<input class="form-control" type="date" placeholder="Enter the Departure date" name="dpd" required >
						</div>
					</div>
					</div>
					<br>
					<div id="dsd" style="display: none;">
					<div class="form-group">
						<div class="bg">
					<h3 for="dsd"><b>Arrival date</b></h3>
					<input class="form-control" type="date" placeholder="Enter the Arrival date" name="dsd" required >
						</div>
					</div>
					</div>
					<br>
					<div id="dpt" style="display: none;">
					<div class="form-group">
						<div class="bg">
					<h3 for="dpt"><b>Departure time</b></h3>
					<input class="form-control" type="time" placeholder="Enter the Departure date" name="dpt" required >
						</div>
					</div>
					</div>
					<br>
					<div id="dst" style="display: none;">
					<div class="form-group">
						<div class="col-lg-12">
					<h3 for="dst"><b>Arrival time</b></h3>
					<input class="form-control" type="time" placeholder="Enter the Arrival date" name="dst" required >
						</div>
					</div>
					</div>
					<br>
					<div id="es" style="display: none;">
					<div class="wrapper">
					<h3 for="es"><b>Economy Seats</b></h3>
					<input type="text" placeholder="Enter the number of Economy seats" name="es" required >
					</div>
					</div>
					<div id="bs" style="display: none;">
					<div class="wrapper">
					<h3 for="bs"><b>business Seats</b></h3>
					<input type="text" placeholder="Enter the number of business seats" name="bs" required >
					</div>
					</div>
					<div id="ep" style="display: none;">
					<div class="wrapper">
					<h3 for="ep"><b>Economy seat price</b></h3>
					<input type="text" placeholder="Enter the price of an econonmy seat" name="ep" required >
					</div>
					</div>
					<div id="bp" style="display: none;">
					<div class="wrapper">
					<h3 for="bp"><b>Buissness Seat price</b></h3>
					<input type="text" placeholder="Enter the price of a business seat" name="bp" required >
					</div>
					</div>
					<div class="wrapper">
					<input type ="submit" class="button1" name="modify" value="MODIFY FLIGHT" >
					</div>
					</form>
		</article>
		<?php 
		if(isset($_POST['modify'])===true)
		{	
			
			$FlightNo = $_POST['fno'];
			$DepCity=$_POST['dpf'];
			$s1="UPDATE flightdetails SET DepCity = '$DepCity' WHERE FlightNO = '$FlightNo'";
			if(mysqli_query($conn,$s1))
				{ 
						echo '<script language="javascript">';
						echo 'alert("Flight details updated")';
						echo '</script>';
				}
			else
				{
						echo '<script language="javascript">';
						echo 'alert("Error Flight details could not be updated")';
						echo '</script>';
					
				}
		}	
		if(isset($_POST['dsf'])===true)
		{	
			$FlightNo = $_POST['fno'];
			$DepCity=$_POST['dpf'];
			$s2="UPDATE flightdetails SET DestCity = '$DestCity' WHERE FlightNO = '$FlightNo'";
			if(mysqli_query($conn,$s2))
				{ 
						echo '<script language="javascript">';
						echo 'alert("Flight details updated")';
						echo '</script>';
				}
			else
				{
						echo '<script language="javascript">';
						echo 'alert("Error Flight details could not be updated")';
						echo '</script>';
					
				}
		}
		if(isset($_POST['dpd'])===true)
		{	
			$FlightNo = $_POST['fno'];
			$DepDate=$_POST['dpd'];
			$s1="UPDATE flightdetails SET DepDate = '$DepDate' WHERE FlightNO = '$FlightNo'";
			if(mysqli_query($conn,$s1))
				{ 
						echo '<script language="javascript">';
						echo 'alert("Flight details updated")';
						echo '</script>';
				}
			else
				{
						echo '<script language="javascript">';
						echo 'alert("Error Flight details could not be updated")';
						echo '</script>';
					
				}
		}	
		if(isset($_POST['dsd'])===true)
		{	
			$FlightNo = $_POST['fno'];
			$DesDate=$_POST['dsd'];
			$s1="UPDATE flightdetails SET DesDate = '$DesDate' WHERE FlightNO = '$FlightNo'";
			if(mysqli_query($conn,$s1))
				{ 
						echo '<script language="javascript">';
						echo 'alert("Flight details updated")';
						echo '</script>';
				}
			else
				{
						echo '<script language="javascript">';
						echo 'alert("Error Flight details could not be updated")';
						echo '</script>';
					
				}
		}
		if(isset($_POST['dpf'])===true)
		{	
			$FlightNo = $_POST['fno'];
			$DesDate=$_POST['dsf'];
			$s1="UPDATE flightdetails SET DesDate = '$DesDate' WHERE FlightNO = '$FlightNo'";
			if(mysqli_query($conn,$s1))
				{ 
						echo '<script language="javascript">';
						echo 'alert("Flight details updated")';
						echo '</script>';
				}
			else
				{
						echo '<script language="javascript">';
						echo 'alert("Error Flight details could not be updated")';
						echo '</script>';
					
				}
		}
		
		?>
		<script>
			function yesnoCheck(that) {
			if (that.value == "Departue From") {
				document.getElementById("dpf").style.display = "block";
			} 
			else {
				document.getElementById("dpf").style.display = "none";
			}
			if (that.value == "Arrival To") {
				document.getElementById("dsf").style.display = "block";
			}
			else {
				document.getElementById("dsf").style.display = "none";
			}
			if (that.value=="Departue Date") {
				document.getElementById("dpd").style.display = "block";
			}	
			else {
				document.getElementById("dpd").style.display = "none";
			}
			if (that.value == "Arrival Date") {
				document.getElementById("dsd").style.display = "block";
			}
			else {
				document.getElementById("dsd").style.display = "none";
			}
			if (that.value == "Departure Time") {
				document.getElementById("dpt").style.display = "block";
			}
			else {
				document.getElementById("dpt").style.display = "none";
			}
			if (that.value == "Arrival Time") {
				document.getElementById("dst").style.display = "block";
			}
			else {
				document.getElementById("dst").style.display = "none";
			}
			if (that.value == "Economy Seats") {
				document.getElementById("es").style.display = "block";
			}
			else {
				document.getElementById("es").style.display = "none";
			}
			if (that.value == "business Seats") {
				document.getElementById("bs").style.display = "block";
			}
			else {
				document.getElementById("bs").style.display = "none";
			}
			if (that.value == "Economy Seat Price") {
				document.getElementById("ep").style.display = "block";
			}
			else {
				document.getElementById("ep").style.display = "none";
			}
			if (that.value == "business Seat Price") {
				document.getElementById("bp").style.display = "block";
			}
			else {
				document.getElementById("bp").style.display = "none";
			}
			}
		</script>
			
				
		