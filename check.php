<?php 
 include $_SERVER["DOCUMENT_ROOT"].'/Airline/core/init.php';
		echo "hiiii";
		if(isset($_POST['modify'])===true)
		{	
			echo "hi";
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
				
?>