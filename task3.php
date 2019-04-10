<?php

        $con = mysqli_connect('cs-sql2014.ua-net.ua.edu', 'jjmccormick','11546579');

        if(!$con){
            die("Could not connect: " . mysqli_error($con));
        }
        $room_type = $_POST['room_type'];
        $dis_date = $_POST['dis_date'];
        $room_id = $_POST['room_id'];


        $sql = "INSERT INTO ROOM (Type, Discharge_Date, RoomID)
            VALUES ('$room_type','$dis_date','$room_id')";

        mysqli_select_db($con,'jjmccormick');
        $retval = mysqli_query($con, $sql);

        if(!$retval ) {
            die('Could not enter data: ' . mysqli_error($con));
        }
        $result = mysqli_query($con,"SELECT * FROM ROOM");

        echo "<table border='1'>
                <tr>
                <th>Room Type</th>
                <th>Discharge Date</th>
                <th>Room ID</th>
                </tr>";


        while($row = mysqli_fetch_array($result)) {
            echo '<tr>
					<td>'.$row['Type'].'</td>
					<td>'.$row['Discharge_Date'].'</td>
					<td>'.$row['RoomID'].'</td>
				</tr>';
        }



