<?php
@$opt=$_GET['option'];
include('head1.php');
if($opt!="")
{
    if($opt=="display")
    {
         include('reg.php');
    }
    else if($opt=="user")
    {
         include('user.php');
    }
    else if($opt="logout")
    {
    	echo "<script>
					window.location.href='index.php';
					alert('Logout Successfully!!');
					</script>";
    }
}
else
{
    
         include('about.php');
    
}
?>
