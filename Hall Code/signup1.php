<?php
include_once 'database.php';
$username=$_GET['username'];
$email=$_GET['email'];
$pass1=$_GET['password_1'];
$pass2=$_GET['password_2'];
if(isset($_GET['but1']))
{
	if(empty($username)|| empty($email)|| empty($pass1) || empty($pass2)){
		echo "<script>
					window.location.href='signup.php';
					alert('Empty Field');
					</script>";
				// header("location: ../signup.php?signup=empty");
				exit();
			}
			else
			{
				$sql="SELECT * FROM users WHERE username='$username'";
				$result=mysqli_query($conn,$sql);
				$resultCheck= mysqli_num_rows($result);
				if ($resultCheck ==1) {
					echo "<script>
					window.location.href='signup.php';
					alert('username Already Available');
					</script>";
					// header("location: ../signup.php?signup=usertaken");
				exit();
				}
				else
				{
					// //hashing the password
					// $hashedpwd1=password_hash($pass1,PASSWORD_DEFAULT);
					// $hashedpwd2=password_hash($pass2,PASSWORD_DEFAULT);
					//insert the user into database

					$sql1="INSERT INTO users(username,email,password_1,password_2) VALUES('$username','$email','$pass1','$pass2');";
					mysqli_query($connect,$sql1);
					echo "<script>
					window.location.href='index.php';
					alert('sign up Successfully!!, login to use!!');
					</script>";
					
					exit();
				}

			}

}
?>