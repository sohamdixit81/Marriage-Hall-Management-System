<?php
include_once 'database.php';
echo '<style>table,th,td{border:3px solid black;}</style><center><table cellspacing="2" cellpadding="2">
    <tr>
        <td><font face="Arial">Name</fond></td>
        <td><font face="Arial">Email</fond></td>    
        <td><font face="Arial">Mobile Number</fond></td>
        <td><font face="Arial">Hall_type</fond></td>
        <td><font face="Arial">Date</fond></td>
    </tr>';
    
        $sql="SELECT * FROM register;";
        $result=mysqli_query($connect,$sql);
        $resultCheck= mysqli_num_rows($result);
        if ($resultCheck > 0) {
            while ($row=mysqli_fetch_assoc($result)) 
            {

                echo '<tr>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['mobile'].'</td>
                        <td>'.$row['hall_type'].'</td>
                        <td>'.$row['dd']."/". $row['mm']."/". $row['yy'].'</td>
                        <td><a href=del.php?name='.$row['name'].'>delete</a></td>
                    </tr>';

            
                    
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
