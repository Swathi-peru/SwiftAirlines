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
<style>
table,th, td {
	
    border-collapse: collapse;
    padding: 15px;
	text-align: left;
}

</style>

</head>
<body id="page1" style="background-image:url("http://localhost/Airline/images/Airlines.jpg")>
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1>
					<img src="images/logo1.jpg">
					<a href="index1.php" id="logo1">Happy Travelling </a><span id="slogan">Happy Travelling</span>
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
							<li><a href="index-1.php">About Us</a></li>
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
				<h1>Your Flight Planner</h1>
				<form id="form_1" action="book.php" method="GET">
					<div class="wrapper pad_bot1">
					</div>
					<div class="form-group">
						<h3>Leaving From:</h3>
						<div class="bg"><input type="text" name="DeptCust"  placeholder="Enter City Name" required pattern="[A-Za-z]+"></div>
					</div>
					
					<div class="wrapper">
						<h3>Going To:</h3>
						<div class="bg"><input type="text" name="DestCust" placeholder="Enter City Name" required pattern="[A-Za-z]+"></div>
					</div>
					<div class="wrapper">
						<h3>Departure Date :</h3>
						<div class="wrapper">
							<input type="date" name="DepDate" placeholder="yyyy-mm-dd" onClick="return Validate();">
							<script type="text/javascript">
<!--
function dateValidation()
{

var obj = document.getElementById("<%=txtDate.ClientID%>");
var day = obj.value.split("/")[0];

var month = obj.value.split("/")[1];
var year = obj.value.split("/")[2];

if ((day<1 || day >31) || (month<1&&month>12)&&(year.length != 4))
{

alert("Invalid Format");return false;
}

else

{

var dt = new Date(year, month-1, day);
var today = new Date();

if((dt.getDate() != day) || (dt.getMonth() != month-1) || (dt.getFullYear()!=year) || (dt>today))
{

alert("Invalid Date");return false;
}

}

}
//-->
</script>
						</div>
					</div>
					<div class="wrapper">
					<br>
						<h3><p>Adult(s):</p></h3>
						<div class="bg"><input type="text" name="NoAdult" placeholder="No of adults" pattern="[0-9]"></div>
					</div>
					<div class="wrapper">
						<h3><p>Children:</p></h3>
						<div class="bg"><input type="text" name="NoChild" placeholder="No of children" pattern="[0-9]"></div>
						</div>
						<div class="wrapper pad_bot1">
						<div class="radio marg_right1">
						<br>
							<h3><input type="radio" name="cclass" value="Economy">Economy<br></h3>
							<br>
							<h3><input type="radio" name="cclass" value="Business">Business<br><br></h3>
							<a href="#" class="button2" onClick="document.getElementById('form_1').submit()">go!</a>
						</div>
					</div>
				</form>
			</div>
		</article>
		<article class="col2 pad_left1" >
		<h1> ENQUIRIES</h1>
		
			
			<br><br><br>
			<h3>Services offered by Swift Airlines</h3>
              <h5>Travel across any 4 metro cities in India</h5>
              <h5>Free Wi-Fi services offered during your flight</h5>
              <h5>UpArrivCity 25 Kg Baggage limit for every passenger</h5>
              <h5>Unlimited Food and Alcohol in Business Class</h5>
              <h5>Avail wheelchairs and emergency services for disabled at free of cost</h5>
			  
			<div class="wrapper">
				<article class="cols">
					<br><br>
					 <img src="http://localhost/Airline/images/service.jpg" width=250 px height=200 px>
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
		
		</article>
	</section>
<!-- / content -->
</div>
<div class="col-lg-8">
          <div class="well bs-component">
            
		</div>
</div>	

			
<div class="body2">
	<div class="main">
<!-- footer -->
		
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now();
 </script>
</body>
</html>