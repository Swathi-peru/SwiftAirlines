z<!DOCTYPE html>
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
				color: black;
				border: 1px solid black;
				padding: 20px;
				text-align: left;
			}
	tr:hover {background-color: #05e3fc;}
	tr:nth-child(even) {background-color: #000000;}
	tr:nth-child(even) {background-color: #000000;}
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
	if(isset($_GET["choseDepCity"])=== true  ) 
	{ 		
		$flightno = $_GET['choseDepCity'];
		$depdate = $_GET['depdate'];
		$deptcust= $_GET['deptcust'];
		$destcust = $_GET['destcust'];
		$cclass = $_GET['cclass'];
		$counta = $_GET['count_a']; $countc = $_GET['count_c'];
		$username = $_GET['username'];
		$price = $_GET['price'];
		$class = $_GET['class'];
		$aname = $_GET['aname1'];
		$aage = $_GET['aage1'];
		$asex = $_GET['asex1'];
		$q4 = ("SELECT * FROM flightdetails WHERE FlightNo='$flightno' AND DepDate='$depdate' AND DepCity ='$deptcust' AND DestCity='$destcust'");
		$q5 = ("SELECT * FROM customer WHERE FirstName='$username'");
		$res4 =  mysqli_query($conn,$q4);
		$res5 =  mysqli_query($conn,$q5);
			if(mysqli_num_rows($res4) > 0) 
			{
				$row = mysqli_fetch_assoc($res4);
				$row1 = mysqli_fetch_assoc($res5);
				$c = $row1['Cid'];
				$dd =$row['DepDate'];
				$dp =$row['DepTime'];
				$dc=$row['DepCity'];
				$dy =$row['DestCity'];
				$fn =$row['FlightNo'];
				$t=$counta+$countc;
				$q6="INSERT INTO bookingdetails(Cid,DepDate,DepTime,DeptCust,DestCust,total,FlightNo,Price,class)VALUES('$c','$dd','$dp','$dc','$dy','$t','$fn','$price','$class')";
				if(mysqli_query($conn,$q6))
				{	?>
				<div class="col2">
					<div class ="pad_left1">
					<form class="form-horizontal" action="#" method="GET">
					<h1>Confirm Booking</h1>
					<div class="wrapper">
					<br>
					<h1>Flight from <?php echo $dc ?> to <?php echo $dy ?> </h1>
					<br>
					<h1>Date <?php echo $dd ?>  Time  <?php echo $dp ?></h1>
					<br>
					<h1>Flight no <?php echo $fn ?> 
					<br>
					<h1>Class <?php echo $class ?>
					<br>
					<h1>Number of adults  <?php echo $counta ?> </h1>
					<br>
					<h1>Number of children  <?php echo $countc ?></h1>
					<br>
					<h1>Amount to be paid <?php echo $price ?></h1>
					<br><br><br>
					<input type ="hidden" value=<?php echo $price?> name="price"/>
					<br><br><br><br>
					<input type ="submit" class="button2" name="less" value="Continue">
					<input type ="submit" class ="button2" name="more" value="Cancel">  
					</div>
					</div>
					</form>
				</div>
	<?php } } }?>
	<div  class = "col2" id= "Delete">
				<?php
				if(isset ($_GET['more'])=== true)
				{
					$q7 = "SELECT * from bookingdetails ORDER BY TicketId DESC LIMIT 1";
					$res7 = (mysqli_query($conn,$q7));
					$r7 = mysqli_fetch_assoc($res7);
					$t =$r7['TicketId'];
					?> <h1> Deleting ticket id <?php echo $t; ?></h1>
					<br><br><br>
					<?php 
					$q8 = "DELETE FROM bookingdetails WHERE TicketId =$t";
						if(mysqli_query($conn,$q8))
							?><h1>Deleted</h1><?php		
				}
				else if (isset($_GET['less'])=== true)
				{
					$q9 = "SELECT * from bookingdetails ORDER BY TicketId DESC LIMIT 1";
					$res9 = (mysqli_query($conn,$q9));
					$r9 = mysqli_fetch_assoc($res9);
					$t1 = $r9['TicketId'];
					$t2 = $r9['Cid'];
					
					?><h1>Thank you </h1>
					<form action="card.php" id="" method="GET" >
						<h1>ENTER CARD DETAILS</h1>
						<br><br><br>
					<h3>A amount of <?php echo $_GET['price'] ?> is paid to Swift Airlines</h3>	
					<div class="wrapper">
					<h3><b>Name</b></h3>
					<input type="text" name="name" placeholder="Enter Name" required pattern="[A-Za-z]+">
					</div>
					<div class="wrapper">
					<h3>CVV</h3>
					<input type="text" name="CVV" placeholder="Enter CVV number" required pattern="[0-9][0-9][0-9]">
					</div>
					<div class="wrapper">
					<h3>Card No</h3>
					<input type="text" name="Cnum" placeholder="Enter Card Number" required pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]">
					</div>
					<input type ="hidden" value=<?php echo $t1?> name="t1"/>
					<input type ="hidden" value=<?php echo $t2?> name="t2"/>
					<input type ="hidden" value=<?php echo $_GET['price']?> name="price"/>
					<div class="wrapper">
					<input type ="submit" class="button2" name="Pay" value="pay">
					</div>
				
					</form
					<?php
				}
				else echo mysqli_error($conn);
?>
</div>
</div>
				
</div>
</body>
</html>