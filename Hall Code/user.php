<?php
include_once 'database.php';
echo '<style>table,th,td{border:3px solid black;}</style><center><table cellspacing="2" cellpadding="2">
    <tr>
        <td><font face="Arial">Name</fond></td>
        <td><font face="Arial">Email</fond></td>   
    </tr>';
    
        $sql="SELECT * FROM users;";
        $result=mysqli_query($connect,$sql);
        $resultCheck= mysqli_num_rows($result);
        if ($resultCheck > 0) {
            while ($row=mysqli_fetch_assoc($result)) 
            {

                echo '<tr>
                        <td>'.$row['username'].'</td>
                        <td>'.$row['email'].'</td>
                        <td><a href=usdel.php?name='.$row['username'].'>delete</a></td>
                        ';

            
                    
        }
        echo '</table></center>';
            
        }


?>
<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
</head>
<body>
</body>
</html>
