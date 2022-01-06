<?php
include_once 'database.php';
$name=$_POST['name'];
	
		$sql="SELECT * FROM register WHERE name='$name';";
		$result=mysqli_query($connect,$sql);
		$resultCheck= mysqli_num_rows($result);
		$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="update.php" method="POST">
		<br>
		<table>
			<tr>
				<th>
					<label>Name:-</label>
				</th>
				<th>
					<input type="text" name="name" value="<?php echo $row['name']; ?>" required>
				</th>
			</tr>
			<tr>
				<th>
					<label>Email:-</label>
				</th>
				<th>
					<input type="text" name="email" value="<?php echo $row['email']; ?>" required>
				</th>
			</tr>
			<tr>
				<th>
					<label>mobile:-</label>
				</th>
				<th>
					<input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" required>
				</th>
			</tr>
			<tr>
				<th>
					<label>Hall_type:-</label>
				</th>
				<th>
					<input type="text" name="hall_type" value="<?php echo $row['hall_type']; ?>" required>
				</th>
			</tr>
			<tr>
				<th>
					<label>Date:-</label>
				</th>
				<th>
					<input type="dd" name="dd" value="<?php echo $row['dd']; ?>" required>
					<input type="mm" name="mm" value="<?php echo $row['mm']; ?>" required>
					<input type="yy" name="yy" value="<?php echo $row['yy']; ?>" required>
				</th>
			</tr>
		</table>
		<button type="text" name="but3" value="submit">update</button>
	</form>

</body>
</html>
