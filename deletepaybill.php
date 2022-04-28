<?php

include 'conn.php';

$pid = $_GET['PID'];

$q = " DELETE FROM pay_bill WHERE PID = $pid";

mysqli_query($con, $q);

header('location:viewpaybill.php');

?>