<?php

include 'conn.php';

$roomno = $_GET['RoomNo'];

$q = " DELETE FROM customer WHERE RoomNo = $roomno";

mysqli_query($con, $q);

header('location:viewroom.php');

?>