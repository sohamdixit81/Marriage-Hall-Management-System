<?php 
require('connection.php');

?>
<font color="white">

	<center>
<div id="login-box">
  <div class="left">
<h1>Registration Form</h1>
		<form class="rform" action="1.php" method="POST" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Name:</td>
					<Td><input  type="text"  class="form-control" name="name" required/></td>
				</tr>
				<tr>
					<td>Email:</td>
					<Td><input type="email"  class="form-control" name="email" required/></td>
				</tr>

				<tr>
					<td>Mobile:</td>
					<Td><input  class="form-control" type="text" name="mobile" required/></td>
				</tr>
				

				<tr>
					<td><label >Hall type:</label></td>
                   <td> <select name="type">
                    	<option value="">none</option>
                        <option value="wedding">wedding hall</option>
                        <option value="conference">conference hall</option>
                        <option value="party">party hall</option>
                        <option value="reception">reception hall</option>
                        <option value="concert">concert hall</option>
                    </select></td>
				</tr>

				<tr>
					<td>date of event:</td>
					<Td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=2015;$i<=2030;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" name="submit" value="submit"></input>
<input type="reset"  value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
</div></div></center></body>
</html>