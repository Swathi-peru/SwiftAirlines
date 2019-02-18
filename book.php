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
  global $price;
?>
<style type='text/css'>
           h1, h3, h4, h5, h6 {
                font-family: sans-serif;
                color: black;
            }

	table,th,td,tr {
				color: black;
				border: 1px solid white;
				padding: 20px;
				text-align: left;
			}
	tr:hover {background-color: #05e3fc;}
	tr:nth-child(even) {background-color: #000000;}
	tr:nth-child(even) {background-color: #000000;}
}
</style>
</head>
<!-- header -->
<body id="page5">
<div class="body1">
	<div class="main">
	<header>
			<div class="wrapper">
				<h1>
					<img src="images/logo1.jpg" height = 50 px>
					<a href="index.php" id="logo1"> </a><span id="slogan">Happy Travelling</span>
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

		<div class="col2">
		<div class="wrapper">
	<form class="form-horizontal" action="details.php " method="GET">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<br><br><br>
			<?php
			if (
				isset($_GET['DeptCust'])===true && isset($_GET['DestCust'])===true
				&& isset($_GET['DepDate'])===true
				&& isset($_GET['NoAdult'])===true && isset($_GET['NoChild'])===true
				&& isset($_GET['cclass'])===true)	
				{ 
					$DeptCust = $_GET['DeptCust'];
					$DestCust = $_GET['DestCust'];
					$DepDate  = $_GET['DepDate'];
					$NoAdult = $_GET['NoAdult'];
					$NoChild = $_GET['NoChild'];
					$Cclass = $_GET['cclass'];
			  	
					{   
						echo '<h1>Flight from '.$DeptCust. ' to '.$DestCust. '</h1>';
						$query = "SELECT * FROM flightdetails WHERE DepCity = '$DeptCust' AND DestCity = '$DestCust' AND DepDate = '$DepDate' ";
						$result = mysqli_query($conn,$query);
						if($result) 
							{ 	
								if(mysqli_num_rows($result) > 0) 
								{ 
									while($row = mysqli_fetch_assoc($result)) { ?>
										<table>
										<thead>
										<tr>
										<th>Flight No  </th>
										<th>Departure Time </th>
										<th>Seats Left </th>
										<th>Price  </th>
										<th>Total Price</th>
										</tr>
										</thead>
										<tbody>
										<tr>
										<?php if($Cclass==='Economy') { ?> 
											<td><input type="radio" name="choseDepCity" value="<?php echo $row['FlightNo']; ?>"/><?php echo $row['FlightNo']; ?></td>
											<td><?php echo $t1=$row['DepTime']; ?></td>
											<td><?php echo $row['Eseat']; ?></td>
											<td><?php echo $row['Eprice']; ?></td>
											<td><?php echo $price=($row['Eprice']*($NoAdult+$NoChild)); ?></td>
										<?php } else if($Cclass==='Business') { ?> 
											<td><input type="radio" name="choseDepCity" value="<?php echo $row['FlightNo']; ?>"/><?php echo $row['FlightNo']; ?></td>
											<td><?php echo $t1=$row['DepTime']; ?></td>
											<td><?php echo $row['Bseat']; ?></td>
											<td><?php echo $row['Bprice']; ?></td>
											<td><?php echo  $price=($row['Bprice']*($NoAdult+$NoChild)); ?></td>
										<?php } else {
											echo '<script language="javascript">';
											echo 'alert("Not enough seats left, please search again!")';
										echo '</script>';}
											
									}?>
									</tr>
									</tbody>
									</table>
									<br><br>
									<input type ="hidden" value=<?php echo $price?> name="price"/>
									
								<?php 
								}
							 else { echo '<script language="javascript">';
											echo 'alert("No flights found!")';
										echo '</script>';
							 }
							}
					}
				}
					else {  die(mysqli_error($conn)); }
			
			 ?>
			 <h1>Adult Passenger Details</h1>
							<div class="form-group">
								<div class="wrapper">
								<div class="wrapper">
								<h3>Username</h3>
							<input type="text" class="form-control" name= "username"  placeholder="Enter Username" required pattern="[A-Za-z]+">
								<?php $counta = $_GET['NoAdult']; $countc = $_GET['NoChild']; $a = $counta; $c = $countc;  
						$Cclass = $_GET['cclass'];
					$DeptCust = $_GET['DeptCust'];
					$DestCust = $_GET['DestCust'];
					$DepDate  = $_GET['DepDate'];
					$NoAdult = $_GET['NoAdult'];
					$NoChild = $_GET['NoChild'];		
								
								?><input type ="hidden" value=<?php echo $Cclass?> name="class"/>
								    <?php
									while($a>0)
									{?><h4><b>Name</b></h4>
									<input type="text" class="form-control" <?php  if($counta==='1' || $counta==='2' ||$counta==='3'||$counta==='4') echo 'required'; ?> name="aname1" id="inputEmail" placeholder="Name">
								</div>
								<div class="wrapper">
									<h4><b>Age</b></h4>
									<input type="text" class="form-control" <?php  if($counta==='1' || $counta==='2'||$counta==='3'||$counta==='4') echo 'required'; ?> name="aage1" id="inputEmail" placeholder="Age">
								</div>
								<div class="wrapper">
								<h4><b>Gender</b></h4>
								<select class="form-control" name="asex1" <?php  if($counta==='1' || $counta==='2'||$counta==='3'||$counta==='4') echo 'required'; ?> id="select">
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
								<input type="hidden" name="count_a" value="<?php echo $counta;?>"/>
								<input type="hidden" name="count_c" value="<?php echo $countc;?>"/>
								<input type="hidden" name="cclass" value="<?php $Cclass;?>"/>
								<input type="hidden" name="deptcust" value="<?php echo $DeptCust;?>"/>
								<input type="hidden" name="destcust" value="<?php echo $DestCust;?>"/>
								<input type="hidden" name="depdate" value="<?php echo $DepDate;?>"/>
									</div><?php  
									$a =$a -1;}?>
							</div>
							</div>
							</div>
		
		<div class = "wrapper">
		<div class ="pad_1">
		<?php if($countc >0)
		{ ?>
							<h1>Child Passenger Details</h1>
							<div class="form-group">
								<div class="wrapper">
								    <?php
									while($c>0)
									{?><h4><b>Name</b></h4>
									<input type="text" class="form-control" <?php  if($counta==='1' || $counta==='2' ||$counta==='3'||$counta==='4') echo 'required'; ?> name="aname1" id="inputEmail" placeholder="Name">
								</div>
								<div class="wrapper">
									<h4><b>Age</b></h4>
									<input type="text" class="form-control" <?php  if($counta==='1' || $counta==='2'||$counta==='3'||$counta==='4') echo 'required'; ?> name="aage1" id="inputEmail" placeholder="Age">
								</div>
								<div class="wrapper">
								<h4><b>Gender</b></h4>
								<select class="form-control" name="asex1" <?php  if($counta==='1' || $counta==='2'||$counta==='3'||$counta==='4') echo 'required'; ?> id="select">
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
									</div><?php  $c=$c -1;}?>
							</div>
		</div>						
		</div>	<?php } ?>
			 <center><button type="submit" id="class" name="fdetails" value="true" class="btn btn-primary">Choose Flights</button></center>
		</section>
			
		</form>
		</div>
		</div>
			</div>							
	
		
			
		
			
		