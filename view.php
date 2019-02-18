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
		<div class="wrapper">
<?php 
	$a=("SELECT * FROM flightdetails");
	$view=mysqli_query($conn,$a);
	if(mysqli_num_rows($view) > 0) 
			{ ?>
				<table>
				<thead>
				<tr>
				<th>Flight No </th>
				<th>Eseat</th>
				<th>Bseat</th>
				<th>Eprice</th>
				<th>BPrice</th>
				<th>Departure Date</th>
				<th>Departure Time</th>
				<th>Departure City</th>
				<th>Arrival City</th>
				</tr>
				</thead>
				<tbody>
<?php				
						while($row=mysqli_fetch_assoc($view))
						{?>
							<tr>
							<td><?php echo $row['FlightNo'] ;?></td>
							<td><?php echo $row['Eseat'] ;?></td>
							<td><?php echo $row['Bseat'] ;?></td>
							<td><?php echo $row['Eprice'] ;?></td>
							<td><?php echo $row['Bprice'] ;?></td>
							<td><?php echo $row['DepDate'] ;?></td>
							<td><?php echo $row['DepTime'] ;?></td>
							<td><?php echo $row['DepCity'] ;?></td>
							<td><?php echo $row['DestCity'] ;?></td>
							</tr>
						<?php	
						} ?>
						<br>
				 </tbody>
				 </table>	
	  <?php } ?>
</div>	
</section>
</div>	
</body>