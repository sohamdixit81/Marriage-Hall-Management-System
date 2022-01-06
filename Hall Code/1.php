
<?php
include_once 'database.php';
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$hall_type=$_POST['type'];
$dd=$_POST['dd'];
$mm=$_POST['mm'];
$yy=$_POST['yy'];
if (isset($_POST['submit'])) {
		$sql="SELECT * FROM register WHERE dd='$dd' AND mm='$mm' AND yy='$yy';";
		$result=mysqli_query($connect,$sql);
		$results=mysqli_num_rows($result);
		if ($results==1) {
			echo "<script> 
					window.location.href='registration.php';
					alert('Hall is Booked For the Date');
					</script>";
		}
		else
		{
				$sql1="INSERT INTO register(name,email,mobile,dd,hall_type,mm,yy) VALUES('$name','$email','$mobile','$dd','$hall_type','$mm','$yy'); ";
				$result1=mysqli_query($connect,$sql1);
				echo "<script> 
					window.location.href='index.php';
					alert('hall booked successfully');
					</script>";

		}
	}




?>