<?php
$con=mysqli_connect("cs-sql2014.ua-net.ua.edu","jjmccormick","11546579");
// Check connection
if (!$con)
{
    die("Connection failed: " . $con->connect_error);
}
mysqli_select_db($con,'jjmccormick');
$result = mysqli_query($con,"SELECT DISTINCT Type FROM ROOM");


echo "<table border='1'>
<tr>
<th>Room Types</th>
</tr>";


while($row = mysqli_fetch_array($result)) {
    echo '<tr>
					<td>'.$row['Type'].'</td>
				</tr>';
}


mysqli_close($con);
