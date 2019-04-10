<?php
$con=mysqli_connect("cs-sql2014.ua-net.ua.edu","jjmccormick","11546579");
// Check connection
if (!$con)
{
    die("Connection failed: " . $con->connect_error);
}
mysqli_select_db($con,'jjmccormick');
$result = mysqli_query($con,"SELECT * FROM PATIENT");

echo "<table border='1'>
<tr>
<th>PatientID</th>
<th>Address</th>
<th>Name</th>
<th>Sex</th>
<th>Phone</th>
<th>Room ID</th>
</tr>";


    while($row = mysqli_fetch_array($result)) {
        echo '<tr>
					<td>'.$row['PatientID'].'</td>
					<td>'.$row['Address'].'</td>
					<td>'.$row['Name'].'</td>
					<td>'.$row['Sex']. '</td>
					<td>'.$row['Phone']. '</td>
					<td>'.$row['RoomID']. '</td>
				</tr>';
    }


mysqli_close($con);
?>