<?php
include_once 'database.php';
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$hall_type=$_POST['hall_type'];
$dd=$_POST['dd'];
$mm=$_POST['mm'];
$yy=$_POST['yy'];
$sql="UPDATE register SET email='$email',mobile='$mobile',dd='$dd',mm='$mm',yy='$yy' WHERE name='$name';";
$result=mysqli_query($connect,$sql);
echo "<script>
					window.location.href='view.php';
					alert('updated Successfully!!');
					</script>";	
?>