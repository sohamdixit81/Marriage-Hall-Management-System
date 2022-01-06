<?php
$username=$_POST['username'];
	$password=$_POST['password'];

if (isset($_POST['submit'])) {
	include_once 'database.php';
	
	
	if(empty($username)||  empty($password)){
		echo "<script>
					window.location.href='login.php';
					alert('empty field!!');
					</script>";	
				// header("location: ../index.php?signup=empty");
				exit();
			}
			else
			{
				$sql2="SELECT * FROM users WHERE username='$username';";
				$result=mysqli_query($connect,$sql2);
				$results= mysqli_num_rows($result);
				if ($results == 1) {
				$sql3="SELECT * FROM users WHERE password_1='$password' AND username='$username';";
				$result1=mysqli_query($connect,$sql3);
				$results1= mysqli_num_rows($result1);
				if ($results1 ==1) {	
				echo "<script>
					window.location.href='home.php';
					alert('Login Successfully!!');
					</script>";		
			 		// header("location: ../pratik.php?login=success");
				}
				else
				{
					echo "<script>
					window.location.href='index.php?option=login';
					alert('Wrong Password!!');
					</script>";
					//header("location: ../index.php?login=wrong_password");
				exit();
				}
					

				}
				else
				{
					$sql4="SELECT * FROM admin WHERE username='$username';";
				$result2=mysqli_query($connect,$sql4);
				$results2= mysqli_num_rows($result2);
				if ($results2 ==1) {
					$sql5="SELECT * FROM admin WHERE password='$password';";
				$result3=mysqli_query($connect,$sql5);
				$results3= mysqli_num_rows($result3);
					if ($results3 ==1) {
							echo "<script>
					window.location.href='admin.php';
					alert('Login Successfully!!');
					</script>";
						// header("location: ../display.php?login=success");
					}
					else
					{
						echo "<script>
					window.location.href='login.php';
					alert('Wrong Password!!');
					</script>";
						// header("location: ../index.php?login=wrong_password");
						exit();
					}

				}
				else
				{
					echo "<script>
					window.location.href='index.php?option=login';
					alert('Invalid User Name!!');
					</script>";
					//header("location: ../index.php?option=login");
				exit();
				}
				}

				
				

			}
			
}
?>
