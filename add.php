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
	<form action=" " id="Add" method="POST" >
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
					<h1>Enter new flight details</h1>
					<br>
					<div class="wrapper">
					<h3><b>Flight No</b></h3>
					<input type="text" name="fno" placeholder="Enter Flight No." required>
					</div>
					<div class="wrapper">
					<h3 for="dpf"><b>Departure from</b></h3>
					<input type="text" placeholder="From" name="dpf" required>
					</div>
					<div class="wrapper">
					<h3 for="dsf"><b>Arrival to</b></h3>
					<input type="text" placeholder="to" name="dsf" required>
					</div>
					<div class="form-group">
						<div class="col-lg-12">
					<h3 for="dpd"><b>Departure date</b></h3>
					<input class="form-control" type="date" placeholder="Enter the Departure date" name="dpd" required>
						</div>
					</div>
					<br>
					<div class="form-group">
						<div class="col-lg-12">
					<h3 for="dst"><b>Arrival time</b></h3>
					<input class="form-control" type="time" placeholder="Enter the Arrival date" name="dst" required>
						</div>
					</div>
					<br>
					<div class="wrapper">
					<h3 for="es"><b>Economy Seats</b></h3>
					<input type="text" placeholder="Enter the number of Economy seats" name="es" required>
					</div>
					<div class="wrapper">
					<h3 for="bs"><b>business Seats</b></h3>
					<input type="text" placeholder="Enter the number of business seats" name="bs" required>
					</div>
					<div class="wrapper">
					<h3 for="ep"><b>Economy seat price</b></h3>
					<input type="text" placeholder="Enter the price of an econonmy seat" name="ep" required>
					</div>
					<div class="wrapper">
					<h3 for="bp"><b>Business Seat price</b></h3>
					<input type="text" placeholder="Enter the price of a business seat" name="bp" required>
					</div>
					<div class="wrapper">
					<center><button><input type ="submit" class="button1" name="add" value="ADD FLIGHT"></button></center>
					</div>
		</article>
		</form>
	</section>
	<?php 
	if (
				isset($_POST['fno'])===true && isset($_POST['es'])===true && isset($_POST['bs'])===true 
				&& isset($_POST['ep'])===true && isset($_POST['bp'])===true 
				&& isset($_POST['dpd'])===true
				&& isset($_POST['dpt'])===true)
				{ 
					$FlightNo=$_POST['fno'];
					$Eseat=$_POST['es'];
					$Bseat=$_POST['bs'];
					$Eprice=$_POST['ep'];
					$Bprice=$_POST['bp'];
					$DepDate=$_POST['dpd'];
					
					$DepTime=$_POST['dpt'];
					
					$DepCity=$_POST['dpf'];
					$DestCity=$_POST['dsf'];
					$add="INSERT INTO flightdetails(FlightNo,Eseat,Bseat,Eprice,Bprice,DepDate,DepTime,DepCity,DestCity)VALUES('$FlightNo','$Eseat','$Bseat','$Eprice','$Bprice','$DepDate','$DepTime','$DepCity','$DestCity')";
					if(mysqli_query($conn,$add))
				{ 
						echo '<script language="javascript">';
						echo 'alert("Flight details inserted")';
						echo '</script>';

				}
					else
					{
						echo '<script language="javascript">';
						echo 'alert("Error Flight details could not be inserted")';
						echo '</script>';
					}
				}
	?>			
	<script type="text/javascript">

function confSubmit( ) {
if (confirm("Flight details submitted")) {
}

else {
alert("");
}
}
</script>