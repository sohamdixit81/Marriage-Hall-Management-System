<?php
include_once 'database.php';
$name=$_GET['name'];
	$sql="DELETE FROM users WHERE username='$name';";
	mysqli_query($connect,$sql);
	echo "<script>
					window.location.href='admin.php';
					alert('successfully Deleted!!');
					</script>";

?>